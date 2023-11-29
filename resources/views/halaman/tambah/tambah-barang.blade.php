@include('component.header')
@include('component.navbar')

<div class="container bg-greyB">
    <h1 class="f-putih text-center ff-libre pt pb">FORM TAMBAH BARANG</h1>
    <form>
        <div class="mb-3">
          <input type="text" class="form-control" placeholder="Masukkan Nama Barang">
        </div>
    
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="Masukkan Satuan">
        </div>
    
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="Masukkan Harga">
        </div>
    
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="Masukkan Stok">
        </div>
    
        <button type="submit" class="btn btn-primary text-center mb-2">Submit</button>
    </form>
</div>

@include('component.footer')