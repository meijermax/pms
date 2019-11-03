@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 margin-tb">
                <div class="card">
                    <div class="card-header">
                        Edit Project
                        <a class="btn btn-link float-right" href="{{ route('projects.index') }}">Back</a>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('projects.update',$project->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <strong>Name:</strong>
                                <input type="text" name="title" value="{{ $project->title }}" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <strong>Detail:</strong>
                                <textarea class="form-control" style="height:150px" name="description" placeholder="Detail">{{ $project->description }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
