@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit Data</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('home') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Terdapat kesalahan</strong>
            <ul>
            </ul>
        </div>
    @endif

    <form action="{{ route('gud.update',$gud->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal:</strong>
                <input type="date" name="Tanggal" class="form-control" placeholder="Tanggal" value="{{ $gud->Tanggal }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Pegawai:</strong>
                <input type="text" name="NamaPegawai" class="form-control" placeholder="Nama Pegawai" value="{{ $gud->NamaPegawai }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Barang:</strong>
                <input type="text" name="NamaBarang" value="{{ $gud->NamaBarang }}" class="form-control" placeholder="Nama Barang">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah:</strong>
                <input type="text" name="Jumlah" class="form-control" placeholder="Jumlah" value="{{ $gud->Jumlah }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan:</strong>
                <input type="text" name="Keterangan" class="form-control" placeholder="Keterangan" value="{{ $gud->Keterangan }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>

    </form>
@endsection