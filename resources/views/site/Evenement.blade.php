@extends('site.layouts.main')
@section('content')

<main id="main">
<!-- ======= Speakers Section ======= -->
<section id="speakers">


  <!-- ======= About Section ======= -->
  <section id="carousel">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/speakers/1.jpg" class="d-block w-100" style="height: 100vh;"alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/speakers/2.jpg" class="d-block w-100" style="height: 100vh;" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>JALS vous souhaite le meilleur des événements.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/speakers/3.jpg"  class="d-block w-100" style="height: 100vh;" alt="...">
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
          
<div class="container m-3" data-aos="fade-up">
    <div class="row">
      <div class="col-lg-6 col-md-6">
      <p>Les mœurs et l'état de tout le corps de la nation ont changé d'âge en âge […] 
        Il est cent fois plus important d'observer 
        ce changement de la nation entière, que de rapporter simplement des faits particuliers.
        Parler de l'enfance privilégiée de Marcel Proust ne serait pas exact. Il vaut mieux dire
         enfance protégée, s'il est vrai que Proust vit ses premières années s'écouler dans un
          univers ouaté grâce à la tendresse vigilante d'une mère adorée. Jeanne Weil appartenait à 
          une famille juive, d'origine lorraine et de solide fortune : délicate et cultivée, elle 
          entoura de son immense affection ses deux fils, Marcel et Robert. On sait avec quelle impatience,
           avec quelle angoisse Marcel attendait le soir le baiser maternel. Cette sensibilité presque
            maladive le trahira toujours.
        <p>
      </div>
      <div class="col-lg-6 col-md-6 ">
        <div class="speaker" data-aos="fade-up" data-aos-delay="200">
            <p>Raconter les événements, c'est faire connaître l'opéra par le livret seulement ; 
              mais si j'écrivais un roman je tâcherais de différencier les musiques successives des jours
              Son père, le professeur Adrien Proust, médecin réputé,
             était un homme froid mais bon, désarmé par ce fils aîné à la santé fragile, qui, 
             à l'âge de neuf ans, a sa première crise d'asthme.Les années d'enfance se passent dans
              quatre décors familiers aux lecteurs d'À la recherche du temps perdu. Le premier décor 
              est la maison bourgeoise du boulevard Malesherbes ainsi que les jardins des Champs-Élysées,
               où, chaque après-midi, l'on conduit Marcel. Le deuxième est Illiers, où la famille Proust va 
               en vacances et qui deviendra Combray. Le troisième est la demeure de l'oncle Louis Weil à Auteuil,
                chez qui l'on se rend par les jours de chaleur. Le quatrième est Trouville ou Dieppe,
                 plus tard Cabourg, les belles plages d'où naîtra Balbec.</p>
        </div>
    </div> 
</div>
      

  <div class="container" data-aos="fade-up">
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
          <img src="assets/img/speakers/1.jpg" alt="Speaker 1" class="img-fluid">
          <div class="details">
            <h3><a href="speaker-details.html">Brenden Legros</a></h3>
            <p>Quas alias incidunt</p>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="speaker" data-aos="fade-up" data-aos-delay="200">
          <img src="assets/img/speakers/2.jpg" alt="Speaker 2" class="img-fluid">
          <div class="details">
            <h3><a href="speaker-details.html">Hubert Hirthe</a></h3>
            <p>Consequuntur odio aut</p>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="speaker" data-aos="fade-up" data-aos-delay="300">
          <img src="assets/img/speakers/3.jpg" alt="Speaker 3" class="img-fluid">
          <div class="details">
            <h3><a href="speaker-details.html">Cole Emmerich</a></h3>
            <p>Fugiat laborum et</p>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
          <img src="assets/img/speakers/4.jpg" alt="Speaker 4" class="img-fluid">
          <div class="details">
            <h3><a href="speaker-details.html">Jack Christiansen</a></h3>
            <p>Debitis iure vero</p>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="speaker" data-aos="fade-up" data-aos-delay="200">
          <img src="assets/img/speakers/5.jpg" alt="Speaker 5" class="img-fluid">
          <div class="details">
            <h3><a href="speaker-details.html">Alejandrin Littel</a></h3>
            <p>Qui molestiae natus</p>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="speaker" data-aos="fade-up" data-aos-delay="300">
          <img src="assets/img/speakers/6.jpg" alt="Speaker 6" class="img-fluid">
          <div class="details">
            <h3><a href="speaker-details.html">Willow Trantow</a></h3>
            <p>Non autem dicta</p>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section><!-- End Speakers Section -->

