@extends('layouts.main')

@section('container')
    <form action="{{ route('supplier.store') }}" method="post">
        @csrf
        <label>
            Username
            <input type="text" name="nama" placeholder="Nama Supplier">
        </label>
        <button type="submit">Tambah</button>
    </form>
@endsection
