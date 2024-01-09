@props(['employees' => []])
@php $delay = 0.1 @endphp
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase">// Our Technicians //</h6>
            <h1 class="mb-5">Our Expert Technicians</h1>
        </div>
        <div class="row g-4">
            @foreach($employees as $employee)
                <x-employee
                    delay="{{$delay}}"
                    avatar="{{$employee['avatar']}}"
                    name="{{$employee['name']}}"
                    position="{{$employee['position']}}"
                    social_fb="{{$employee['social_fb'] ?? ''}}"
                    social_inst="{{$employee['social_inst'] ?? ''}}"
                    social_tw="{{$employee['social_tw'] ?? ''}}"
                />
                @php $delay += 0.2 @endphp
            @endforeach
        </div>
    </div>
</div>
