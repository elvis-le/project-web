@extends('layouts.profile_navigation')
@section('profile-form')
    <div class="profile-form">
    <div class="profile-header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Profile
        </h2>
    </div>
    <div class="user-information">

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    @include('profile.partials.update-profile-information-form')
            </div>
    </div>
    </div>
@endsection

