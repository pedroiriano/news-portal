@extends('admin.layouts.backend')

@section('content')
{{-- BEGIN::Page Body --}}
<div class="page-body">
    {{-- BEGIN::Page Body Title --}}
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Profile</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                <i data-feather="home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item">Users</li>
                        <li class="breadcrumb-item active">Admin Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    {{-- END::Page Body Title --}}

    {{-- BEGIN::Page Body Container --}}
    <div class="container-fluid">
        <div class="edit-profile">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Profile</h4>
                            <div class="card-header-right">
                                <ul class="list-unstyled card-option">
                                    <li><i class="fa fa-spin fa-cog"></i></li>
                                    <li><i class="view-html fa fa-code"></i></li>
                                    <li><i class="icofont icofont-maximize full-card"></i></li>
                                    <li><i class="icofont icofont-minus minimize-card"></i></li>
                                    <li><i class="icofont icofont-refresh reload-card"></i></li>
                                    <li><i class="icofont icofont-error close-card"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="profile-title">
                                    <div class="media">
                                        <img class="img-70 rounded-circle" alt="Profile Photo" src="{{ (empty($adminData->photo)) ? asset('backend/assets/images/user/7.jpg') : asset('storage/adminphoto/'.$adminData->photo) }}">
                                        <div class="media-body">
                                            <h5 class="mb-1">{{ $adminData->name }}</h5>
                                            <p>{{ $adminData->role }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ttl-info text-start mb-3">
                                <h6><i class="fa fa-id-card"></i> Name</h6><span>{{ (empty($adminData->name)) ? 'n/a' : $adminData->name }}</span>
                            </div>
                            <div class="ttl-info text-start mb-3">
                                <h6><i class="fa fa-cogs"></i> Username</h6><span>{{ (empty($adminData->username)) ? 'n/a' : $adminData->username }}</span>
                            </div>
                            <div class="ttl-info text-start mb-3">
                                <h6><i class="fa fa-envelope"></i> Email</h6><span>{{ (empty($adminData->email)) ? 'n/a' : $adminData->email }}</span>
                            </div>
                            <div class="ttl-info text-start mb-3">
                                <h6><i class="fa fa-phone"></i> Phone</h6><span>{{ (empty($adminData->phone)) ? 'n/a' : $adminData->phone }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <form class="card" id="adminProfileForm" method="POST" action="{{ empty($adminData) ? route('admin.profile.store') : route('admin.profile.update', $adminData->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h4 class="card-title mb-0">Edit Profile</h4>
                            <div class="card-header-right">
                                <ul class="list-unstyled card-option">
                                    <li><i class="fa fa-spin fa-cog"></i></li>
                                    <li><i class="view-html fa fa-code"></i></li>
                                    <li><i class="icofont icofont-maximize full-card"></i></li>
                                    <li><i class="icofont icofont-minus minimize-card"></i></li>
                                    <li><i class="icofont icofont-refresh reload-card"></i></li>
                                    <li><i class="icofont icofont-error close-card"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="userName" autofocus>Username</label>
                                        <input class="form-control" id="userName" type="text" name="username" placeholder="Username" value="{{ $adminData->username }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="emailAddress">Email address</label>
                                        <input class="form-control" id="emailAddress" type="email" name="email" placeholder="Email" value="{{ $adminData->email }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="fullName">Full Name</label>
                                        <input class="form-control" id="fullName" type="text" name="name" placeholder="Full Name" value="{{ $adminData->name }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="phoneNumber">Phone Number</label>
                                        <input class="form-control" id="phoneNumber" type="number" name="phone" placeholder="Phone Number" value="{{ $adminData->phone }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="imageUpload">Upload Photo</label>
                                        <input class="form-control" id="imageUpload" name="image" type="file">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <img class="img-70 rounded-circle" id="imageShow" alt="Profile Photo" src="{{ (empty($adminData->photo)) ? asset('backend/assets/images/user/7.jpg') : asset('storage/adminphoto/'.$adminData->photo) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-primary" type="submit" id="adminProfileSubmit">Update Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- END::Page Body Container --}}
</div>
{{-- END::Page Body --}}

<script>
    $(document).ready(function() {
        $('#imageUpload').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imageShow').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
@endsection
