@extends('layouts.start')
@include('inc.nav')

@section('content')

<div class="col-lg-12">

    <h1 class="my-4">Post</h1>

    <a href="{{ route('projects.create') }}" class="btn btn-info">New Project</a>
    <br /><br />

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th></th>
            </tr>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->name }}</td>
                    <td>${{ $project->price }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('projects.edit', $project->id) }}">Edit</a>

                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display: inline">
                            @method('DELETE')
                            @csrf
                            <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </thead>
    </table>

</div>
<!-- /.col-lg-12 -->

@endsection