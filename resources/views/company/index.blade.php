@extends('layouts.app')

@section('content')
<div class="container-xl">
    @if (session('success'))
        <div class="callout callout-success shadow">
            <p class="text-md font-medium text-gray-900">{{ session('success') }}</p>
        </div>
    @endif

    <div class="d-flex mb-2 justify-content-end">
        <a href="{{ route('company.create') }}" class="btn btn-default"><i class="far fa-plus-square"></i> New Company</a>
    </div>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2">
        @foreach ($companies as $company)
            <div class="col mb-2 d-md-flex align-items-md-stretch">
                <div class="card bg-white rounded-lg shadow-lg w-100">
                    <div class="card-body">
                        <div class="d-sm-flex">
                            <div class="d-flex justify-content-center align-items-center mb-4 mb-sm-0">
                                <img src="{{ $company->image_photo_url }}" alt="" class="rounded-circle h--32 w--32">
                            </div>
                            <div class="ml-0 ml-sm-4">
                                <h2 class="text-lg font-medium text-gray-900">{{ $company->name }}</h2>
                                <p class="text-muted text-sm mb-1"><span class="font-bold">Email: </span> {{ $company->email }} </p>
                                <p class="text-muted text-sm mb-1"><span class="font-bold">Description: </span> {{ $company->description }} </p>
                                <p class="text-muted text-sm mb-1"><span class="font-bold">Address: </span> {{ $company->address }} </p>
                                <p class="text-muted text-sm mb-1"><span class="font-bold">Contact Person: </span> {{ $company->contact_person }} </p>
                                <p class="text-muted text-sm mb-1"><span class="font-bold">Contact Number: </span> {{ $company->contact_number }} </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <a href="{{ route('company.show', $company->id) }}" class="btn btn-sm btn-default"><i class="fas fa-eye"></i> View</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{ $companies->links() }}
</div>
@endsection
