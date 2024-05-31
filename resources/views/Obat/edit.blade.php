@extends('layouts.default')
@section('content')
<!--start breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">EDIT DATA - OBAT</div>
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
            <form action="{{ route('obat.update',$obat->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                <div class="mb-3">
                  <label class="form-label">Kode Obat:</label>
                  <input type="text" name="kode_obat" value="{{ $obat->kode_obat }}" class="form-control" placeholder="kode_obat">
                    @error('kode_obat')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label class="form-label">Nama Obat:</label>
                  <input type="text" name="nama_obat" value="{{ $obat->nama_obat }}" class="form-control" placeholder="nama_obat">
                    @error('nama_obat')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label class="form-label">Bentuk:</label>
                  <select name="bentuk" class="form-select mb-3" aria-label="Default select example">
                  <option value="{{ $obat->bentuk }}" selected>{{$obat->bentuk}}</option>
                                <option value="kapsul">kapsul</option>
                                <option value="tablet">tablet</option>
                                <option value="kaplet">kaplet</option>
                                <option value="sirup">sirup</option>
                                <option value="salep">salep</option>
                                <option value="powder">powder</option>
                            </select>@error('bentuk')             
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label class="form-label">Berat:</label>
                  <input type="text" name="berat" value="{{ $obat->berat }}" class="form-control" placeholder="berat">
                    @error('berat')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label class="form-label">Kemasan:</label>
                  <select name="kemasan" class="form-select mb-3" aria-label="Default select example">
                  <option value="{{ $obat->kemasan }}" selected>{{$obat->kemasan}}</option>
                                <option value="strip">strip</option>
                                <option value="flask">flask</option>
                                <option value="tube">tube</option>
                                <option value="box">box</option>
                            </select>@error('kemasan')              
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary ml-3">Submit</button>
                    <a href="../../obat" class="btn btn-primary ml-3">Cancel</a>
                </div>
                
              </form>
            </div>
        </div>
@endsection