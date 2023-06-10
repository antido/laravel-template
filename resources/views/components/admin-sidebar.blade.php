{{-- SIDEBAR SECTION --}}
<div class="sidebar" id="mySidebar">
    <div class="sidebar-logo py-5 d-flex justify-content-center">
        <a href="{{ route('admin.dashboard') }}">
            {{-- <img src="{{ asset('assets/images/logo.png') }}" class="img-thumbnail rounded" width="150" height="150" alt="Logo"> --}}
        </a>
    </div>

    <div class="sidebar-content">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <a href="{{ route('admin.dashboard') }}" id="sidebarDashboard">Dashboard</a>
            </li>
            <li class="list-group-item">
                <a href="#" id="sidebarProfile">Profile</a>
            </li>
            <li class="list-group-item">
                <a href="#" id="sidebarUserManagement">User Management</a>
            </li>
            <li class="list-group-item">
                <a href="#" id="sidebarSetting">Settings</a>
            </li>
        </ul>
    </div>

    <div class="py-5 d-flex justify-content-center">
        <button class="openbtn btn btn-lg d-none" onclick="openNav()" id="openSidebar" title="Open Sidebar">
            <i class="fa-solid fa-circle-arrow-right fa-2xl text-light"></i>
        </button>
        <button class="openbtn btn btn-lg" onclick="closeNav()" id="closeSidebar" title="Close Sidebar">
            <i class="fa-solid fa-circle-arrow-left fa-2xl text-light"></i>
        </button>
    </div>
</div>
{{-- END SIDEBAR SECTION --}}