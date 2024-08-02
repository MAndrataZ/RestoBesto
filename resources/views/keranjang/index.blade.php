@extends('layouts.front.main')

@section('container')
<div class="untree_co-section before-footer-section">
    <div class="container">
        <div class="row mb-5">
            <form id="table-number-form" class="col-md-12" method="post" action="{{ route('proses_pesanan') }}">
                @csrf
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
                                    <tr data-id="{{ $id }}">
                                        <td class="product-thumbnail">
                                            <img src="{{ $details['gambar_menu'] }}" alt="{{ $details['nama_menu'] }}" class="img-fluid">
                                        </td>
                                        <td class="product-name">
                                            <h2 class="h5 text-black">{{ $details['nama_menu'] }}</h2>
                                        </td>
                                        <td class="product-price" data-price="{{ $details['harga'] }}">Rp. {{ number_format($details['harga'], 0, ',', '.') }}</td>
                                        <td>
                                            <input type="number" name="keranjang[{{ $id }}][qty]" class="form-control text-center quantity" value="{{ $details['total'] }}" min="1" max="99">
                                        </td>
                                        <td class="product-total">Rp. {{ number_format($details['harga'] * $details['total'], 0, ',', '.') }}</td>
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

                <!-- Section untuk Input Nomor Meja -->
                <div class="row mb-5">
                    <div class="col-md-12">
                        <div class="form-inline">
                            <div class="form-group">
                                <label for="table-number" class="sr-only">Nomor Meja</label>
                                <input type="number" class="form-control" id="table-number" name="table_number" placeholder="Nomor Meja" style="width: 150px;" required>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Section -->

                <!-- Total dan Button Proses -->
                <div class="row mb-5">
                    <div class="col-md-6">
                        <div class="row mb-5">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <a href="#" class="btn btn-secondary me-3" id="edit-keranjang">Edit Keranjang</a>
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
                                        <strong class="text-black" id="subtotal-display">Rp. {{ number_format($subtotal, 0, ',', '.') }}</strong>
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
                                        <strong class="text-black" id="total-display">Rp. {{ number_format($subtotal, 0, ',', '.') }}</strong>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-black btn-lg py-3 btn-block">Proses Pesanan Anda</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Total dan Button Proses -->
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById('table-number-form').addEventListener('submit', function(event) {
        var tableNumberInput = document.getElementById('table-number');
        if (tableNumberInput.value === '') {
            event.preventDefault();
            alert('Nomor meja harus diisi.');
        }
    });

    document.getElementById('edit-keranjang').addEventListener('click', function(event) {
        event.preventDefault();
        updateSubtotal();
    });

    function updateSubtotal() {
        let subtotal = 0;
        document.querySelectorAll('tbody tr').forEach(function(row) {
            const price = parseFloat(row.querySelector('.product-price').getAttribute('data-price'));
            const quantity = parseInt(row.querySelector('.quantity').value);
            const total = price * quantity;
            row.querySelector('.product-total').textContent = 'Rp. ' + number_format(total, 0, ',', '.');
            subtotal += total;
        });
        document.getElementById('subtotal-display').textContent = 'Rp. ' + number_format(subtotal, 0, ',', '.');
        document.getElementById('total-display').textContent = 'Rp. ' + number_format(subtotal, 0, ',', '.');
    }

    function number_format(number, decimals, decPoint, thousandsSep) {
        decimals = decimals || 0;
        number = parseFloat(number);
        if (!decPoint || !thousandsSep) {
            decPoint = '.';
            thousandsSep = ',';
        }
        var roundedNumber = Math.round( Math.abs( number ) * ('1e' + decimals) ) + '';
        var numbersString = decimals ? roundedNumber.slice(0, decimals * -1) : roundedNumber;
        var decimalsString = decimals ? roundedNumber.slice(decimals * -1) : '';
        var formattedNumber = "";
        while (numbersString.length > 3) {
            formattedNumber += thousandsSep + numbersString.slice(-3)
            numbersString = numbersString.slice(0,-3);
        }
        return (number < 0 ? '-' : '') + numbersString + formattedNumber
               + (decimalsString ? decPoint + decimalsString : '');
    }
</script>
@endsection
