@extends('layouts.app')

@section('content')
    <x-admin-sidebar />

    {{-- MAIN --}}
    <div id="main">
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