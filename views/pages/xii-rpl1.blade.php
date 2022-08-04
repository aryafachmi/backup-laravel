@extends('layouts.master')

@section('title', 'Halaman Beranda')

@section('judul', 'Data Siswa XII RPL 1')

@section('tabelRPL1')

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
                <th scope="col" style="color: white">NIS</th>
                <th scope="col" style="color: white">Email</th>
                <th scope="col" style="color: white">No. Telp</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Dziki Moses</td>
                <td>12026674</td>
                <td>@mdo</td>
                <td>0864721923471</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Reno</td>
                <td>12026985</td>
                <td>@mdo</td>
                <td>086412348471</td>
              </tr>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Kevin Praditya</td>
                <td>120266438</td>
                <td>@mdo</td>
                <td>086144837481</td>
              </tr>
              </tr>
            </tbody>
          </table>

    </div>
  </div>


  @endsection