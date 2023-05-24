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
                                        <img class="img-70 rounded-circle" alt="" src="{{ (empty($adminData->photo)) ? asset('backend/assets/images/user/7.jpg') : asset('backend/assets/images/user/admin/'.$adminData->photo) }}">
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
                    <form class="card">
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
                                        <input class="form-control" id="userName" type="text" name="username" placeholder="Username">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="emailAddress">Email address</label>
                                        <input class="form-control" id="emailAddress" type="email" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="fullName">Full Name</label>
                                        <input class="form-control" id="fullName" type="text" name="name" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="phoneNumber">Phone Number</label>
                                        <input class="form-control" id="phoneNumber" type="number" name="phone" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="userRole">Role</label>
                                        <select class="form-control btn-square" id="userRole" name="role">
                                            <option value="0">--Select--</option>
                                            <option value="1">Admin</option>
                                            <option value="2">User</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="singleFileUpload">Upload Photo</label>
                                        <div class="dropzone" id="singleFileUpload" action="/file-upload">
                                            <div class="dz-message needsclick">
                                                <i class="icon-cloud-up"></i>
                                                <h6>Drop files here or click to upload.</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="newPassword">New Password</label>
                                        <input class="form-control" id="newPassword" type="password" name="newpassword" placeholder="New Password">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="confirmPassword">Confirm Password</label>
                                        <input class="form-control" id="confirmPassword" type="password" name="confirmpassword" placeholder="Confirm Password">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-primary" type="submit">Update Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- END::Page Body Container --}}
    <form action="/file-upload" class="dropzone" id="my-awesome-dropzone">
        <input type="file" name="file" />
    </form>
    <!-- Container-fluid starts-->
    {{-- <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Single File Upload</h5>
                    </div>
                    <div class="card-body">
                        <form class="dropzone" id="singleFileUpload" action="/upload.php">
                            <div class="dz-message needsclick"><i class="icon-cloud-up"></i>
                            <h6>Drop files here or click to upload.</h6><span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Multi File Upload</h5>
                    </div>
                    <div class="card-body">
                        <form class="dropzone dropzone-primary" id="multiFileUpload" action="/upload.php">
                            <div class="dz-message needsclick"><i class="icon-cloud-up"></i>
                            <h6>Drop files here or click to upload.</h6><span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>File Type Validation</h5>
                    </div>
                    <div class="card-body">
                        <form class="dropzone dropzone-info" id="fileTypeValidation" action="/upload.php">
                            <div class="dz-message needsclick"><i class="icon-cloud-up"></i>
                            <h6>Drop files here or click to upload.</h6><span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Container-fluid Ends-->
</div>
{{-- END::Page Body --}}
@endsection
