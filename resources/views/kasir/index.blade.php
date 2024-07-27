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
                                <th class="product-thumbnail">ID_PESANAN</th>
                                <th class="product-name">NO.MEJA</th>
                                <th class="product-quantity">STATUS</th>
                                <th class="product-status">PEMBAYARAN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                  PS0017
                                </td>
                                <td>
                                  03
                                </td>
                                <td>PESANAN DITERIMA</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('kasir.show', 1) }}" class="btn btn-sm btn-info"><span class="fa fa-info"></span></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                  PS0016
                                </td>
                                <td>
                                  05
                                </td>
                                <td>DIPROSES</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('kasir.show', 1) }}" class="btn btn-sm btn-info"><span class="fa fa-info"></span></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                  PS0015
                                </td>
                                <td>
                                  02
                                </td>
                                <td>SELESAI</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('kasir.show', 1) }}" class="btn btn-sm btn-info"><span class="fa fa-info"></span></a>
                                    </div>
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
