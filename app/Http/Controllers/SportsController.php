<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SportsRegistration; // Make sure to include this for the model

class SportsController extends Controller
{
    public function index()
    {
        return view('sports.index'); // Returns the index.blade.php view
    }
    public function register($sport)
    {
        return view('sports.register', ['sport' => ucfirst($sport)]);
    }

    public function edit($id)
    {
        // Find the athlete by ID
        $athlete = SportsRegistration::findOrFail($id);

        // Return the view with athlete data
        return view('sports.edit', compact('athlete'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'department' => 'required|string',
            'year_level' => 'required|string',
            'sport' => 'required|string',
        ]);

        // Find the athlete by ID
        $athlete = SportsRegistration::findOrFail($id);

        // Update the athlete's details
        $athlete->update($request->all());

        // Redirect with success message
        return redirect()->route('athletes.list')->with('success', "Athlete's info updated successfully.");
    }



    public function destroy($id)
    {
        // Find the athlete by ID
        $athlete = SportsRegistration::findOrFail($id);

        // Delete the athlete record
        $athlete->delete();

        // Redirect back with a success message
        return redirect()->route('athletes.list')->with('success', "Athlete's info deleted successfully.");
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'department' => 'required|string',
            'year_level' => 'required|string',
            'sport' => 'required|string',
        ]);

        SportsRegistration::create($validated);

        return redirect()->route('athletes.list')->with('success', "You have successfully registered for {$validated['sport']}!");
    }



    public function listAthletes()
    {
        $athletes = SportsRegistration::all(); // Retrieve all registered athletes
        return view('athletes.list', compact('athletes')); // Pass the data to the view
    }
}
