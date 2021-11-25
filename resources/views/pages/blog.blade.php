@extends('layouts.start')
@include('inc.nav')

@section('content')

<div class="col-lg-3">

    <h1 class="my-4">Blog</h1>
    <div class="list-group">
        @foreach ($categories as $category)
        <a href="/?category_id={{ $category->id }}" class="list-group-item">{{ $category->name }}</a>
        @endforeach
    </div>

</div><!-- col-lg-3 -->
       
        <div class="row">

            @foreach ($posts as $post)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="/POsT Deteils">{{ $project->name }}</a>
                        </h4>
                        
                        <p class="card-text">{{ $project->description }}</p>
                        <hr />
                        Category: {{ $projectt->category->name }}
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                    </div>
                </div>
                <!--need to add comment field--->
            </div><!--col-lg-4 col-md-6 mb-4-->
            @endforeach

        </div><!-- row -->
@endsection