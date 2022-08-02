@extends('site.layouts.main')
@section('content')

    <main id="main">

<!-- ======= Subscribe Section ======= -->
<section id="subscribe">
  <div class="container" data-aos="zoom-in">
    <div class="section-header">
      <h2>JALS </h2>
      <h2><marquee behavior="alternate" scrollamount="2" scrolldelay="10">
   !!! Vous souhaite la bienvenue sur notre site !!!
</marquee></h2>
    </div>

    <form method="POST" action="#">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-10 d-flex">
          <input type="text" class="form-control" placeholder="Enter your Email">
          <button type="submit" class="ms-2">Subscribe</button>
        </div>
      </div>
    </form>

  </div>
</section><!-- End Subscribe Section -->

</main><!-- End #main -->

@endsection