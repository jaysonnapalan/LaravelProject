<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{route('dashboard')}}" class="app-brand-link">
            <span class="app-brand-logo">
                <img src="../assets/img/favicon/slsu-logo.png" alt="" height="50">
            </span>
            <!-- <span class="app-brand-text menu-text fw-bolder ms-2">SLSU-BC</span> -->
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
        <span class="menu-header-text"></span>

        <!-- Dashboards -->

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Main</span>
            <!-- Dashboard -->
        <li class="menu-item active">
            <a href="{{route('dashboard')}}" class="menu-link menu-toggle"> <i class="menu-icon tf-icons bx bx-home"></i>
                <div data-i18n="Dashboards">Dashboards</div>
                <div class="badge bg-success rounded-pill ms-auto">3</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="javascript:void(0);" target="_blank" class="menu-link">
                        <div data-i18n="CRM">Announcements</div>
                        <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Soon</div>
                    </a>
                </li>
                <li class="menu-item active">
                    <a href="{{route('dashboard')}}" class="menu-link">
                        <div data-i18n="Analytics">Analytics</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" target="_blank" class="menu-link">
                        <div data-i18n="eCommerce">Events</div>
                        <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">SOON</div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- <li class="menu-item py-1 {{ request()->is('sports') ? 'active' : '' }}"> -->
        <li class="menu-item py-1">
            <a href="{{ route('sports.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-football"></i>
                <div data-i18n="Dashboards">Sports</div>
            </a>
        </li>
        <li class="menu-item py-1">
            <a href="{{ route('athletes.list') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-group"></i>
                <div data-i18n="Athletes List">Athletes</div>
            </a>
        </li>

        <li class="menu-item py-1">
            <a href="javascript:void(0);" class="menu-link">
                <i class="menu-icon tf-icons bx bx-calendar"></i>
                <div data-i18n="Analytics">Calendar</div>
            </a>
        </li>
        <li class="menu-item py-1">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-message"></i>
                <div data-i18n="Email">Email</div>
                <div class="badge bg-danger rounded-pill ms-auto">2</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link">
                        <div data-i18n="Basic">Inbox</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link">
                        <div data-i18n="Basic">Email Compose</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Components</span>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Email">Tables</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link">
                        <div data-i18n="Basic">sample1</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link">
                        <div data-i18n="Basic">sample2</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link">
                        <div data-i18n="Basic">sample3</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item py-1">
            <a href="{{route('users')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user-circle"></i>
                <div data-i18n="Analytics">Users</div>
            </a>
        </li>
        <li class="menu-item py-1">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                <div data-i18n="Authentications">Authentications</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{route('login')}}" class="menu-link">
                        <div data-i18n="Basic">Login</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="auth-register-basic.html" class="menu-link">
                        <div data-i18n="Basic">Register</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="auth-forgot-password-basic.html" class="menu-link">
                        <div data-i18n="Basic">Forgot Password</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{route('logout')}}" class="menu-link">
                        <div data-i18n="Basic">Logout</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Extras</span>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Email">Example 1</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link">
                        <div data-i18n="Basic">sample1</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link">
                        <div data-i18n="Basic">sample2</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link">
                        <div data-i18n="Basic">sample3</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item py-1">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Email">Example 2</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link">
                        <div data-i18n="Basic">sample1</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link">
                        <div data-i18n="Basic">sample2</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link">
                        <div data-i18n="Basic">sample3</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
<!-- / Menu -->