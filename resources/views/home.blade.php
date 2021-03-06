@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

            </div>

            <div class="card mt-4">
                <div class="card-header">Projects</div>
                    <div class="card-body">

                        <a class="btn btn-primary" href="{{ route('projects.index') }}"> Project overview</a>
                        <a class="btn btn-secondary" href="{{ route('projects.create') }}"> Create New Project</a>
                        @role('admin')
                        <a class="btn btn-info" href="/index"> User List</a>
                        @endrole
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
