@extends('layouts.front.main')

@section('container')
<div class="container">
    <h1 class="title my-4">Menu Kita</h1>

    <div class="row">
        @foreach ($menus as $menu)
            <div class="col-md-4 mb-4">
                <form method="post" class="box">
                    <img src="{{ $menu->gambar_menu }}" alt="{{ $menu->nama_menu }}" height="10rem" width="100%">
                    <a href="#" class="cat">{{ $menu->nama_menu }}</a>
                    <div class="name">{{ $menu->deskripsi_menu }}</div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="price"><span>Rp. </span>{{ number_format($menu->harga, 0, ',', '.') }}<span>/-</span></div>
                        <input type="number" name="qty" class="qty form-control" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                    </div>
                    <a href="" class="btn btn-order me-2">Order</a>
                </form>
            </div>
        @endforeach
    </div>
</div>
@endsection