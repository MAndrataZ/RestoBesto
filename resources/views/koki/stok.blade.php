@extends('layouts.front.main2')

@section('container2')
<div class="container">
    <h1 class="title my-4">Menu Kita</h1>

    <div class="row">
        @foreach ($menus as $menu)
            <div class="col-md-4 mb-4">
                <form method="post" action="{{ route('tambah_ke_keranjang', $menu->id_menu) }}" class="box">
                    @csrf
                    <img src="{{ $menu->gambar_menu }}" alt="{{ $menu->nama_menu }}" height="10rem" width="100%">
                    <a href="#" class="cat">{{ $menu->nama_menu }}</a>
                    <div class="name">{{ $menu->deskripsi_menu }}</div>
                    <div class="stock">Stok: {{ $menu->stok }}</div>
                    <a href="#" class="text-primary edit-stock" data-id="{{ $menu->id_menu }}" data-stok="{{ $menu->stok }}">Edit Stok</a>
                </form>
            </div>
        @endforeach
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editStockModal" tabindex="-1" role="dialog" aria-labelledby="editStockModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editStockModalLabel">Edit Stok</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="{{ route('update_stok') }}">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="id_menu" id="id_menu">
                    <div class="form-group">
                        <label for="stok">Jumlah Stok</label>
                        <input type="number" class="form-control" id="stok" name="stok" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-secondary">Simpan perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var editStockLinks = document.querySelectorAll('.edit-stock');
        var editStockModal = document.getElementById('editStockModal');
        var idMenuInput = document.getElementById('id_menu');
        var stokInput = document.getElementById('stok');

        editStockLinks.forEach(function (link) {
            link.addEventListener('click', function (event) {
                event.preventDefault();
                console.log('Edit Stok diklik'); // Untuk memeriksa apakah event listener bekerja
                var idMenu = link.getAttribute('data-id');
                var stok = link.getAttribute('data-stok');
                idMenuInput.value = idMenu;
                stokInput.value = stok;
                $(editStockModal).modal('show');
            });
        });
    });
</script>
@endsection
