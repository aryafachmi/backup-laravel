@extends('layouts.master')

@section('title', 'Halaman Beranda')

@section('judul', 'Beranda')

@section('tampil')

<div class="row">
    <div class="col">
      <a href="rpl1">
      <div class="card">
        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="currentColor" class="pt-3 bi bi-person-fill m-auto primary" viewBox="0 0 16 16">
          <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
        </svg>
        <div class="card-body">
          <p class="card-text text-center font-weight-bold">XII RPL 1</p>
        </div>
      </div>
    </a>
    </div>


    <div class="col">
      <a href="rpl2
      ">
      <div class="card">
        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="currentColor" class="pt-3 bi bi-person-fill m-auto primary" viewBox="0 0 16 16">
          <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
        </svg>
        <div class="card-body">
          <p class="card-text text-center font-weight-bold">XII RPL 2</p>
        </div>
      </div>
    </div>
  </a>
</div>

@endsection

