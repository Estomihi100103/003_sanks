@extends("template")
@section("main")

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="/">Beranda</a></li>
        <li><a href="pengajuan-proposal">Ajukan Proposal</a></li>
        <li>Buat Proposal</li>
      </ol>
      <h2>Buat Proposal</h2>

    </div>
  </section><!-- End Breadcrumbs -->

  <main id="main">
    <section class="inner-page">
      <div class="container">
        <h1 style="text-align: center">Proposal MBKM Anda telah berhasil diajukan!</h1>
        <p style="text-align: center">Mohon bersabar sementara proposal Anda sedang diproses. Terima kasih!</p>
        <div style="display: flex; justify-content: center; gap: 40px; margin-top: 40px;">
          <a href="status-proposal"><button type="button" class="btn btn-primary btn-lg">Lihat Status Proposal</button></a>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

@endsection