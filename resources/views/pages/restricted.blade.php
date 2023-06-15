@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10 text-center">
                <h1 class="display-4 text-danger py-5">This Page is Restricted!</h1>
                <a href="{{ route('goback') }}" class="btn btn-md  btn-outline-primary">Go Back</a>
            </div>
        </div>
    </div>
@endsection