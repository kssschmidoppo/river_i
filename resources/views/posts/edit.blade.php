@extends('layouts.start')
@include('inc.nav')

@section('content')

    <div class="col-lg-12">

        <h1 class="my-4">Edit Post</h1>

        <form action="{{ route('postts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            Name:
            <br />
            <input type="text" name="name" value="{{ $post->name }}" class="form-control" />
            <br />

            Description:
            <br />
            <textarea name="description" class="form-control">{{ $post->description }}</textarea>
            <br />

            Category:
            <br />
            <select name="category_id" class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" @if ($category->id == $postt->category_id) selected @endif>{{ $category->name }}</option>
                @endforeach
            </select>
            <br />

            Photo:
            <br />
            <input type="file" name="photo" />
            <br /><br />

            <input type="submit" class="btn btn-primary" value="Save" />
            <br /><br />

        </form>

    </div>
    <!-- /.col-lg-12 -->
@endsection