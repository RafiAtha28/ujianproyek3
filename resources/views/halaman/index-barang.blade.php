@include('component.header')
@include('component.navbar')

<div class="container">
    <div class="col-md-1"></div>

    <div class="col-md-10">
        <div class="text-center mt-3"><a href="{{ route('tambahBarang') }}"><button class="btn btn-primary">Tambah Barang</button></a></div>
        <table class="table ms-5 mt-1">

            <thead class="table-dark">
              <th>Kode Barang</th>
              <th>Nama Barang</th>
              <th>Satuan</th>
              <th>Harga Satuan</th>
              <th>Stok</th>
              <td>Aksi</td>
            </thead>

            <tbody>
              <td>{{ \DB::table('barang')->where('kodeBarang')->value('kodeBarang') ?: '' }}</td>
              <td>{{ \DB::table('barang')->where('kodeBarang')->value('NamaBarang') ?: '' }}</td>
              <td>{{ \DB::table('barang')->where('kodeBarang')->value('Satuan') ?: '' }}</td>
              <td>{{ \DB::table('barang')->where('kodeBarang')->value('hargaSatuan') ?: '' }}</td>
              <td>{{ \DB::table('barang')->where('kodeBarang')->value('stok') ?: '' }}</td>
              <td><button class="btn btn-success"><i class="bi bi-pencil-square"></i></button> | <button class="btn btn-danger"><i class="bi bi-trash3"></i></button></td>
            </tbody>
          </table>
    </div>

    <div class="col-md-1"></div>
</div>
@include('component.footer')