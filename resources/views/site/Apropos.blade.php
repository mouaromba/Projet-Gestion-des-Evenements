@extends('site.layouts.main')
@section('content')

<main id="main">
<!-- ======= About Section ======= -->
      <section id="about">
          <div class="container" data-aos="fade-up">
             <div class="row">
                    <h2>Apropos</h2>
                 <div class="col-lg-6">
                      <h3>Qui nous sommes</h3>
                         <p >La page À propos est la description de base de votre site Web.
                              Voici où vous permettez aux clients de savoir de quoi parle
                             votre site Web. Vous pouvez éditer tout ce texte et le remplacer
                              par ce que vous voulez écrire.</p>
                  </div>
      
                  <div class="col-lg-3">
                         <h3>A quand les meilleurs?</h3>
                         <p>Lundi - Mercredi<br>10-12 December2022</p>
                  </div>
                  <div class="col-lg-3">
                         <h3>Nous sommes les meilleurs du domaines</h3>
                         <p>Par tout dans le monde nous repondons à vos bésoins</p>
                  </div>
              </div>
          </div>
        </section><!-- End About Section -->


  <!-- ======= About Section ======= -->
      <section id="carousel">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/hotels/1.jpg" class="d-block w-100" style="height: 100vh;"alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/venue-gallery/6.jpg" class="d-block w-100" style="height: 100vh;" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>JALS vous souhaite le meilleur des événements.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/venue-gallery/1.jpg"  class="d-block w-100" style="height: 100vh;" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
          
      </section><!-- End About Section -->  

</main>
@endsection