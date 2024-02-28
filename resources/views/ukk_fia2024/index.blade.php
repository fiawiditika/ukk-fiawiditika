@extends('layout/aplikasi')

@section('konten')
<a href="ukk_fia2024/create" class="btn bg-primary-subtle">+ Tambah Data</a>
<a href="/cetakdata/" class="btn bg-info-subtle">Cetak Data✨</a>
<table class="table">
    <tr>
        <th>Buku Id</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Tahun Terbit</th>
        <th>Aksi</th>
    </tr>
    @foreach ($data as $item)
    <tbody>
            <td>{{$item->bukuId}}</td>
            <td>{{$item->judul}}</td>
            <td>{{$item->penulis}}</td>
            <td>{{$item->penerbit}}</td>
            <td>{{$item->tahunterbit}}</td>
            <td>
                <a class="btn bg-warning-subtle  btn-sm" href="{{url('/ukk_fia2024/'.$item->bukuId.'/edit')}}">EDIT</a>
                <form onsubmit="return confirm('Yakin mau Hapus Data?')" class='d-inline' action="{{'/ukk_fia2024/'.$item->bukuId}}" method="POST">
                   <a href="cetakdata" class="btn bg-success-subtle btn-sm" target="_blank">PRINT</a>
                    <button class="btn bg-danger-subtle btn-sm" type="submit">DELETE</button>
                    @csrf
                    @method('DELETE')
                </form>
            </td>
        </tbody>
        @endforeach
</table>
    <a href="/home" class="btn btn-dark">Logout</a>
    {{$data->links()}}
@endsection