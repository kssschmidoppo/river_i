@extends('layouts.start')
@include('inc.nav')

@section('content')

    <div class="col-lg-12">

        <h1 class="my-4">Edit Project</h1>

        <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            Name:
            <br />
            <input type="text" name="name" value="{{ $project->name }}" class="form-control" />
            <br />

            Description:
            <br />
            <textarea name="description" class="form-control">{{ $project->description }}</textarea>
            <br />

            Category:
            <br />
            <select name="category_id" class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}"
                        @if ($category->id == $project->category_id) selected
                        @endif>{{ $category->name }}</option>
                @endforeach
            </select>
            <br />

            Photo:
            <br />
            <input type="file" name="photo" />
            <br /><br />

            <input type="submit" class="btn btn-primary" value="Save" />
            <br /><br />

            Link:
            <br />
            <input type="text" name="link" value="{{ $project->link }}" class="form-control" />
            <br />
        </form>

    </div>
    <!-- /.col-lg-12 -->

@endsection