@extends('layouts.front.main')

@section('container')
<div class="untree_co-section before-footer-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="site-blocks-table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="product-thumbnail">Gambar</th>
                                <th class="product-name">Menu</th>
                                <th class="product-quantity">Jumlah</th>
                                <th class="product-status">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($pesanan as $item)
                                @foreach($item->detailPesanan as $detail)
                                    <tr>
                                        <td class="product-thumbnail">
                                            <img src="{{ $detail->menu->gambar_menu }}" alt="{{ $detail->menu->nama_menu }}" class="img-fluid">
                                        </td>
                                        <td class="product-name">
                                            <h2 class="h5 text-black">{{ $detail->menu->nama_menu }}</h2>
                                        </td>
                                        <td>{{ $detail->qty }}</td>
                                        <td>{{ $item->status }}</td>
                                    </tr>
                                @endforeach
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">Belum ada pesanan</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
