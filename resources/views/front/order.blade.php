@extends('layouts.front.main')

@section('container')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8 text-center">
            <p>Anda Belum melakukan Order Pesanan, pergi ke bagian menu lalu checkout di keranjang!</p>
            <div class="mt-4">
                <a href="{{ route('menu.index') }}" class="btn btn-secondary me-3">Menu</a>
                <a href="{{ route('keranjang.index') }}" class="btn btn-secondary me-3">Keranjang</a>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-3">
        <div class="col-md-8 text-center">
            <!-- Space below the buttons -->
        </div>
    </div>
</div>
@endsection
