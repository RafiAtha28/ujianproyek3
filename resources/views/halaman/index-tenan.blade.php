@include('component.header')
@include('component.navbar')

<div class="container">
    <div class="col-md-1"></div>

    <div class="col-md-10">
        <table class="table ms-5">

            <thead class="table-dark">
              <th>Kode Tenan</th>
              <th>Nama</th>
              <th>HP</th>
            </thead>

            <tbody>
              <td>{{ \DB::table('tenan')->where('kodeTenan')->value('kodeTenan') ?: '' }}</td>
              <td>{{ \DB::table('tenan')->where('kodeTenan')->value('nama') ?: '' }}</td>
              <td>{{ \DB::table('tenan')->where('kodeTenan')->value('hp') ?: '' }}</td>
            </tbody>
          </table>
    </div>

    <div class="col-md-1"></div>
</div>
@include('component.footer')