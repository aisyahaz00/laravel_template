@extends('layouts.dashboard.page-layout')

@section('pages')
<div>
    <div class="flex items-center justify-between mb-8">
        <h1>List Barang</h1>
        <a href="{{ route('dashboard.barang.form-tambah') }}" class="btn btn-primary">Tambah</a>
    </div>

    <div>
      <table class="table">
            <thead>
                <th class="w-px text-right whitespace-nowrap">id barang</th>
                <th class="text-left">jenis</th>
                <th class="text-left">nama barang</th>
                <th class="text-left">satuan</th>
                <th class="text-left">status</th>
            </thead>

            <tbody>
                @foreach ($barang as $brg)
                <tr>
                    <td class="w-px text-right whitespace-nowrap">{{$brg->idbarang}}</td>
                    <td class="text-left">{{$brg->jenis}}</td>
                    <td class="text-left">{{$brg->nama}}</td>
                    <td class="text-left">
                        {{$brg->nama_satuan}}
                    </td>
                    <td class="p-2 text-left">{{$brg->deleted_at ? 'Tidak Aktif' : 'Aktif'}}</td>
                    <td class="w-px whitespace-nowrap">
                    <div class="flex items-center space-x-2">
                    <a class="btn-icon btn-edit" href="{{ route('dashboard.barang.form-edit', ['id' => $brg->idbarang]) }}">
                        <x-far-edit class="icon" />
                    </a>
                    {{-- <button class="btn-icon btn-danger" x-on:click="deleteUser = {{$user}}">
                        <x-far-trash-alt class="icon" />
                    </button> --}}
                    </div>
                     </td>
                </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection