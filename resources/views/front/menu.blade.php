@extends('layouts.front.main')

@section('container')
<div class="container">
    <h1 class="title my-4">Menu Kita</h1>

    <div class="row">
        <div class="col-md-4 mb-4">
            <form method="post" class="box">
                <img src="images/bowl-2.png" alt="Makanan" height="10rem" width="100%">
                <a href="#" class="cat">Makanan</a>
                <div class="name">Makanan 01</div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="price"><span>Rp.</span>xxx xxx xxx<span>/-</span></div>
                    <input type="number" name="qty" class="qty form-control" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                </div>
                <a href="" class="btn btn-order me-2">Order</a>
            </form>
        </div>
        <div class="col-md-4 mb-4">
            <form method="post" class="box">
                <img src="images/bowl-3.png" alt="Makanan" height="10rem" width="100%">
                <a href="#" class="cat">Makanan</a>
                <div class="name">Makanan 02</div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="price"><span>Rp.</span>xxx xxx xxx<span>/-</span></div>
                    <input type="number" name="qty" class="qty form-control" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                </div>
                <a href="" class="btn btn-order me-2">Order</a>
            </form>
        </div>
        <div class="col-md-4 mb-4">
            <form method="post" class="box">
                <img src="images/dish-4.png" alt="Pizza" height="10rem" width="100%">
                <a href="#" class="cat">Makanan</a>
                <div class="name">Makanan 03</div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="price"><span>Rp.</span>xxx xxx xxx<span>/-</span></div>
                    <input type="number" name="qty" class="qty form-control" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                </div>
                <a href="" class="btn btn-order me-2">Order</a>
            </form>
        </div>
        <div class="col-md-4 mb-4">
            <form method="post" class="box">
                <img src="images/drink-1.png" alt="Pizza" height="10rem" width="100%">
                <a href="#" class="cat">Minuman</a>
                <div class="name">Minuman 01</div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="price"><span>Rp.</span>xxx xxx xxx<span>/-</span></div>
                    <input type="number" name="qty" class="qty form-control" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                </div>
                <a href="" class="btn btn-order me-2">Order</a>
            </form>
        </div>
        <div class="col-md-4 mb-4">
            <form method="post" class="box">
                <img src="images/drink-2.png" alt="Pizza" height="10rem" width="100%">
                <a href="#" class="cat">Minuman</a>
                <div class="name">Minuman 02</div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="price"><span>Rp.</span>xxx xxx xxx<span>/-</span></div>
                    <input type="number" name="qty" class="qty form-control" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                </div>
                <a href="" class="btn btn-order me-2">Order</a>
            </form>
        </div>
        <div class="col-md-4 mb-4">
            <form method="post" class="box">
                <img src="images/dessert-2.png" alt="Pizza" height="10rem" width="100%">
                <a href="#" class="cat">Dessert</a>
                <div class="name">Dessert 01</div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="price"><span>Rp.</span>xxx xxx xxx<span>/-</span></div>
                    <input type="number" name="qty" class="qty form-control" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                </div>
                <a href="" class="btn btn-order me-2">Order</a>
            </form>
        </div>
    </div>
</div>
@endsection
