@extends('layouts.default')
@section('content')
<!--start breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">ADD NEW DATA - DOKTER</div>
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
            <form action="{{ route('dokter.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="mb-3">
                  <label class="form-label">NIP:</label>
                  <input type="text" name="nip" class="form-control" placeholder="nip" required>
                    @error('nip')
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
                  <label class="form-label">Spesialis:</label>
                  <input type="text" name="spesialis" class="form-control" placeholder="spesialis" required>
                    @error('spesialis')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label class="form-label">Tempat Praktek:</label>
                  <input type="text" name="tempat_praktek" class="form-control" placeholder="tempat_praktek" required>
                    @error('tempat_praktek')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                        <label class="form-label">photo:</label>
                        <input type="file" id="photo" name="photo" class="form-control">
                        @error('photo')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('#photo').change(function(){
        var input = this;
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').attr('src', e.target.result);
                $('#imagePreviewContainer').show();
            }
            reader.readAsDataURL(input.files[0]);
        }
    });
});
</script>
@endsection