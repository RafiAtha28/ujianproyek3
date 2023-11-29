@include('component.header')
@include('component.navbar')

<div class="container bg-cream">
    <div class="col-md-1"></div>

    <div class="col-md-10">
        <table class="table ms-5">

            <thead class="table-dark">
              <th>Kode Kasir</th>
              <th>Nama</th>
              <th>HP</th>
            </thead>

            <tbody>
              <td>{{ \DB::table('kasir')->where('kodeKasir')->value('kodeKasir') ?: '' }}</td>
              <td>{{ \DB::table('kasir')->where('kodeKasir')->value('nama') ?: '' }}</td>
              <td>{{ \DB::table('kasir')->where('kodeKasir')->value('hp') ?: '' }}</td>
            </tbody>
          </table>
    </div>

    <div class="col-md-1"></div>
</div>
@include('component.footer')