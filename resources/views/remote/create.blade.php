@extends('layouts.app')

@section('content')
<div class="container-xl">
    <div class="card rounded-lg shadow-sm">
        <form action="">
            <div class="card-header">
                <h3 class="text-lg font-medium text-gray-900">New Remote Credentials</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="idNumber">Remote ID</label>
                    <input type="text" name="idNumber" id="idNumber" class="form-control @error('idNumber') is-invalid @enderror" required autocomplete="remote_id">
                    @error('idNumber')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Remote Password</label>
                    <input type="text" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="remote_password">
                    @error('password')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Remote Type</label>
                    <select class="custom-select">
                        <option selected>Open this select menu</option>
                        <option value="1">Teamviewer</option>
                        <option value="2">Anydesk</option>
                    </select>
                </div>
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
</div>
@endsection
