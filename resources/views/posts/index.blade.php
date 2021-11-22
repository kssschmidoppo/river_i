@extends('layouts.start')
@include('inc.nav')

@section('content')

<div class="col-lg-12">

    <h1 class="my-4">Post</h1>

    <a href="{{ route('posts.create') }}" class="btn btn-info">New Project</a>
    <br /><br />

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th></th>
            </tr>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->name }}</td>
                   
                    <td>
                        <a class="btn btn-primary" href="{{ route('posts.edit', $post->id) }}">Edit</a>

                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline">
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