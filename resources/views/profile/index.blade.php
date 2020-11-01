@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            @if (session('success'))
                <div class="callout callout-success shadow-sm">
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            @include('profile.updateProfile')
            <div class="py-4">
                <div class="border-top"></div>
            </div>
            @include('profile.updatePassword')
        </div>
    </div>
</div>
@endsection
