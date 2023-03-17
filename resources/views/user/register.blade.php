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
                <select class="form-control" id="exampleFormControlSelect1" name="fakultas" value="{{ old('fakultas') }}">
                    <option>FIK</option>
                    <option>FEB</option>
                    <option>FIB</option>
                    <option>FT</option>
                    <option>FKES</option>
                </select>
            </div>
            <div class="mb-3">
                <label >Prodi <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="prodi" value="{{ old('prodi') }}">
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