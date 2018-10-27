@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <br class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="col-sm-12">
                    <p>Hooray,You are logged in!</p>
                    </div>

                    @if(Auth::user()->role->name == "administrator" )
                    <div class="col-sm-12">
                            As an administrator you can manage other users by clicking  the link
                            <a href="{{route('users.index')}}">Manage Users</a>
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
