@extends('layout/aplikasi')

@section('konten')
<a href="/ukk_fia2024" class="btn btn-secondary"><< Kembali</a>
<form method="POST" action="{{'/ukk_fia2024/.$data->bukuId'}}">
    @csrf
  @method('PUT')
  <div class="mb-3">
    <h1>Buku Id {{$data->bukuId}}</h1>
  </div>
  <div class="mb-3">
    <label for="judul" class="form-label">Judul</label>
    <input type="judul" class="form-control" id="judul" name="judul" value="{{$data->judul}}">
  </div>
  <div>
    <label for="penulis" class="form-label">Penulis</label>
    <input type="penulis" class="form-control" id="penulis" name="penulis" value="{{$data->penulis}}">
  </div>
  <div class="mb-3">
    <label for="penerbit" class="form-label">Penerbit</label>
    <input type="penerbit" class="form-control" id="penerbit" name="penerbit" value="{{$data->penerbit}}">
  </div>
  <div class="mb-3">
    <label for="tahunterbit" class="form-label">Tahun Terbit</label> 
    <input type="tahunterbit" class="form-control" id="tahunterbit" name="tahunterbit" value="{{$data->tahunterbit}}">
  </div>
  <div>
    <button type="submit" class="btn btn-primary">UPDATE</button>
  </div>
</form>
@endsection