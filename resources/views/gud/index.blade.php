@extends('template')
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Gudang</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('gud.create') }}"> Input Data</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('succes'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
<div style="text-align: center">
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th width="280px" class="text-center">Tanggal</th>
            <th width="280px"class="text-center">Nama Pegawai</th>
            <th width="280px"class="text-center">Nama Barang</th>
            <th width="280px"class="text-center">Jumlah</th>
            <th width="280px"class="text-center">Keterangan</th>
            <th width="280px"class="text-center">Action</th>
        </tr>
        @foreach ($gud as $gudang)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $gudang->Tanggal}}</td>
            <td>{{ $gudang->NamaPegawai }}</td>
            <td>{{ $gudang->NamaBarang }}</td>
            <td>{{ $gudang->Jumlah }}</td>
            <td>{{ $gudang->Keterangan }}</td>
            <td class="text-center">
                <form action="{{ route('gud.destroy',$gudang->id) }}" method="POST">

                    <a class="btn btn-primary btn-sm" href="{{ route('gud.edit',$gudang->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
    {!! $gud->links() !!}
@endsection