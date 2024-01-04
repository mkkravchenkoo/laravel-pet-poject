@props(['title' => '', 'text' => '', 'benefits' => [], 'link' => ''])
@php $delay = 0.1 @endphp

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 pt-4" style="min-height: 400px;">
                <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                    <img class="position-absolute img-fluid w-100 h-100" src="img/about.jpg" style="object-fit: cover;" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <h6 class="text-primary text-uppercase">// About Us //</h6>
                <h1 class="mb-4">{{$title}}</h1>
                <div class="mb-4">{!! $text !!}</div>
                <div class="row g-4 mb-3 pb-3">
                    @foreach($benefits as $benefit)
                        <div class="col-12 wow fadeIn" data-wow-delay="{{$delay}}s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">{{$benefit['num']}}</span>
                                </div>
                                <div class="ps-3">
                                    <h6>{{$benefit['title']}}</h6>
                                    <span>{{$benefit['text']}}</span>
                                </div>
                            </div>
                        </div>
                        @php $delay += 0.2 @endphp
                    @endforeach
                </div>
                <a href="{{$link}}" class="btn btn-primary py-3 px-5">Read More<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </div>
    </div>
</div>
