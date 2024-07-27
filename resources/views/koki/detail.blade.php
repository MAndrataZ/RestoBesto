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
                                <th class="product-name">MENU</th>
                                <th class="product-quantity">NO.MEJA</th>
                                <th class="product-status">STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                  PS0015
                                </td>
                                <td>
                                  Karoket Cihuyy
                                </td>
                                <td>
                                    03
                                </td>
                                <td>
                                    <select name="status" class="form-control">
                                        <option value="DIPROSES" selected>DIPROSES</option>
                                        <option value="SELESAI">SELESAI</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                  PS0015
                                </td>
                                <td>
                                  Mie Sehat
                                </td>
                                <td>
                                    03
                                </td>
                                <td>
                                    <select name="status" class="form-control">
                                        <option value="DIPROSES" selected>DIPROSES</option>
                                        <option value="SELESAI">SELESAI</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                  PS0015
                                </td>
                                <td>
                                  Jus Jeruk
                                </td>
                                <td>
                                    03
                                </td>
                                <td>
                                    <select name="status" class="form-control">
                                        <option value="DIPROSES" selected>DIPROSES</option>
                                        <option value="SELESAI">SELESAI</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                  PS0016
                                </td>
                                <td>
                                  Kopi RestoBesto
                                </td>
                                <td>
                                    05
                                </td>
                                <td>
                                    <select name="status" class="form-control">
                                        <option value="DIPROSES" selected>DIPROSES</option>
                                        <option value="SELESAI">SELESAI</option>
                                    </select>
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
