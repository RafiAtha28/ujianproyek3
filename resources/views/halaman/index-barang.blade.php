@include('component.header')
@include('component.navbar')

<div class="container bg-cream">
    <div class="col-md-1"></div>

    <div class="col-md-10">
        <div class="text-center"><button class="btn btn-primary">Tambah Barang</button></div>
        <table class="table ms-5 mt-4">

            <thead class="table-dark">
              <th>Kode Barang</th>
              <th>Nama Barang</th>
              <th>Satuan</th>
              <th>Harga Satuan</th>
              <th>Stok</th>
            </thead>

            <tbody>
              <td>{{ \DB::table('barang')->where('kodeBarang')->value('kodeBarang') ?: '' }}</td>
              <td>{{ \DB::table('barang')->where('kodeBarang')->value('NamaBarang') ?: '' }}</td>
              <td>{{ \DB::table('barang')->where('kodeBarang')->value('Satuan') ?: '' }}</td>
              <td>{{ \DB::table('barang')->where('kodeBarang')->value('hargaSatuan') ?: '' }}</td>
              <td>{{ \DB::table('barang')->where('kodeBarang')->value('stok') ?: '' }}</td>
            </tbody>
          </table>
    </div>

    <div class="col-md-1"></div>
</div>
@include('component.footer')