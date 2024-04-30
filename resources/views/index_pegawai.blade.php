@extends('layouts.sidebar')

@section('content')
<div class="container">
    <h1>Pegawai</h1>
    <a class="btn btn-success"href="{{route('pegawai.create')}}"> Tambah Pegawai</a>
    <table class="table">
  <thead class="table-light">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nip</th>
      <th scope="col">Nama</th>
      <th scope="col">Jabatan</th>
      <th scope="col">Bagian</th>
      <th scope="col">No HP</th>
      <th scope="col">Status</th>
      <th scope="col">Aksi</th>



    </tr>
  </thead>
  <tbody>
   @forelse ($Pegawais as $pegawai) 
    <tr>
      <th scope="row">{{$pegawai->id}}</th>    
      <td>{{$pegawai->nama_pegawai}}</td>
      <td>{{$pegawai->status}}</td>
      <td>
      <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('pegawai.destroy', $pegawai->id) }}" method="POST">
      <a href="{{ route('pegawai.edit', $pegawai->id) }}" class="btn btn-sm btn-primary">EDIT</a>
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
      </form>       
    </td>
    </tr>
    @empty
    <div class="alert alert-danger">
        Data Post belum Tersedia.
    </div>  
    @endforelse 
   
  </tbody>
</table>
</div>
@endsection
