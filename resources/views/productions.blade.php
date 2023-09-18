@extends('master')

@section('content')

    <h1>Data Produksi</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Bulan</th>
                <th>Produksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataProduksi as $produksi)
                <tr>
                    <td>{{ $produksi->tanggal }}</td>
                    <td>{{ $produksi->bulan }}</td>
                    <td>{{ $produksi->produksi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h1>Detail Produksi per Bulan</h1>
    <h2>Bulan: {{ $bulan }}</h2>

    <table class="table">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Produksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataDetail as $produksi)
                <tr>
                    <td>{{ $produksi->tanggal }}</td>
                    <td>{{ $produksi->produksi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>


    <h1>Detail Produksi per Tanggal</h1>
    <h2>Bulan: {{ $bulan }}</h2>
    <h2>Tanggal: {{ $tanggal }}</h2>

    <table class="table">
        <thead>
            <tr>
                <th>Produksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataDetail as $produksi)
                <tr>
                    <td>{{ $produksi->produksi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection
