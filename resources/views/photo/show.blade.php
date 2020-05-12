@extends('layouts.app')

@section('content')

<h1>{{$photo->headline}}</h1>


    <h2>{{$photo->description}}</h2>

    <div class="w-1/2">
        <ul>
            {{-- @foreach($photo->present()->creditsFormatted as $creditItem)
                <li>
                    {!! $creditItem['roleTitle'].": ".$creditItem['contributorList'] !!}
                </li>
            @endforeach --}}
        </ul>
    </div>
@endsection
