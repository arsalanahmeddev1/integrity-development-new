@php
    $blogCount = 1;
@endphp
@extends('layouts.dashboard.master')
@section('content')
    <div class="container-fluid default-dashboard">
        <div class="row widget-grid">
            {{-- <div class="col-xxl-4 col-sm-6 box-col-6">
                <div class="card profile-box">
                    <div class="card-body">
                        <div class="d-flex media-wrapper justify-content-between">
                            <div class="flex-grow-1">
                                <div class="greeting-user">
                                    <h2 class="f-w-600">Welcome {{ Auth::user()->name ?? 'name' }}</h2>
                                    <p>Here whats happing in your account today</p>
                                    <div class="whatsnew-btn">
                                        <a class="btn btn-outline-white" href="{{ route('superadmin.profile.edit') }}" target="_blank">View
                                            {{ __('Profile') }}</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="clockbox">
                                    <svg id="clock" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 600">
                                        <g id="face">
                                            <circle class="circle" cx="300" cy="300" r="253.9"></circle>
                                            <path class="hour-marks"
                                                d="M300.5 94V61M506 300.5h32M300.5 506v33M94 300.5H60M411.3 107.8l7.9-13.8M493 190.2l13-7.4M492.1 411.4l16.5 9.5M411 492.3l8.9 15.3M189 492.3l-9.2 15.9M107.7 411L93 419.5M107.5 189.3l-17.1-9.9M188.1 108.2l-9-15.6">
                                            </path>
                                            <circle class="mid-circle" cx="300" cy="300" r="16.2"></circle>
                                        </g>
                                        <g id="hour">
                                            <path class="hour-hand" d="M300.5 298V142"></path>
                                            <circle class="sizing-box" cx="300" cy="300" r="253.9"></circle>
                                        </g>
                                        <g id="minute">
                                            <path class="minute-hand" d="M300.5 298V67"></path>
                                            <circle class="sizing-box" cx="300" cy="300" r="253.9"></circle>
                                        </g>
                                        <g id="second">
                                            <path class="second-hand" d="M300.5 350V55"></path>
                                            <circle class="sizing-box" cx="300" cy="300" r="253.9"></circle>
                                        </g>
                                    </svg>
                                </div>
                                <div class="badge f-10 p-0" id="txt"></div>
                            </div>
                        </div>
                        <div class="cartoon">
                            <img class="img-fluid" src="{{ asset('/assets/libs/images/dashboard/cartoon.svg') }}"
                                alt="vector women with leptop" />
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="col-xxl-auto col-xl-3 col-sm-6 box-col-3">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card widget-1">
                            <div class="card-body">
                                <div class="widget-content">
                                    <div class="widget-round secondary">
                                        <div class="bg-round">
                                            <svg>
                                                <use href="{{ asset('/assets/libs/svg/icon-sprite.svg#c-revenue') }}"></use>
                                            </svg><svg class="half-circle svg-fill">
                                                <use href="{{ asset('/assets/libs/svg/icon-sprite.svg#halfcircle') }}">
                                                </use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="f-light">Total Companies</span>
                                        <h4>
                                            <span class="counter"
                                                data-target="{{ $blogCount }}">{{ $blogCount }}</span>
                                        </h4>
                                    </div>
                                </div>
                                <div class="font-success f-w-500">
                                    <i class="bookmark-search me-1" data-feather="trending-up"></i><span
                                        class="txt-success">+50%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card widget-1">
                                <div class="card-body">
                                    <div class="widget-content">
                                        <div class="widget-round success">
                                            <div class="bg-round">
                                                <svg>
                                                    <use href="{{ asset('/assets/libs/svg/icon-sprite.svg#c-customer') }}">
                                                    </use>
                                                </svg><svg class="half-circle svg-fill">
                                                    <use href="{{ asset('/assets/libs/svg/icon-sprite.svg#halfcircle') }}">
                                                    </use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="f-light">Total Submittals</span>
                                            <h4>
                                                <span class="counter" data-target="845">0</span>+
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="font-danger f-w-500">
                                        <i class="bookmark-search me-1" data-feather="trending-down"></i><span
                                            class="txt-danger">-40%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-auto col-xl-3 col-sm-6 box-col-3">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card widget-1">
                            <div class="card-body">
                                <div class="widget-content">
                                    <div class="widget-round warning">
                                        <div class="bg-round">
                                            <svg>
                                                <use href="{{ asset('/assets/libs/svg/icon-sprite.svg#c-profit') }}"></use>
                                            </svg><svg class="half-circle svg-fill">
                                                <use href="{{ asset('/assets/libs/svg/icon-sprite.svg#halfcircle') }}">
                                                </use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="f-light">Total Users</span>
                                        <h4>
                                            <span class="counter" data-target="80">0</span>%
                                        </h4>
                                    </div>
                                </div>
                                <div class="font-danger f-w-500">
                                    <i class="bookmark-search me-1" data-feather="trending-down"></i><span
                                        class="txt-danger">-20%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card widget-1">
                                <div class="card-body">
                                    <div class="widget-content">
                                        <div class="widget-round primary">
                                            <div class="bg-round">
                                                <svg class="fill-primary">
                                                    <use href="{{ asset('/assets/libs/svg/icon-sprite.svg#c-invoice') }}">
                                                    </use>
                                                </svg><svg class="half-circle svg-fill">
                                                    <use href="{{ asset('/assets/libs/svg/icon-sprite.svg#halfcircle') }}">
                                                    </use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="f-light">Pending Submittals</span>
                                            <h4 class="counter" data-target="10905">0</h4>
                                        </div>
                                    </div>
                                    <div class="font-success f-w-500">
                                        <i class="bookmark-search me-1" data-feather="trending-up"></i><span
                                            class="txt-success">+50%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-auto col-xl-3 col-sm-6 box-col-3">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card widget-1">
                            <div class="card-body">
                                <div class="widget-content">
                                    <div class="widget-round warning">
                                        <div class="bg-round">
                                            <svg>
                                                <use href="{{ asset('/assets/libs/svg/icon-sprite.svg#c-profit') }}"></use>
                                            </svg><svg class="half-circle svg-fill">
                                                <use href="{{ asset('/assets/libs/svg/icon-sprite.svg#halfcircle') }}">
                                                </use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="f-light">Global Projects</span>
                                        <h4>
                                            <span class="counter" data-target="80">0</span>%
                                        </h4>
                                    </div>
                                </div>
                                <div class="font-danger f-w-500">
                                    <i class="bookmark-search me-1" data-feather="trending-down"></i><span
                                        class="txt-danger">-20%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card widget-1">
                                <div class="card-body">
                                    <div class="widget-content">
                                        <div class="widget-round primary">
                                            <div class="bg-round">
                                                <svg class="fill-primary">
                                                    <use href="{{ asset('/assets/libs/svg/icon-sprite.svg#c-invoice') }}">
                                                    </use>
                                                </svg><svg class="half-circle svg-fill">
                                                    <use href="{{ asset('/assets/libs/svg/icon-sprite.svg#halfcircle') }}">
                                                    </use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="f-light">System Alerts</span>
                                            <h4 class="counter" data-target="10905">0</h4>
                                        </div>
                                    </div>
                                    <div class="font-success f-w-500">
                                        <i class="bookmark-search me-1" data-feather="trending-up"></i><span
                                            class="txt-success">+50%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-auto col-xl-3 col-sm-6 box-col-3">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card widget-1">
                            <div class="card-body">
                                <div class="widget-content">
                                    <div class="widget-round warning">
                                        <div class="bg-round">
                                            <svg>
                                                <use href="{{ asset('/assets/libs/svg/icon-sprite.svg#c-profit') }}"></use>
                                            </svg><svg class="half-circle svg-fill">
                                                <use href="{{ asset('/assets/libs/svg/icon-sprite.svg#halfcircle') }}">
                                                </use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="f-light">Total Revenue</span>
                                        <h4>
                                            <span class="">$0</span>
                                        </h4>
                                    </div>
                                </div>
                                <div class="font-danger f-w-500">
                                    <i class="bookmark-search me-1" data-feather="trending-down"></i><span
                                        class="txt-danger">-20%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
