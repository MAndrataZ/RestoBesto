@extends('layouts.front.main2')

@section('container2')
<div class="container">
    <h1 class="title my-4">Menu Kita</h1>

    <div class="row">
        @if(session('sukses'))
            <div class="alert alert-success">
                {{ session('sukses') }}
            </div>
        @endif
        @foreach ($menus as $menu)
            <div class="col-md-4 mb-4">
                <form method="post" action="{{ route('tambah_ke_keranjang', $menu->id_menu) }}" class="box">
                    @csrf
                    <img src="{{ $menu->gambar_menu }}" alt="{{ $menu->nama_menu }}" height="10rem" width="100%">
                    <a href="#" class="cat">{{ $menu->nama_menu }}</a>
                    <div class="name">{{ $menu->deskripsi_menu }}</div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="price"><span>Rp. </span>{{ number_format($menu->harga, 0, ',', '.') }}<span>/-</span></div>
                        <input type="number" name="qty" class="qty form-control" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                    </div>
                    <button type="submit" class="btn btn-order me-2">Pesan</button>
                </form>
            </div>
        @endforeach
    </div>
</div>

{{-- <script>
    @if(session('error'))
    alert('{{ session('error') }}')
    @endif
    
    @if(session('sukses'))
    alert('{{ session('sukses') }}')
    @endif
</script> --}}
@endsection
