<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h2 class="m-0 text-light mb-3"><i class="fa fa-car me-3"></i>CarServ</h2>
                <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href="{{$globalConfig['fb-link'] ?? ''}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Address</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{$globalConfig['address'] ?? ''}}</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{$globalConfig['phone'] ?? ''}}</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{$globalConfig['email'] ?? ''}}</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Opening Hours</h4>
                <p class="mb-4">{{$globalConfig['working-time'] ?? ''}}</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Services</h4>
                @foreach($servicesMenu as $service)
                    <a class="btn btn-link" href="{{route('service.show', $service->slug)}}">{{$service->title}}</a>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
