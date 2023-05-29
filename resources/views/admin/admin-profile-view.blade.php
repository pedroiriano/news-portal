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
                    <form class="card" id="adminProfileForm" method="POST" action="{{ empty($adminData) ? route('admin.profile') : route('admin.profile', $adminData->id) }}" enctype="multipart/form-data">
                        @csrf
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
                                            <input type="hidden" name="images" value="images" id="images">
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
    $.fn.serializeObject = function()
        {
            var o = {};
            var a = this.serializeArray();
            $.each(a, function() {
                if (o[this.name]) {
                    if (!o[this.name].push) {
                        o[this.name] = [o[this.name]];
                    }
                    o[this.name].push(this.value || '');
                } else {
                    o[this.name] = this.value || '';
                }
            });
            return o;
        };
</script>
<script>
    var $form = $('#adminProfileForm');
    $method = $form.attr('method');
    $url = $form.attr('action');
    
    // Disable AutoDiscover
    Dropzone.autoDiscover = false;
    
    // Set Dropzone Options
    Dropzone.options.myAwesomeDropzone = {
        autoProcessQueue: false,
        uploadMultiple: false,
        parallelUploads: 1,
        maxFiles: 1,
        addRemoveLinks: true,
        acceptedFiles: ".jpg, .jpeg, .png",
        maxFilesize: 5, // 5MB
        dictDefaultMessage: "Drop files here or click to upload.",
    };
    
    // Initialize Dropzone
    var myDropzone = new Dropzone("#singleFileUpload", {url: $url, method: $method});

    // Initialize Submit Button
    var submitButton = document.querySelector("#adminProfileSubmit");

    // Submit Button Event on click
    submitButton.addEventListener("click", function(e) {
        e.preventDefault();
        myDropzone.processQueue();
    });
    
    // on sending via dropzone append token and form values (using serializeObject jquery Plugin)
    myDropzone.on("sendingsingle", function(file, xhr, formData) {
        var formValues = $('#adminProfileForm').serializeObject();
        $.each(formValues, function(key, value){
            formData.append(key, value);
        });
    });

    // on success redirect
    myDropzone.on("successsingle", function() {
        // redirect to products page after success.
        window.location="{{ URL::to('/admin/profile') }}";
    });

    // on error show errors
    myDropzone.on("errorsingle", function(file, errorMessage, xhr) {
        var arr = [];
        $.each(errorMessage, function(key, value) {
            console.log(value);
            arr += value + "\n";
        });
        // show error message
        console.log(arr);
    });
</script>
@endsection
