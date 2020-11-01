<div class="row">
    <div class="col-md-5">
        <div class="px-4 px-sm-0">
            <h3 class="text-lg font-medium text-gray-900">Profile Information</h3>
            <p class="mt-1 text-sm text-gray-600">
                Update your account's profile information and email address.
            </p>
        </div>
    </div>
    <div class="col-md-7">
        <div class="card rounded-lg shadow">
            <div class="card-body">
                <form id="frmUpdateInformation" action="{{ route('profile.update.information', auth()->id()) }}" method="POST" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="text-center">
                        <div class="mt-2">
                            <img class="block rounded-circle w--24 h--24 bg-cover bg-no-repeat bg-center" id="photoPreview" src="{{ auth()->user()->profile_photo_url }}" alt="{{ auth()->user()->name }}">
                        </div>
                        <div class="my-2">
                            <label class="btn btn-default mt-2">
                                <span>Select a New Photo</span>
                                <input type="file" name="photo" style="display: none" onchange="document.getElementById('photoPreview').src = window.URL.createObjectURL(this.files[0])">
                            </label>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') ?? auth()->user()->name }}" autocomplete="name">
                        @error('name')
                        <span class="invalid-feedback" role="alert"><strong> {{ $message }} </strong></span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') ?? auth()->user()->email }}" autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert"><strong> {{ $message }} </strong></span>
                        @enderror
                    </div>
                </form>
            </div>
            <div class="card-footer bg-white text-right">
                @if (auth()->user()->profile_photo_path)
                    <form id="frmDeleteProfilePhoto" action="{{ route('profile.delete.photo', auth()->id()) }}" method="POST" class="d-none">
                        @method('delete')
                        @csrf
                    </form>
                    <button class="btn btn-default mb-1" onclick="event.preventDefault();document.getElementById('frmDeleteProfilePhoto').submit()">Remove Photo</button>
                @endif
                <button class="btn btn-primary mb-1" onclick="event.preventDefault();document.getElementById('frmUpdateInformation').submit()">Save changes</button>
            </div>
        </div>
    </div>
</div>
