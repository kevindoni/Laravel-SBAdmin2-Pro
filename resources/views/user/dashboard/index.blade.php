@extends('user.layouts.app')

@section('title', 'User Dashboard')

@section('content')
@php
    $tzNow = \Illuminate\Support\Carbon::now(config('app.timezone'));
@endphp
<div class="container-xl px-4 mt-5">
    <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
        <div class="me-4 mb-3 mb-sm-0">
            <h1 class="mb-0">User Dashboard</h1>
            <div class="small">
                <span class="fw-500 text-primary">{{ $tzNow->format('l') }}</span>
                &middot; {{ $tzNow->format('F j, Y') }} &middot; {{ $tzNow->format('g:i A') }}
            </div>
        </div>
        <div class="input-group input-group-joined border-0 shadow" style="width: 16.5rem">
            <span class="input-group-text"><i data-feather="calendar"></i></span>
            <input class="form-control ps-0 pointer" id="litepickerRangePlugin" placeholder="Select date range..." />
        </div>
    </div>

    <div class="card mb-4 mt-5">
        <div class="card-body p-5">
            <div class="row align-items-center justify-content-between">
                <div class="col">
                    <h2 class="text-primary">Welcome, {{ auth()->user()->name }}!</h2>
                    <p class="text-gray-700">This is your user dashboard where you can view activity and manage your profile.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card mb-4">
                <div class="card-header">Recent Activity</div>
                <div class="card-body">No recent activity to show.</div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="card mb-4">
                <div class="card-header">Profile</div>
                <div class="card-body">
                    <p>Name: {{ auth()->user()->name }}</p>
                    <p>Email: {{ auth()->user()->email }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
