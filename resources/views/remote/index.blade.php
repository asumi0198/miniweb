@extends('layouts.app')

@section('content')
<div class="container-xl">
    <div class="row d-flex align-items-stretch">
        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
            <div class="card bg-white rounded-lg shadow-sm">
                <div class="card-header text-muted border-bottom-0">
                    Digital Strategist
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-7">
                            <h2 class="text-lg font-medium text-gray-900">Nicole Pearson</h2>
                            <p class="text-muted text-sm"><span class="font-bold">About: </span> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                            </ul>
                        </div>
                        <div class="col-5 text-center">
                            <img src="{{ \Illuminate\Support\Facades\Auth::user()->profile_photo_url }}" alt="" class="img-circle img-fluid h--24 w--24 bg-cover bg-no-repeat bg-center object-cover">
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="#" class="btn btn-sm btn-default">
                        <i class="fas fa-user"></i> View Profile
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
