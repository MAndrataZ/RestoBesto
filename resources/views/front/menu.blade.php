@extends('layouts.front.main')

@section('container')
<div class="container">
    <h1 class="title my-4">Menu Kita</h1>


    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4 mb-4">
            <form method="post" class="box">
                <img src="images/bowl-2.png" alt="Makanan" height="10rem" width="100%">
                <a href="#" class="cat">Karoket Cihuyy</a>
                <div class="name">Karoket nikmat dengan beberapa sayuran, disajikan spesial oleh RestoBesto</div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="price"><span>Rp. </span>14 000<span>/-</span></div>
                    <input type="number" name="qty" class="qty form-control" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                </div>
                <a href="" class="btn btn-order me-2">Order</a>
            </form>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4 mb-4">
            <form method="post" class="box">
                <img src="images/bowl-3.png" alt="Makanan" height="10rem" width="100%">
                <a href="#" class="cat">Mie Sehat</a>
                <div class="name">Mie nikmat disajikan dengan sehat, tidak perlu khawatir dengan diet anda</div>
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
                <a href="#" class="cat">Steak Special RestoBesto</a>
                <div class="name">Steak dengan penyajian spesial dari RestoBesto</div>
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
                <a href="#" class="cat">Jus Jeruk</a>
                <div class="name">Jeruk segar dijadikan jus yang nikmat</div>
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
                <a href="#" class="cat">RestoBesto Coffee</a>
                <div class="name">Kopi dengan biji spesial original dari RestoBesto</div>
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
                <a href="#" class="cat">Bolu Coklat</a>
                <div class="name">Bolu coklat manis, buat hari lebih manis</div>
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
