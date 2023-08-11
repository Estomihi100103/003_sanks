@extends("template")
@section("main")

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="beranda">Beranda</a></li>
        <li>Ajukan Proposal</li>
      </ol>
      <h2>Ajukan Proposal</h2>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center">
            <h4>Ayo buat proposal MBKM mu sekarang!</h4>
            <p>Kini anda dapat mengajukan pendaftaran Program Merdeka Belajar - Kampus Merdeka dengan menyertakan id
              perusahaan dan id program dibawah ini.</p>
          </div>
          <div class="col-lg-6">
            {{-- <form action="buat-proposal" method="">
              <input type="text" name="program" style="width: 350px;"><input type="submit" value="Submit">
            </form> --}}


            <form action="{{ route('buat.proposal') }}" method="get">
              <label for="id">Masukkan ID:</label>
              <input type="text" name="id" required>
              <button type="submit">Submit</button>
          </form>
          </div>
        </div>
      </div>
    </div>
  </footer>

@endsection