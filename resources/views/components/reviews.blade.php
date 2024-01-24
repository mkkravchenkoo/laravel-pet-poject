@props(['reviews' => []])
@php $delay = 0.1 @endphp

<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="{{$delay}}s">
    <div class="container">
        <div class="text-center">
            <h6 class="text-primary text-uppercase">// Testimonial //</h6>
            <h1 class="mb-5">Our Clients Say!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel position-relative">
            @foreach($reviews as $review)
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="{{$review['avatar'] ?? ''}}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">{{$review['name'] ?? ''}}</h5>
                    <p>{{$review['position'] ?? ''}}</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">{{$review['text'] ?? ''}}</p>
                    </div>
                </div>
                @php $delay += 0.2 @endphp
            @endforeach
        </div>
    </div>
</div>
<!-- Testimonial End -->
