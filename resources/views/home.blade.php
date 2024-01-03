@extends('layouts.base')
@section('content')
    @php($slides = [
        [
        'imgBg' => 'img/carousel-bg-1.jpg',
        'imgSrc' => 'img/carousel-1.png',
        'text1' => '// Car Servicing //',
        'text2' => 'Qualified Car Repair Service Center',
        'link' => 'abc'
        ],
        [
        'imgBg' => 'img/carousel-bg-2.jpg',
        'imgSrc' => 'img/carousel-2.png',
        'text1' => '// Car Servicing 2 //',
        'text2' => 'Qualified Car Repair Service Center 2',
        'link' => 'abc2'
        ],
])

    @php($services = [
        [
        'faClass' => 'fa-certificate',
        'title' => 'Quality Servicing',
        'text' => '<p>Diam dolor diam ipsum sit amet diam et eos erat ipsum</p>',
        'link' => '/abc'
        ],
        [
        'faClass' => 'fa-users-cog',
        'title' => 'Expert Workers',
        'text' => '<p>Diam dolor diam ipsum sit amet diam et eos erat ipsum</p><p>Diam dolor diam ipsum sit amet diam et eos erat ipsum</p>',
        'link' => '/abcd'
        ],
        [
        'faClass' => 'fa-tools',
        'title' => 'Modern Equipment',
        'text' => '<p>Diam dolor diam ipsum sit amet diam et eos erat ipsum</p>',
        'link' => '/abcde'
        ]

])
    <x-home-slider :slides="$slides"/>
    <x-services :services="$services"/>
@endsection

