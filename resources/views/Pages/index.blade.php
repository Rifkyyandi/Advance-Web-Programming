@extends('layouts.default')
@section('content')
<!-- PROFILE TAB CONTENT -->
<div class="tab-pane profile active" id="profile-tab">
    <div class="row">
        <div class="col-md-3">
            <div class="user-info-left text-center">
                <img src="../../../assets/images/Profile.jpg" alt="Profile Picture" class="img-thumbnail rounded-circle mb-3" />
                <h2>{{$name}} 
                    <i class="fa fa-check-circle text-primary verified-icon"></i>
                    <!-- <sup class="sr-only">Online</sup> -->
            </div>
        </div>
        <div class="col-md-9">
            <div class="user-info-right">
                <div class="basic-info p-3 border rounded">
                    <h3 class="text-primary text-uppercase "><i class="fa fa-info-circle"></i> Basic Information | Profile</h3>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label text-uppercase">Nama :</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama" value="{{ $name }}" class="form-control" placeholder="nama" readonly>
                            @error('nama')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label text-uppercase">Email :</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" value="{{ $email }}" class="form-control" placeholder="email" readonly>
                            @error('email')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="additional-info mt-4 p-3 border rounded">
                    <h3 class="text-primary text-uppercase"><i class="fa fa-address-book"></i> Additional Information | Profile</h3>
                    <!-- Add more information fields here -->
                </div>

                <button class="btn btn-primary mt-4 p-3">Edit Profile</button>

            </div>
        </div>
    </div>
</div>
<!-- END PROFILE TAB CONTENT -->
@endsection
