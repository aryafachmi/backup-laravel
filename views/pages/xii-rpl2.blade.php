@extends('layouts.master')

@section('title', 'Halaman Beranda')

@section('judul', 'Data Siswa XII RPL 2')

@section('tabelRPL2')

<div class="card">
  <div class="card-body">
    
    <a href="tambah" class="btn btn-outline-primary mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
      <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
      <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
    </svg> Tambah Data</a>
  
  <table class="table">
      <thead class="bg-primary">
        <tr>
          <th scope="col" style="color: white">No</th>
          <th scope="col" style="color: white">Nama</th>
          <th scope="col" style="color: white">Aksi</th>
          <th scope="col" style="color: white">NIS</th>
          <th scope="col" style="color: white">Email</th>
          <th scope="col" style="color: white">No. Telp</th>
        </tr>
      </thead>
      <tbody>
        <?php $n=1; ?>
        @foreach($bio as $p)
        <tr>
          <th>{{$n++}}</th>
          <td>{{$p->nama}}</td>
          <td><a href="">edit</a>~<a href="">hapus</a></td>
          <td>{{$p->nis}}</td>
          <td>{{$p->kelas}}</td>
          <td>{{$p->tgllhr}}</td>
        </tr>
        @endforeach
      </tbody>
  </table>

  </div>
</div>



  @endsection