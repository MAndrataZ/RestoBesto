@extends('layouts.front.main2')

@section('container2')
<div class="untree_co-section before-footer-section">
    <div class="container">
        <div class="row mb-5">
            <form class="col-md-12" method="post">
                <div class="site-blocks-table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="product-thumbnail">Gambar</th>
                                <th class="product-name">Menu</th>
                                <th class="product-price">Harga</th>
                                <th class="product-quantity">Jumlah</th>
                                <th class="product-total">Total</th>
                                <th class="product-remove">Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(session('keranjang'))
                                @foreach(session('keranjang') as $id => $details)
                                    <tr>
                                        <td class="product-thumbnail">
                                            <img src="{{ $details['gambar_menu'] }}" alt="{{ $details['nama_menu'] }}" class="img-fluid">
                                        </td>
                                        <td class="product-name">
                                            <h2 class="h5 text-black">{{ $details['nama_menu'] }}</h2>
                                        </td>
                                        <td>Rp. {{ number_format($details['harga'], 0, ',', '.') }}</td>
                                        <td>
                                            <input type="number" name="qty" class="form-control text-center" value="{{ $details['total'] }}" min="1" max="99">
                                        </td>
                                        <td>Rp. {{ number_format($details['harga'] * $details['total'], 0, ',', '.') }}</td>
                                        <td><a href="{{ route('hapus_dari_keranjang', $id) }}" class="btn btn-primary btn-sm">X</a></td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6" class="text-center">Keranjang Anda kosong</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </form>
        </div>

        <!-- New Section for Table Number Input -->
        <div class="row mb-5">
            <div class="col-md-12">
                <form id="table-number-form" class="form-inline" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="table-number" class="sr-only">Nomor Meja</label>
                        <input type="number" class="form-control" id="table-number" name="table_number" placeholder="Nomor Meja" style="width: 150px;" required>
                    </div>
                    <button type="submit" class="btn btn-black btn-sm btn-block">Simpan</button>
                </form>
            </div>
        </div>
        <!-- End of New Section -->

        <div class="row">
            <div class="col-md-6">
                <div class="row mb-5">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <a href="#" class="btn btn-secondary me-3">Edit Keranjang</a>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('menu.index') }}" class="btn btn-secondary me-3">Tambah Pesanan</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pl-5">
                <div class="row justify-content-end">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-12 text-right border-bottom mb-5">
                                <h3 class="text-black h4 text-uppercase">Total Pesanan</h3>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <span class="text-black">Subtotal</span>
                            </div>
                            <div class="col-md-6 text-right">
                                <strong class="text-black">Rp. {{ number_format($subtotal, 0, ',', '.') }}</strong>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <span class="text-black">Tax</span>
                            </div>
                            <div class="col-md-6 text-right">
                                <strong class="text-black">Rp. 0</strong>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-md-6">
                                <span class="text-black">Total</span>
                            </div>
                            <div class="col-md-6 text-right">
                                <strong class="text-black">Rp. {{ number_format($subtotal, 0, ',', '.') }}</strong>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-black btn-lg py-3 btn-block" onclick="window.location='checkout.html'">Proses Pesanan Anda</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
