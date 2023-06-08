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
                <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            </li>
            <li class="list-group-item">
                <a href="#">Profile</a>
            </li>
            <li class="list-group-item">
                <a href="#">User Management</a>
            </li>
            <li class="list-group-item">
                <a href="#">Settings</a>
            </li>
        </ul>
    </div>
</div>
{{-- END SIDEBAR SECTION --}}