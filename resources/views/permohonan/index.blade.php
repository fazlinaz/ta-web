@extends('layouts.templates')
@section('content')
<div class="card">
  <div class="card-header">
    {{-- <a href="{{ route('pengguna.create') }}" class="btn btn-primary float-right">Tambah Pengguna</a> --}}
  </div>
    <div class="card-body">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Kegiatan</th>
                <th scope="col">Lokasi</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $item)
              <tr>
                <th scope="row">1</th>
                <td>{{$item->name}}</td>
                <td>{{$item->jenis_kegiatan}}</td>
                <td>{{$item->lokasi}}</td>
                <td>{{$item->role}}</td>
                <td>
                  <a href="{{route('pengguna.edit', $item->id)}}" class="btn btn-success m-1"><i class="fas fa-edit"></i></a>
                  <form action="{{ route('pengguna.destroy', $item->id) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger m-1"><i class="fas fa-trash"></i></button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
    
</div>    
@endsection