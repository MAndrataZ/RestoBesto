@extends('layouts.front.main2')

@section('container2')
    <div class="container py-5">
        <div class="w-75 mx-auto border rounded px-3 py-3">
            <p><strong>ID PESANAN :</strong> PS0015</p>
            <p><strong>NAMA KASIR :</strong> ELSIYANA GAYANRANS</p>
            <p><strong>DETAIL PESANAN :</strong> Detail123</p>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>MENU</th>
                        <th>QUANTITY</th>
                        <th>SUB TOTAL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>KAROKET CIHUYY</td>
                        <td>1</td>
                        <td>RP. 25.000,00</td>
                    </tr>
                    <tr>
                        <td>MIE SEHAT</td>
                        <td>2</td>
                        <td>RP. 50.000,00</td>
                    </tr>
                    <tr>
                        <td>JUS JERUK</td>
                        <td>3</td>
                        <td>RP. 36.000,00</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2" class="text-end"><strong>TOTAL HARGA</strong></td>
                        <td>RP. 111.000,00</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-end"><strong>METODE PEMBAYARAN</strong></td>
                        <td>KARTU DEBIT</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-end"><strong>JUMLAH BAYAR</strong></td>
                        <td>RP. 111.000,00</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-end"><strong>KEMBALIAN</strong></td>
                        <td>RP. 0,00</td>
                    </tr>
                </tfoot>
            </table>
            <a href="{{ route('kasir.index') }}" class="btn btn-secondary">&lt; KEMBALI</a>
            <button class="btn btn-secondary float-end">CETAK NOTA</button>
        </div>
    </div>
@endsection
