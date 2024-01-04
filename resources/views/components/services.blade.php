@props(['services' => []])
<div class="container-xxl service py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase">// Our Services //</h6>
            <h1 class="mb-5">Explore Our Services</h1>
        </div>
        <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-lg-4">
                <div class="nav w-100 nav-pills me-4">
                    @foreach($services as $service)
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 @if ($loop->first) active @endif" data-bs-toggle="pill" data-bs-target="#tab-pane-{{$loop->index}}" type="button">
                            <i class="fa {{$service['faClass'] ?? ''}} fa-2x me-3"></i>
                            <h4 class="m-0">{{$service['title'] ?? ''}}</h4>
                        </button>
                    @endforeach
                </div>
            </div>

            <div class="col-lg-8">
                <div class="tab-content w-100">
                    @foreach($services as $service)
                        <div class="tab-pane fade @if ($loop->first) show active @endif" id="tab-pane-{{$loop->index}}">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="{{$service['img'] ?? ''}}"
                                             style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">{{$service['subTitle'] ?? ''}}</h3>
                                    <div class="mb-4">
                                        {!! $service['text'] ?? '' !!}
                                    </div>
                                    <a href="{{$service['link'] ?? ''}}" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
