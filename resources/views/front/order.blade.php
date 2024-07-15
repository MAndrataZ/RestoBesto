@extends('layouts.front.main')

@section('container')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8 text-center">
            <p>Anda Belum melakukan Order Pesanan, pergi ke bagian menu lalu checkout di cart!</p>
            <div class="mt-4">
                <a href="{{ route('link.menu') }}" class="btn btn-secondary me-3">Menu</a>
                <a href="{{ route('link.cart') }}" class="btn btn-secondary me-3">Cart</a>
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
