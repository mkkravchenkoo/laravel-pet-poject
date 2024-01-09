@props(['delay' => 0.1, 'avatar' => '', 'name' => '', 'position' => '', 'social_fb' => '','social_inst' => '','social_tw' => ''])
<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="{{$delay}}s">
    <div class="team-item">
        <div class="position-relative overflow-hidden">
            <img class="img-fluid" src="{{$avatar}}" alt="">
            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                @if($social_fb)
                    <a class="btn btn-square mx-1" href="{{$social_fb}}"><i class="fab fa-facebook-f"></i></a>
                @endif
                @if($social_tw)
                    <a class="btn btn-square mx-1" href="{{$social_tw}}"><i class="fab fa-twitter"></i></a>
                @endif
                @if($social_inst)
                    <a class="btn btn-square mx-1" href="{{$social_inst}}"><i class="fab fa-instagram"></i></a>
                @endif
            </div>
        </div>
        <div class="bg-light text-center p-4">
            <h5 class="fw-bold mb-0">{{$name}}</h5>
            <small>{{$position}}</small>
        </div>
    </div>
</div>
