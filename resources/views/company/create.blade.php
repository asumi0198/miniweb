@extends('layouts.app')

@section('content')
<div class="container-xl">
    <div class="card bg-white rounded-lg shadow-lg">
        <form action="{{ route('company.store') }}" method="post">
            <div class="card-header">
                <h3 class="font-xl font-medium text-gray-900">Create new company</h3>
            </div>
            <div class="card-body">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" autocomplete="company_name">
                    @error('name')
                    <span class="invalid-feedback" role="alert"><strong> {{ $message }} </strong></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" autocomplete="company_email">
                    @error('email')
                    <span class="invalid-feedback" role="alert"><strong> {{ $message }} </strong></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Short description</label>
                    <textarea rows="3" cols="4" name="description" id="description" class="form-control @error('description') is-invalid @enderror" autocomplete="company_description">{{ old('description') }}</textarea>
                    @error('description')
                    <span class="invalid-feedback" role="alert"><strong> {{ $message }} </strong></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}" autocomplete="address">
                    @error('address')
                    <span class="invalid-feedback" role="alert"><strong> {{ $message }} </strong></span>
                    @enderror
                </div>
                <p class="text-lg text-left font-medium text-gray-900 mb-1">Contact Person:</p>
                <div class="form-group">
                    <label for="contact_person">Name</label>
                    <input type="text" name="contact_person" id="contact_person" class="form-control @error('contact_person') is-invalid @enderror" value="{{ old('contact_person') }}" autocomplete="name">
                    @error('contact_person')
                    <span class="invalid-feedback" role="alert"><strong> {{ $message }} </strong></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="contact_number">Phone Number</label>
                    <input type="text" name="contact_number" id="contact_number" class="form-control @error('contact_number') is-invalid @enderror" value="{{ old('contact_number') }}" autocomplete="phone_number">
                    @error('contact_number')
                    <span class="invalid-feedback" role="alert"><strong> {{ $message }} </strong></span>
                    @enderror
                </div>
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary">Save Company</button>
            </div>
        </form>
    </div>
</div>
@endsection
