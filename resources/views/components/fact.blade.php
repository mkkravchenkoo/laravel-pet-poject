@props(['facts' => []])
@php $delay = 0.1 @endphp
<div class="container-fluid fact bg-dark my-5 py-5">
    <div class="container">
        <div class="row g-4">
            @foreach($facts as $fact)
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="{{$delay}}s">
                    <i class="fa {{$fact['faClass']}} fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">{{$fact['count']}}</h2>
                    <p class="text-white mb-0">{{$fact['text']}}</p>
                </div>
                @php $delay += 0.2 @endphp
            @endforeach
        </div>
    </div>
</div>
