@extends('admin.layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
@php
    $tzNow = \Illuminate\Support\Carbon::now(config('app.timezone'));
@endphp
<div class="container-xl px-4 mt-5">
    <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
        <div class="me-4 mb-3 mb-sm-0">
            <h1 class="mb-0">Admin Dashboard</h1>
            <div class="small">
                <span id="current-local-time">{{ $tzNow->format('l') }} &middot; {{ $tzNow->format('F j, Y') }} &middot; {{ $tzNow->format('g:i A') }}</span>
            </div>
        </div>
        <div class="input-group input-group-joined border-0 shadow" style="width: 16.5rem">
            <span class="input-group-text"><i data-feather="calendar"></i></span>
            <input class="form-control ps-0 pointer" id="litepickerRangePlugin" placeholder="Select date range..." />
        </div>
    </div>

    <div class="card card-waves mb-4 mt-5">
        <div class="card-body p-5">
            <div class="row align-items-center justify-content-between">
                <div class="col">
                    <h2 class="text-primary">Welcome back, your dashboard is ready!</h2>
                    <p class="text-gray-700">Manage users, view reports, and configure the system from here.</p>
                    <a class="btn btn-primary p-3" href="#">
                        Get Started
                        <i class="ms-1" data-feather="arrow-right"></i>
                    </a>
                </div>
                <div class="col d-none d-lg-block mt-xxl-n4"><img class="img-fluid px-xl-4 mt-xxl-n5" src="{{ asset('template/assets/img/illustrations/statistics.svg') }}" alt="Statistics illustration" /></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-start-lg border-start-primary h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <div class="small fw-bold text-primary mb-1">Earnings (monthly)</div>
                            <div class="h5">$4,390</div>
                            <div class="text-xs fw-bold text-success d-inline-flex align-items-center">
                                <i class="me-1" data-feather="trending-up"></i>
                                12%
                            </div>
                        </div>
                        <div class="ms-2"><i class="fas fa-dollar-sign fa-2x text-gray-200"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-start-lg border-start-secondary h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <div class="small fw-bold text-secondary mb-1">Average sale price</div>
                            <div class="h5">$27.00</div>
                            <div class="text-xs fw-bold text-danger d-inline-flex align-items-center">
                                <i class="me-1" data-feather="trending-down"></i>
                                3%
                            </div>
                        </div>
                        <div class="ms-2"><i class="fas fa-tag fa-2x text-gray-200"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-start-lg border-start-success h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <div class="small fw-bold text-success mb-1">Clicks</div>
                            <div class="h5">11,291</div>
                            <div class="text-xs fw-bold text-success d-inline-flex align-items-center">
                                <i class="me-1" data-feather="trending-up"></i>
                                12%
                            </div>
                        </div>
                        <div class="ms-2"><i class="fas fa-mouse-pointer fa-2x text-gray-200"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-start-lg border-start-info h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <div class="small fw-bold text-info mb-1">Conversion rate</div>
                            <div class="h5">1.23%</div>
                            <div class="text-xs fw-bold text-danger d-inline-flex align-items-center">
                                <i class="me-1" data-feather="trending-down"></i>
                                1%
                            </div>
                        </div>
                        <div class="ms-2"><i class="fas fa-percentage fa-2x text-gray-200"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts section (placeholders) -->
    <div class="row">
        <div class="col-lg-8 mb-4">
            <div class="card mb-4">
                <div class="card-header">Revenue Summary</div>
                <div class="card-body">
                    <div class="chart-area"><canvas id="myAreaChart" width="100%" height="30"></canvas></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card mb-4">
                <div class="card-header">Affiliate Reports</div>
                <div class="list-group list-group-flush small">
                    <a class="list-group-item list-group-item-action" href="#">Earnings Reports</a>
                    <a class="list-group-item list-group-item-action" href="#">Average Sale Price</a>
                    <a class="list-group-item list-group-item-action" href="#">Engagement (Clicks &amp; Impressions)</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
