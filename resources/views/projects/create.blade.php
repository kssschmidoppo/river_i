@extends('layouts.start')
@include('inc.nav')

<div class="col-lg-12">
   
    <h1 class="my-4">New Project</h1>
        
            <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                Name:
                <br />
                <input type="text" name="name" value="{{ old('name') }}" class="form-control" />
                <br />

                Description:
                <br />
                <textarea  name="description" class="form-control editor">{{ old('description') }}</textarea>
                <br />

                Category:
                <br />
                <select name="category_id" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" 
                            @if ($category->id == old('category_id')) selected 
                            @endif>{{ $category->name }}</option>
                    @endforeach
                </select>
                <br />

                {{-- Photo:
                <br />
                <input type="file" name="photo" />
                <br /><br /> --}}

                {{-- Link:
                <br />
                <input type="text" name="link" value="{{ $project->link }}" class="form-control" />
                <br /> --}}

                <input type="submit" class="btn btn-primary" value="Save" />
                <br /><br />
            </form>
          
    </div><!--col-lg-12-->

@endsection

@section('scrtip')
  @include('info.ckeditor')  
@endsection