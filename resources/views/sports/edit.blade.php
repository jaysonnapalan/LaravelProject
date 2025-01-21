<div class="container mt-2">
    <h3>Edit Athlete Details</h3>

    <form action="{{ route('athletes.update', $athlete->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $athlete->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $athlete->email) }}" required>
        </div>

        <div class="mb-3">
            <label for="phone">Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ old('phone', $athlete->phone) }}" required>
        </div>

        <div class="mb-3">
            <label for="department">Department</label>
            <select class="form-select" id="department" name="department" required>
                <option value="" disabled>Select your department</option>
                <option value="InfoTech" {{ old('department', $athlete->department) == 'InfoTech' ? 'selected' : '' }}>InfoTech</option>
                <option value="MarineBio" {{ old('department', $athlete->department) == 'MarineBio' ? 'selected' : '' }}>MarineBio</option>
                <option value="Agri" {{ old('department', $athlete->department) == 'Agri' ? 'selected' : '' }}>Agri</option>
                <option value="Fisheries" {{ old('department', $athlete->department) == 'Fisheries' ? 'selected' : '' }}>Fisheries</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="year_level">Year Level</label>
            <select class="form-select" id="year_level" name="year_level" required>
                <option value="" disabled>Select Year Level</option>
                <option value="1st Year" {{ old('year_level', $athlete->year_level) == '1st Year' ? 'selected' : '' }}>1st Year</option>
                <option value="2nd Year" {{ old('year_level', $athlete->year_level) == '2nd Year' ? 'selected' : '' }}>2nd Year</option>
                <option value="3rd Year" {{ old('year_level', $athlete->year_level) == '3rd Year' ? 'selected' : '' }}>3rd Year</option>
                <option value="4th Year" {{ old('year_level', $athlete->year_level) == '4th Year' ? 'selected' : '' }}>4th Year</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="sport">Sport</label>
            <select class="form-select" id="sport" name="sport" required>
                <option value="" disabled {{ old('sport', $athlete->sport) ? '' : 'selected' }}>Select Sports</option>
                <option value="baseball" {{ old('sport', $athlete->sport) == 'Baseball' ? 'selected' : '' }}>Baseball</option>
                <option value="Volleyball" {{ old('sport', $athlete->sport) == 'Volleyball' ? 'selected' : '' }}>Volleyball</option>
                <option value="Basketball" {{ old('sport', $athlete->sport) == 'Basketball' ? 'selected' : '' }}>Basketball</option>
                <option value="Badminton" {{ old('sport', $athlete->sport) == 'Badminton' ? 'selected' : '' }}>Badminton</option>
                <option value="Swimming" {{ old('sport', $athlete->sport) == 'Swimming' ? 'selected' : '' }}>Swimming</option>
                <option value="Shot put" {{ old('sport', $athlete->sport) == 'Shot put' ? 'selected' : '' }}>Shot put</option>
                <option value="Runs" {{ old('sport', $athlete->sport) == 'Runs' ? 'selected' : '' }}>Runs</option>
                <option value="Javelin throw" {{ old('sport', $athlete->sport) == 'Javelin throw' ? 'selected' : '' }}>Javelin throw</option>
            </select>
        </div>


        <button type="submit" class="btn btn-warning mt-2">Update Info</button>
    </form>
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">