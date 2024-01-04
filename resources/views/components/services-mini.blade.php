@props(['services' => []])
@php $delay = 0.1 @endphp

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            @foreach($services as $service)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{$delay}}s">
                    <div class="d-flex @if ($loop->even) bg-light @endif py-5 px-4">
                        <i class="fa {{$service['faClass']}} fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">{{$service['title']}}</h5>
                            {!! $service['text'] !!}

                            <a class="text-secondary border-bottom" href="{{$service['link']}}">Read More</a>
                        </div>
                    </div>
                </div>
                @php $delay += 0.2 @endphp
            @endforeach
        </div>
    </div>
</div>
