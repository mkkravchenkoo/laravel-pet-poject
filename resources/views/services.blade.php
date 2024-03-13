@extends('layouts.base')
@section('content')
    <x-page-heading title="Services"/>
    <div class="container">
        <div class="row g-5">
            @foreach($services as $service)
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <a href="{{route('service.show', $service?->slug)}}">
                            <img class="card-img-top" src="{{asset('storage/' . $service?->thumbnail)}}" alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <a href="{{route('service.show', $service?->slug)}}">
                                <h5 class="card-title">{{$service?->title}}</h5>
                            </a>
                            <p class="card-text">{{$service?->excerpt}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row m-5 text-center">
            {{ $services->links() }}
        </div>

    </div>
@endsection
