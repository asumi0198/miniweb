@extends('layouts.app')

@section('content')
<div class="container-xl">
    <div class="row d-flex align-items-stretch">
        @foreach ($companies as $company)
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                <div class="card bg-white rounded-lg shadow-sm">
{{--                    <div class="card-header text-muted border-bottom-0">--}}
{{--                        {{ $company->name }}--}}
{{--                    </div>--}}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-7">
                                <h2 class="text-lg font-medium text-gray-900">{{ $company->name }}</h2>
                                <p class="text-muted text-sm"><span class="font-bold">Email: </span> {{ $company->email }} </p>
                                <p class="text-muted text-sm"><span class="font-bold">About: </span> {{ $company->about }} </p>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                    <li class="small"><span class="fa-li"><i class="fas fa-building"></i></span> Address: {{ $company->address }}</li>
                                    <li class="small"><span class="fa-li"><i class="fas fa-user-circle"></i></span> Contact Person: {{ $company->contact_person }}</li>
                                    <li class="small"><span class="fa-li"><i class="fas fa-phone"></i></span> Contact Number: {{ $company->contact_number }}</li>
                                </ul>
                            </div>
                            <div class="col-5 text-center">
                                <img src="{{ $company->image_photo_url }}" alt="" class="img-circle img-fluid h--24 w--24 bg-cover bg-no-repeat bg-center object-cover">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <a href="{{ route('company.show', $company->id) }}" class="btn btn-sm btn-default">View</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{ $companies->links() }}
</div>
@endsection