<!-- ======= Venue Section ======= -->
<section id="venue">

  <div class="container-fluid" data-aos="fade-up">

    <div class="section-header">
      <h2>Event Venue</h2>
      <p>Event venue location info and gallery</p>
    </div>

    <div class="row g-0">
      <div class="col-lg-6 venue-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <div class="col-lg-6 venue-info">
        <div class="row justify-content-center">
          <div class="col-11 col-lg-8 position-relative">
            <h3>Downtown Conference Center, New York</h3>
            <p>Iste nobis eum sapiente sunt enim dolores labore accusantium autem. Cumque beatae ipsam. Est quae sit qui voluptatem corporis velit. Qui maxime accusamus possimus. Consequatur sequi et ea suscipit enim nesciunt quia velit.</p>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="container-fluid venue-gallery-container" data-aos="fade-up" data-aos-delay="100">
    <div class="row g-0">

      <div class="col-lg-3 col-md-4">
        <div class="venue-gallery">
          <a href="assets/img/venue-gallery/1.jpg" class="glightbox" data-gall="venue-gallery">
            <img src="assets/img/venue-gallery/1.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="venue-gallery">
          <a href="assets/img/venue-gallery/2.jpg" class="glightbox" data-gall="venue-gallery">
            <img src="assets/img/venue-gallery/2.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="venue-gallery">
          <a href="assets/img/venue-gallery/3.jpg" class="glightbox" data-gall="venue-gallery">
            <img src="assets/img/venue-gallery/3.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="venue-gallery">
          <a href="assets/img/venue-gallery/4.jpg" class="glightbox" data-gall="venue-gallery">
            <img src="assets/img/venue-gallery/4.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="venue-gallery">
          <a href="assets/img/venue-gallery/5.jpg" class="glightbox" data-gall="venue-gallery">
            <img src="assets/img/venue-gallery/5.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="venue-gallery">
          <a href="assets/img/venue-gallery/6.jpg" class="glightbox" data-gall="venue-gallery">
            <img src="assets/img/venue-gallery/6.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="venue-gallery">
          <a href="assets/img/venue-gallery/7.jpg" class="glightbox" data-gall="venue-gallery">
            <img src="assets/img/venue-gallery/7.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="venue-gallery">
          <a href="assets/img/venue-gallery/8.jpg" class="glightbox" data-gall="venue-gallery">
            <img src="assets/img/venue-gallery/8.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>

    </div>
  </div>

</section><!-- End Venue Section -->

<!-- ======= Hotels Section ======= -->
<section id="hotels" class="section-with-bg">

  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <h2>Hotels</h2>
      <p>Her are some nearby hotels</p>
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">

      <div class="col-lg-4 col-md-6">
        <div class="hotel">
          <div class="hotel-img">
            <img src="assets/img/hotels/1.jpg" alt="Hotel 1" class="img-fluid">
          </div>
          <h3><a href="#">Hotel 1</a></h3>
          <div class="stars">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
          </div>
          <p>0.4 Mile from the Venue</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="hotel">
          <div class="hotel-img">
            <img src="assets/img/hotels/2.jpg" alt="Hotel 2" class="img-fluid">
          </div>
          <h3><a href="#">Hotel 2</a></h3>
          <div class="stars">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill-half-full"></i>
          </div>
          <p>0.5 Mile from the Venue</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="hotel">
          <div class="hotel-img">
            <img src="assets/img/hotels/3.jpg" alt="Hotel 3" class="img-fluid">
          </div>
          <h3><a href="#">Hotel 3</a></h3>
          <div class="stars">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
          </div>
          <p>0.6 Mile from the Venue</p>
        </div>
      </div>

    </div>
  </div>

</section><!-- End Hotels Section -->


</main>
@endsection