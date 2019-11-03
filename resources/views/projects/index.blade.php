@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-8 margin-tb">
                <div class="card">

                    <div class="card-header">
                        Project Overview
                        <a class="btn btn-link float-right" href="{{ route('projects.create') }}"> Create New Project</a>

                    </div>

                    <div class="card-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                            <table class="table table-borderless">

                            @foreach ($projects as $project)
                                <tr>
                                    <td>{{ ++$i }}.   </td>
                                    <td><a class="btn-link" href="{{ route('projects.show',$project->id) }}">{{ $project->title }}</a></td>
                                    <td class="text-right">
                                        <a class="btn btn-primary" href="{{ route('projects.edit',$project->id) }}">Edit</a>

                                        <form action="{{ route('projects.destroy',$project->id) }}" method="POST">



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

                </div>

            </div>
        </div>



    </div>

@endsection
