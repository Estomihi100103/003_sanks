@extends("template")

@section("main")

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="beranda-ds">Beranda</a></li>
                <li>Tinjau Proposal</li>
            </ol>
            <h2>Tinjau Proposal</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <main id="main">

      <div class="container mt-3 mb-3">
          <div>
              <p>Showing <strong>1</strong> of <strong>1</strong> items</p>
          </div>
      </div>

      <div class="container">
        <table class=" table table-striped">
          <thead class="table-light">
            <tr>
              <th>Tracking ID</th>
              <th>Nama Mahasiswa</th>
              <th>Jenis Kegiatan</th>
              <th>Nama Program</th>
              <th>Penyelenggara</th>
              <th>Tanggal Pengajuan</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>#621234</td>
              <td>Jaka Sembung</td>
              <td>Studi Independen</td>
              <td>Data Business & Analytics</td>
              <td>Ruangguru</td>
              <td>22/03/2023</td>
              <td><a href="map-asesor"><button class="btn btn-warning btn-sm">Diproses</button></a></td>
            </tr>
          </tbody>
        </table>
      </div>

    </main><!-- End #main -->

@endsection