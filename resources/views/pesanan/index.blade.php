@extends('layouts.front.main')

@section('container')
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
                                <th class="product-quantity">Jumlah</th>
                                <th class="product-status">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="product-thumbnail">
                                  <img src="images/bowl-2.png" alt="Image" class="img-fluid">
                                </td>
                                <td class="product-name">
                                  <h2 class="h5 text-black">Karoket Cihuyy</h2>
                                </td>
                                <td>1</td>
                                <td>
                                    Diproses
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
