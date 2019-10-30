@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Laravel 6 CRUD Example from scratch - ItSolutionStuff.com</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('projects.create') }}"> Create New Product</a>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Details</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->description }}</td>
                    <td>
                        <form action="{{ route('projects.destroy',$project->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('projects.show',$project->id) }}">Show</a>

                            <a class="btn btn-primary" href="{{ route('projects.edit',$project->id) }}">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

        {!! $projects->links() !!}

    </div>

@endsection
