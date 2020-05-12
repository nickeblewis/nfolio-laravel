@extends('layouts.app')

@section('content')
    <section class="pt-5">
        <div class="container">
            <div class="text-center">
                <h2>Latest Photos</h2>
                <p class="lead">Our latest photos</p>
            </div>
        <div>
        <div class="row">
            @foreach ($photos as $photo)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card card-border border-primary shadow-lg mb-6 mb-md-8 lift lift-lg">
                    <div class="card-body">
                        <a href="/photos/{{$photo->slug}}" class="card-link">
                            <img class="card-img-top" src="{{$photo->image('avatar', 'default', ['w'=>900,'fit'=>null])}}" alt="{{$photo->title}}">
                            <h4 tag="h4" class="card-title">
                                {{$photo->headline}}
                            </h4>
                        </a>
                        {{-- <p class="card-text">
                            {{$photo->description}}
                        </p> --}}
                        {{-- <p class="card-text">
                            <a href="/projects/{{$photo->slug}}" class="card-link">Continue reading...</a>
                        </p> --}}
                    </div>
                    {{-- <div class="card-footer border-0 bg-white">
                        <span class="small">31st March 2020 <strong>·</strong> 1 min read</span>
                    </div> --}}
                </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection
