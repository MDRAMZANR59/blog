@extends('backend.app')
@section('Content')
<div class="dashboard">
    <div class="top">
        <i class="uil uil-bars sidebar-toggle"></i>

        <div class="search-box">
            <i class="uil uil-search"></i>
            <input type="text" placeholder="Search here..." class="search-input">
        </div>

        <img src="{{asset('backend/images/profile.jpg')}}" alt="User Profile" class="user-profile">
    </div>

    <div class="dash-content">
        <div class="activity">
            <div class="title">
                <i class="uil uil-clock-three"></i>
                <span class="text">All Blog</span>
            </div>
            <div class="activity-data">

            </div>
        </div>
    </div>
</div>

@endsection
