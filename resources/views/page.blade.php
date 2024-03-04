@extends('layouts.base')
@section('content')
    <x-page-heading title="{{$page?->title ?? ''}}"/>
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h1 class="mb-5">{{$page?->title ?? ''}}</h1>
        </div>
        <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
            <div class="col-lg-4">
                <img class="img-fluid w-100 h-100" src="{{asset('storage/' . $page?->thumbnail)}}" alt="">
            </div>
            <div class="col-lg-8">
                {!! $page?->body !!}
            </div>
        </div>
    </div>
@endsection
