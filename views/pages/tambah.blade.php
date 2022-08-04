@extends('layouts.master')

@section('title', 'Halaman Form')

@section('judul', 'Tambah Data')

@section('Form')

<div class="card p-2">
    <div class="card-body">
      
        <form method="POST" action="/simpanData">
          {{csrf_field() }}

          @if ($message = Session::get('sukses'))
                <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert" style="color: #fff">x</button>
                  <strong> {{$message}} </strong>
                </div>
          @endif

            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input class="form-control" type="text" name="nama">
              @if ($errors->has('nama'))
              <div class="class">
                {{$errors->first('nama')}}
              </div>
              @endif
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">NIS</label>
                <input class="form-control" type="text" name="nis">
                @if ($errors->has('nis'))
              <div class="class">
                {{$errors->first('nis')}}
              </div>
              @endif
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Kelas</label>
                <input class="form-control" type="text" name="kelas">
                @if ($errors->has('kelas'))
              <div class="class">
                {{$errors->first('kelas')}}
              </div>
              @endif
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Tanngal Lahir</label>
                <input class="form-control" type="date" name="tgllhr">
                @if ($errors->has('tgllhr'))
              <div class="class">
                {{$errors->first('tgllhr')}}
              </div>
              @endif
              </div>

              {{-- <div class="form-group">
                <label for="exampleInputEmail1">No. Telpon</label>
                <input class="form-control" type="text" name="no-tlp">
                @if ($errors->has('no-tlp'))
              <div class="class">
                {{$errors->first('no-tlp')}}
              </div>
              @endif
              </div> --}}

              </div>
            <button type="submit" class="btn btn-primary d-flex justify-content-center m-auto">Submit</button>
          </form>

    </div>
  </div>



@endsection