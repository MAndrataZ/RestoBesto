@extends('layouts.front.main')

@section('container')
<div class="container">
    <h1 class="title my-4">Menu Kita</h1>

    <!-- Category Selection -->
    <div class="d-flex justify-content-center mb-4">
        <a href="#" class="btn btn-outline-secondary me-2">Semua</a>
        <a href="#" class="btn btn-outline-secondary me-2">Makanan</a>
        <a href="#" class="btn btn-outline-secondary me-2">Minuman</a>
        <a href="#" class="btn btn-outline-secondary">Dessert</a>
    </div>
    <hr>

    <div class="row">
        <div class="col-md-4 mb-4">
            <form method="post" class="box">
                <img src="images/bowl-2.png" alt="Makanan" height="10rem" width="100%">
                <a href="#" class="cat">Makanan</a>
                <div class="name">Karoket Cihuyy</div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="price"><span>Rp. </span>14 000<span>/-</span></div>
                    <input type="number" name="qty" class="qty form-control" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                </div>
                <a href="" class="btn btn-order me-2">Order</a>
            </form>
        </div>
        <div class="col-md-4 mb-4">
            <form method="post" class="box">
                <img src="images/bowl-3.png" alt="Makanan" height="10rem" width="100%">
                <a href="#" class="cat">Makanan</a>
                <div class="name">Mie Sehat</div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="price"><span>Rp. </span>25 000<span>/-</span></div>
                    <input type="number" name="qty" class="qty form-control" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                </div>
                <a href="" class="btn btn-order me-2">Order</a>
            </form>
        </div>
        <div class="col-md-4 mb-4">
            <form method="post" class="box">
                <img src="images/dish-4.png" alt="Pizza" height="10rem" width="100%">
                <a href="#" class="cat">Makanan</a>
                <div class="name">Steak Special RestoBesto</div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="price"><span>Rp. </span>38 000<span>/-</span></div>
                    <input type="number" name="qty" class="qty form-control" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                </div>
                <a href="" class="btn btn-order me-2">Order</a>
            </form>
        </div>
        <div class="col-md-4 mb-4">
            <form method="post" class="box">
                <img src="images/drink-1.png" alt="Pizza" height="10rem" width="100%">
                <a href="#" class="cat">Minuman</a>
                <div class="name">Jus Jeruk</div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="price"><span>Rp. </span>12 000<span>/-</span></div>
                    <input type="number" name="qty" class="qty form-control" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                </div>
                <a href="" class="btn btn-order me-2">Order</a>
            </form>
        </div>
        <div class="col-md-4 mb-4">
            <form method="post" class="box">
                <img src="images/drink-2.png" alt="Pizza" height="10rem" width="100%">
                <a href="#" class="cat">Minuman</a>
                <div class="name">RestoBesto Coffee</div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="price"><span>Rp. </span>19 000<span>/-</span></div>
                    <input type="number" name="qty" class="qty form-control" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                </div>
                <a href="" class="btn btn-order me-2">Order</a>
            </form>
        </div>
        <div class="col-md-4 mb-4">
            <form method="post" class="box">
                <img src="images/dessert-2.png" alt="Pizza" height="10rem" width="100%">
                <a href="#" class="cat">Dessert</a>
                <div class="name">Bolu Coklat</div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="price"><span>Rp.</span>21 000<span>/-</span></div>
                    <input type="number" name="qty" class="qty form-control" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                </div>
                <a href="" class="btn btn-order me-2">Order</a>
            </form>
        </div>
    </div>
</div>
@endsection
