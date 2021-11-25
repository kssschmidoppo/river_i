
@extends('layouts.start')
@include('inc.nav')

@section('content')

    <div class="col-lg-3">

        <h1 class="my-4">Projects Page</h1>
        <div class="list-group">
            @foreach ($categories as $category)
        
            <a href="/?category_id={{ $category->id }}" class="list-group-item">{{ $category->name }}</a>
            @endforeach
        </div>

    </div><!-- col-lg-3 -->

            <!-- Projects-->
            <section class="projects-section bg-light" id="projects">
                <div class="container px-4 px-lg-5">

                    <!-- Featured Project Row-->
                    @foreach ($projects as $project)
                    <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                        <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/bg-masthead.jpg" alt="..." /></div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="featured-text text-center text-lg-left">
                                <h4>{{ $project->name }}</h4>
                                Category: {{ $project->category->name }}
                                <p class="text-black-50 mb-0">{{ $project->description }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <!-- Project One Row-->
                    @foreach ($projects as $project)
                    <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                        <div class="col-lg-6"><img class="img-fluid" src="assets/img/demo-image-01.jpg" alt="..." /></div>
                        <div class="col-lg-6">
                            <div class="bg-black text-center h-100 project">
                                <div class="d-flex h-100">
                                    <div class="project-text w-100 my-auto text-center text-lg-left">
                                        <h4 class="text-white">{{ $project->name }}</h4>
                                        <h5>{{ $project->category->name }}</h5>
                                        <p class="mb-0 text-white-50">{{ $project->description }}</p>
                                        <a href="{{ $project->link }}"></a>
                                        <hr class="d-none d-lg-block mb-0 ms-0" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                
@endsection