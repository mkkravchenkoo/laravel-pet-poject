@extends('layouts.base')
@section('content')

    <x-main-slider/>
    <x-home-services/>
{{--    <x-services-mini :services="$services"/>--}}
{{--    <x-about-us--}}
{{--        title="CarServ Is The Best Place For Your Auto Care"--}}
{{--        text="<p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos.</p><p>Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>"--}}
{{--        link="/abc"--}}
{{--        :benefits="[--}}
{{--            ['num' => '01', 'title' => 'Professional & Expert', 'text' => 'Diam dolor diam ipsum sit amet diam et eos'],--}}
{{--            ['num' => '02', 'title' => 'Quality Servicing Center', 'text' => 'Diam dolor diam ipsum sit amet diam et eos'],--}}
{{--            ['num' => '03', 'title' => 'Awards Winning Workers', 'text' => 'Diam dolor diam ipsum sit amet diam et eos'],--}}
{{--    ]"/>--}}
    <x-fact
        :facts="[
            ['faClass' => 'fa-tools', 'count' => '1234', 'text' => 'Years Experience'],
            ['faClass' => 'fa-users-cog', 'count' => '4321', 'text' => 'Expert Technicians'],
            ['faClass' => 'fa-users', 'count' => '4433', 'text' => 'Satisfied Clients'],
            ['faClass' => 'fa-car', 'count' => '1122', 'text' => 'Compleate Projects'],
        ]"/>
    <x-team
        :employees="[
    ['name' => 'Lorem Ipsum', 'position' => 'Designer', 'avatar' => 'img/team-1.jpg', 'social_fb' => 'https://www.facebook.com/', 'social_inst' => 'https://www.instagram.com/', 'social_tw' => 'https://twitter.com/'],
    ['name' => 'Aliquyam Ipsum', 'position' => 'Developer', 'avatar' => 'img/team-2.jpg'],
    ['name' => 'Ipsum Aliquyam', 'position' => 'Manager', 'avatar' => 'img/team-3.jpg'],
    ['name' => 'Ipsum Ipsum', 'position' => 'Copywriter', 'avatar' => 'img/team-4.jpg'],
]"
    />
    <x-booking-form/>
    <x-booking-info text="{{$config['pre-booking-text'] ?? ''}}"/>

{{--    <x-reviews--}}
{{--        :reviews="[--}}
{{--    ['name' => 'James Cameron', 'position' => 'Producer', 'avatar' => 'img/testimonial-1.jpg', 'text' => 'Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.'],--}}
{{--    ['name' => 'Brad Pit', 'position' => 'Actor', 'avatar' => 'img/testimonial-2.jpg', 'text' => 'Tiam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.'],--}}
{{--    ['name' => 'Angelina Jolie', 'position' => 'Actor', 'avatar' => 'img/testimonial-3.jpg', 'text' => 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.'],--}}
{{--    ['name' => 'Lara Croft', 'position' => 'Raider', 'avatar' => 'img/testimonial-4.jpg', 'text' => 'Diam dolor diam ipsum sit diam amet diam et eos. Tempor erat elitr rebum at clita. Clita erat ipsum et lorem et sit.'],--}}

{{--]"/>--}}

@endsection

