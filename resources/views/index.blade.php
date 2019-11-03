@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="card">
                <div class="card-header">
                    Search Users
                </div>
                <div class="card-body">
                    <form method="GET" action="{{ url('index') }}">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="search" class="form-control" placeholder="Search">
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-info">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header">
                    Search Results
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                        @if(count($users) > 0)
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="3" class="text-danger">Result not found.</td>
                            </tr>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
