@extends('layout/aplikasi')

@section('konten')
<form method="post" action="/ukk_fia2024">
    @csrf
<div class="mb-3"><div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Buku Id</label>
    <input type="text" class="form-control" id="bukuId" name="bukuId" value="{{Session::get('bukuId')}}">
  </div><div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Judul</label>
    <input type="text" class="form-control" id="judul" name="judul" value="{{Session::get('judul')}}">
  </div>
    <label for="exampleFormControlInput1" class="form-label">Penulis</label>
    <input type="text" class="form-control" id="penulis" name="penulis" value="{{Session::get('penulis')}}">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Penerbit</label>
    <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{Session::get('penerbit')}}">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Tahun Terbit</label>
    <input type="text" class="form-control" id="tahunterbit" name="tahunterbit" value="{{Session::get('tahunterbit')}}">
  </div>
  <div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </div>
@endsection