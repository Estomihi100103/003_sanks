@extends("template")

@section("main")

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">
      <h2>Beranda</h2>

    </div>
  </section><!-- End Breadcrumbs -->


  <main id="main">
    <section class="inner-page">
      <div class="container">
        <h1 style="text-align: center">Selamat datang, Margaret</h1>
        <p style="text-align: center">Di halaman ini, Anda dapat memberikan persetujuan pada proposal baru dan melihat riwayat proposal yang telah diberikan persetujuan.</p>
        <div style="display: flex; justify-content: center; gap: 40px; margin-top: 40px;">
          <a href="riwayat-proposal"><button type="button" class="btn btn-primary btn-lg">Lihat Riwayat Proposal</button></a>
          <a href="tinjau-proposal"><button type="button" class="btn btn-success btn-lg">Tinjau Proposal</button></a>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

@endsection