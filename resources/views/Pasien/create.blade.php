@extends('layouts.default')
@section('content')
<!--start breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">ADD NEW DATA - PASIEN</div>
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
            <form action="{{ route('pasien.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="mb-3">
                  <label class="form-label">No Reg:</label>
                  <input type="text" name="noreg" class="form-control" placeholder="noreg" required>
                    @error('noreg')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label class="form-label">Nama:</label>
                  <input type="text" name="nama" class="form-control" placeholder="nama" required>
                    @error('nama')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label class="form-label">JK:</label>
                  <select name="jk" class="form-select mb-3" aria-label="Default select example" required>
                        <option value="">--pilih jk--</option>
                        <option value="L">L</option>
                        <option value="P">P</option>
                    </select>
                    @error('jk')       
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label class="form-label">Tanggal Lahir:</label>
                  <input type="text" name="tgl_lahir" class="form-control" placeholder="tgl_lahir" required>
                    @error('tgl_lahir')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary ml-3">Submit</button>
                    <a href="../../pasien" class="btn btn-primary ml-3">Cancel</a>
                </div>
                
              </form>
            </div>
        </div>
@endsection