@include('component.header')
@include('component.navbar')

<div class="container bg-greyB">
    <h1 class="f-putih text-center ff-libre pt pb">FORM TAMBAH BARANG</h1>
    <form method="post" action="{{ url('/tambahBarang') }}">
        @csrf
        <div class="mb-3">
          <input type="text" class="form-control" placeholder="Masukkan Nama Barang" name="namaBarang" required>
        </div>
    
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="Masukkan Satuan" name="satuan" required>
        </div>
    
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="Masukkan Harga" name="hargaSatuan" required>
        </div>
    
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="Masukkan Stok" name="stok" required>
        </div>
    
        <button type="submit" class="btn btn-primary text-center mb-2">Submit</button>
    </form>
</div>

@include('component.footer')