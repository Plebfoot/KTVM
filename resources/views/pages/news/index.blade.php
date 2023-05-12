@extends('layouts.app')

@section('content')
    <div class="projects-horizontal">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Ons laatste nieuws</h2>
                <p class="text-center">De laatste nieuwtjes, optredens en ander vermakelijk nieuws kan u hier lezen. </p>
            </div>
            @foreach ($news as $item)
                <div class="row projects">
                    <div class="col-sm-6 item">
                        <div class="row">
                            <div class="col-md-12 col-lg-5"><a href="{{ route('news.show', $item->slug) }}"><img
                                        src="{{ asset('storage/news/' . $item->image) }}" alt="{{ $item->title }}"></a>
                            </div>
                            <div class="col"><a href="{{ route('news.show', $item->slug) }}">
                                <h3 class="name">{{ $item->title }}</h3>
                            </a>
                                <p class="description">{{ Str::limit($item->description, 100) }}</p>
                                <br>
                                <a href="{{ route('news.show', $item->slug) }}">{{ $item->title }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <style>
        .projects-horizontal {
            color: #313437;
            background-color: #fff;
        }

        .col-md-12.col-lg-5 img {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }


        .projects-horizontal p {
            color: #7d8285;
        }

        .projects-horizontal h2 {
            font-weight: bold;
            margin-bottom: 40px;
            padding-top: 40px;
            color: inherit;
        }

        @media (max-width:767px) {
            .projects-horizontal h2 {
                margin-bottom: 25px;
                padding-top: 25px;
                font-size: 24px;
            }
        }

        .projects-horizontal .intro {
            font-size: 16px;
            max-width: 500px;
            margin: 0 auto 10px;
        }

        .projects-horizontal .projects {
            padding-bottom: 40px;
        }

        .projects-horizontal .item {
            padding-top: 60px;
            min-height: 160px;
        }

        @media (max-width:767px) {
            .projects-horizontal .item {
                padding-top: 40px;
                min-height: 160px;
            }
        }

        .projects-horizontal .item .name {
            font-size: 18px;
            font-weight: bold;
            margin-top: 10px;
            margin-bottom: 15px;
            color: inherit;
        }

        @media (max-width:991px) {
            .projects-horizontal .item .name {
                margin-top: 22px;
            }
        }

        .projects-horizontal .item .description {
            font-size: 15px;
            margin-bottom: 0;
        }
    </style>

    <h1>Nieuws</h1>
    <ul>
        @foreach ($news as $item)
            <li>
                <h2>{{ $item->title }}</h2>
                <p>{!! nl2br(e($item->description)) !!}</p>
                <img src="{{ asset('storage/news/' . $item->image) }}" alt="{{ $item->title }}">
            </li>
        @endforeach
    </ul>
@endsection
