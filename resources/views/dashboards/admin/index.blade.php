@extends('layouts.app')

@section('content')
    <x-admin-sidebar />

    {{-- MAIN --}}
    <div id="main">
        <div class="py-2">
            <button class="openbtn btn btn-lg d-none" onclick="openNav()" id="openSidebar" title="Open Sidebar"><i class="fa-solid fa-circle-arrow-right fa-xl"></i>
                <span>Show Sidebar</span>
            </button>
            <button class="openbtn btn btn-lg" onclick="closeNav()" id="closeSidebar" title="Close Sidebar"><i class="fa-solid fa-circle-arrow-left fa-xl"></i>
                <span>Collapse Sidebar</span>
            </button>
        </div>

        {{-- BREADCRUMBS --}}
        <x-breadcrumbs page="Admin" pagePath="" hasPage="0" mainRoute="" mainPath="" hasMainRoute="0" subRoute="" subPath="" hasSubRoute="0" />
        {{-- END BREADCRUMBS --}}

        {{-- HEADER SECTION --}}
        <div class="container-fluid py-5">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h2 class="display-5 text-primary text-center">Admin Dashboard</h2>
                </div>
            </div>
        </div>
        {{-- END HEADER SECTION --}}
    </div>
    {{-- END MAIN --}}
@endsection