@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-8 margin-tb">
                <div class="card">
                    <div class="card-header">
                        {{ $project->title }}
                        <a class="btn float-right btn-link" href="{{ route('projects.index') }}">Back</a>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            {{ $project->description }}
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
