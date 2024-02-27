@props(['text' => ''])
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-8 col-md-6">
                <h6 class="text-primary text-uppercase">// Call To Action //</h6>
                <h1 class="mb-4">Have Any Pre Booking Question?</h1>
                <p class="mb-0">{{$text}}</p>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-primary d-flex flex-column justify-content-center text-center h-100 p-4">
                    <h3 class="text-white mb-4"><i class="fa fa-phone-alt me-3"></i>{{$globalConfig['phone'] ?? ''}}</h3>
                    <a href="mailto:{{$globalConfig['email'] ?? ''}}&body=hello?subject=question" class="btn btn-secondary py-3 px-5">Contact Us<i class="fa fa-arrow-right ms-3"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
