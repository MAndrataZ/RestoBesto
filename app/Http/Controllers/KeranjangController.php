<?php

namespace App\Http\Controllers;

use App\Models\DetailPesanan;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Pesanan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class KeranjangController extends Controller
{
    public function tambahKeKeranjang(Request $request, $id)
    {
        $menu = Menu::find($id);

        if (!$menu) {
            return redirect()->back()->with('error', 'Menu tidak ditemukan.');
        }

        $qty = $request->input('qty', 1); // Dapatkan jumlah dari form, default ke 1 jika tidak ada

        $keranjang = session()->get('keranjang', []);

        if (isset($keranjang[$id])) {
            $keranjang[$id]['total'] += $qty;
        } else {
            $keranjang[$id] = [
                "nama_menu" => $menu->nama_menu,
                "total" => $qty,
                "harga" => $menu->harga,
                "gambar_menu" => $menu->gambar_menu
            ];
        }

        session()->put('keranjang', $keranjang);

        return redirect()->back()->with('sukses', 'Menu berhasil ditambahkan ke keranjang.');
    }

    public function index()
    {
        $keranjang = session()->get('keranjang', []);
        $subtotal = array_sum(array_map(function($item) {
            return $item['harga'] * $item['total'];
        }, $keranjang));

        return view('keranjang.index', compact('keranjang', 'subtotal'));
    }

    public function hapusDariKeranjang($id)
    {
        $keranjang = session()->get('keranjang');

        if (isset($keranjang[$id])) {
            unset($keranjang[$id]);
            session()->put('keranjang', $keranjang);
        }

        return redirect()->back()->with('sukses', 'Item berhasil dihapus dari keranjang.');
    }

    public function prosesPesanan(Request $request)
    {
        // Validasi nomor meja
        $request->validate([
            'table_number' => 'required|integer|min:1',
        ]);

        $noMeja = $request->input('table_number');
        $keranjang = session()->get('keranjang', []);
        $subtotal = array_sum(array_map(function($item) {
            return $item['harga'] * $item['total'];
        }, $keranjang));

        // Menghasilkan ID pesanan secara manual
        $idPesanan = 'ORD-' . date('YmdHis') . '-' . strtoupper(Str::random(6));

        // Mulai transaksi untuk menghindari data yang tidak konsisten
         DB::beginTransaction();
         try {
             // Simpan data ke tabel pesanan
             $pesanan = new Pesanan();
             $pesanan->id_pesanan = $idPesanan;
             $pesanan->no_meja = $noMeja;
             $pesanan->tanggal = now();
             $pesanan->total = $subtotal;
             $pesanan->status = 'Diproses';
             $pesanan->save();

            // Simpan detail pesanan ke tabel detail_pesanan
            foreach ($keranjang as $id => $details) {

                                DB::table('detail_pesanan')->insert([
                                    'id_pesanan' => $idPesanan,
                                    'subtotal' => $details['harga'] * $details['total'],
                                    'qty' => $details['total'],
                                    'id_menu' => $id,
                                    'id_detail' => str::random(5) . $id
                                ]);
                            }
            // Hapus keranjang setelah pesanan diproses
            session()->forget('keranjang');

            // Commit transaksi
            DB::commit();

            // Redirect dengan notifikasi
            return redirect()->route('keranjang.index')->with('sukses', 'Pesanan berhasil diproses.');

         } catch (\Exception $e) {
             // Rollback transaksi jika terjadi error
             DB::rollback();
             return redirect()->route('keranjang.index')->with('error', 'Terjadi kesalahan, pesanan gagal diproses.');
        }
    }



}