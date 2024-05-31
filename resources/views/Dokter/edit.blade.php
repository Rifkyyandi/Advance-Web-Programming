@extends('layouts.default')
@section('content')
<!--start breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">EDIT DATA - DOKTER</div>
        <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0 align-items-center">
            
            <li class="breadcrumb-item active" aria-current="page">SUBMAIN PAGE</li>
            </ol>
        </nav>
        </div>
        
    </div>
    <!--end breadcrumb-->


        <div class="card">
            
            <div class="card-body">
            @if(session('status'))
                <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('dokter.update',$dokter->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                <div class="mb-3">
                  <label class="form-label">NIP:</label>
                  <input type="text" name="nip" value="{{ $dokter->nip }}" class="form-control" placeholder="nip">
                    @error('nip')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label class="form-label">Nama:</label>
                  <input type="text" name="nama" value="{{ $dokter->nama }}" class="form-control" placeholder="nama">
                    @error('nama')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label class="form-label">JK:</label>
                  <select name="jk" class="form-select mb-3" aria-label="Default select example">
                        <option value="{{ $dokter->jk }}">{{ $dokter->jk }}</option>
                        <option value="L">L</option>
                        <option value="P">P</option>
                    </select>
                    @error('jk')       
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label class="form-label">Spesialis:</label>
                  <input type="text" name="spesialis" value="{{ $dokter->spesialis }}" class="form-control" placeholder="spesialis">
                    @error('spesialis')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label class="form-label">Tempat Praktek:</label>
                  <input type="text" name="tempat_praktek" value="{{ $dokter->tempat_praktek }}" class="form-control" placeholder="tempat_praktek">
                    @error('tempat_praktek')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group row">
                <div class="mb-3">
                  <label for="photo" class="col-md-4 col-form-label text-md-right">Photo</label>
                  <div class="col-md-6">
                    <input id="photo" type="file" class="form-control-file" name="photo" value="{{ $dokter->photo }}"> 
                    @if($dokter->photo) 
                        <img src="{{ asset('images/'.$dokter->photo) }}" 
                        alt="Current Photo" style="max-width: 100px; margin-top: 10px;"> 
                    @else 
                        <span>No photo available</span> 
                    @endif
                  </div>
                </div>
                <div id="imagePreviewContainer" style="display:none;">
                  <img id="imagePreview" src="#" alt="Image Preview" style="max-width: 200px;">
                </div>
                
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary ml-3">Submit</button>
                    <a href="../../dokter" class="btn btn-primary ml-3">Cancel</a>
                </div>
                
              </form>
            </div>
        </div>
@endsection