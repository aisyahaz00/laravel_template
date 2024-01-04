@extends('layouts.dashboard.page-layout')

@section('pages')
<div class="wrapper-content">
    <h1>Tambah Penjualan</h1>

    <form action="{{ route('dashboard.penjualan.tambah') }}" method="POST">
        <div>
            @csrf
            <div class="flex flex-wrap gap-4">
                @foreach ($barang as $brg)
                <div class="card flex flex-col w-32">
                    <div>
                        <input type="checkbox" name="{{'barang[' . $loop->index . '][idbarang]'}}"
                            value="{{$brg->idbarang}}">
                        <div class="w-24 mx-auto h-24 mb-2 rounded bg-gray-500"></div>
                    </div>
                    <div class="text-sm font-medium mb-2">{{ $brg->nama }}</div>
                    <div class="w-12 mx-auto pb-2">
                        <x-form-input name="{{'barang[' . $loop->index . '][jumlah]'}}" type="number" value="0" />
                    </div>
                    <div class="text-sm mt-auto">Rp {{$brg->harga}} </div>
                </div>
                @endforeach
            </div>

            <div class="flex items-center justify-center space-x-4">
                <x-button-submit />
                <a href="{{ route('dashboard.penjualan.halamanPenjualan') }}" class="w-28 btn btn-info block">Batal</a>
            </div>
        </div>
    </form>
</div>
@endsection