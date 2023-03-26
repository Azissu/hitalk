@extends('home')
@section('content')
<div class="row">
    <div class="col-md-6">
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form method="POST" action="{{ route('register.action') }}">
            @csrf
            <div class="mb-3">
                <label >Nama <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="username" value="{{ old('username') }}">
            </div>
            <div class="mb-3">
                <label >Email <span class="text-danger">*</span></label>
                <input class="form-control" type="email" name="email">
            </div>
            <div class="mb-3">
                <label >Fakultas <span class="text-danger">*</span></label>
                <select class="form-control" id="fakultas" name="fakultas" value="{{ old('fakultas') }}">
                    <option>Pilih Fakultas Anda</option>
                    <option>FIK</option>
                    <option>FEB</option>
                    <option>FIB</option>
                    <option>FT</option>
                    <option>FKES</option>
                </select>
            </div>
            <div class="mb-3">
                <label >Prodi <span class="text-danger">*</span></label>
                
                <!-- <input class="form-control" type="text" name="prodi" value="{{ old('prodi') }}"> -->
                <select class="form-control" id="prodi" name="prodi" value="{{ old('prodi') }}">
                </select>
            </div>
            <div class="mb-3">
                <label >NIM <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nim" >
            </div>
            <div class="mb-3">
                <label >Mobile Number <span class="text-danger">*</span></label>
                <input class="form-control" type="number" name="nomor" value="{{ old('nomor') }}">
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>
</div>
@endsection
@section('js')
<script>
    $(document).ready(function() {
        let prodi = {
            FIK: [
                {value: "Teknik Informatika", text: "Teknik Informatika"},
                {value: "Sistem Informasi", text: "Sistem Informasi"},
                {value: "Ilmu Komunikasi", text: "Ilmu Komunikasi"},
                {value: "Desain Komunikasi Visual", text: "Desain Komunikasi Visual"},
                {value: "Animasi", text: "Animasi"},
                {value: "Film dan Televisi", text: "Film dan Televisi"},
            ],
            FEB: [
                {value: "Manajemen", text: "Manajemen"},
                {value: "Akuntansi", text: "Akuntansi"},
            ],
            FIB: [
                {value: "Bahasa Inggris", text: "Bahasa Inggris"},
                {value: "Sastra Jepang", text: "Sastra Jepang"},
                {value: "Manajemen Perhotelan", text: "Manajemen Perhotelan"},
            ],
            FT: [
                {value: "Teknik Elektro", text: "Teknik Elektro"},
                {value: "Teknik Industri", text: "Teknik Industri"},
                {value: "Teknik Biomedis", text: "Teknik Biomedis"},
            ],
            FKES: [
                {value: "Kesehatan Masyarakat", text: "Kesehatan Masyarakat"},
                {value: "Rekam Medik dan Informasi Kesehatan", text: "Rekam Medik dan Informasi Kesehatan"},
                {value: "Kesehatan Lingkungan", text: "Kesehatan Lingkungan"},
            ],
        };

        $('#fakultas').on('change', function() {
            let val = $(this).val();
            let prodis = prodi[val];
            $('#prodi')
            .find('option')
            .remove();

            for (const item of prodis) {
                $('#prodi').append($('<option>', item));
            }
        });
    });
</script>
@endsection