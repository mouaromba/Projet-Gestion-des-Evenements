@extends('site.layouts.main')
@section('content')

<main id="main">

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
           avec quelle angoisse Marcel attendait le soir le baiser maternel. 
        <p>
      </div>
      <div class="col-lg-6 col-md-3 ">
        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
        <img src="assets/img/speakers/3.jpg" class="d-block w-100" style="height: 50vh; alt="BrendenLegros">
        </div>
    </div> 
</div>

<section id="contact" class="section-bg">

<div class="container" data-aos="fade-up">

  <div class="section-header">
    <h2>Contact Us</h2>
    <p>Veuillez nous contacter en remplissant le formulaire.</p>
  </div>

  <div class="row contact-info">

    <div class="col-md-4">
      <div class="contact-address">
        <i class="bi bi-geo-alt"></i>
        <h3>Address</h3>
        <address>A108 Adam Street, NY 535022, USA</address>
      </div>
    </div>

    <div class="col-md-4">
      <div class="contact-phone">
        <i class="bi bi-phone"></i>
        <h3>Phone Number</h3>
        <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="contact-email">
        <i class="bi bi-envelope"></i>
        <h3>Email</h3>
        <p><a href="mailto:info@example.com">info@example.com</a></p>
      </div>
    </div>

  </div>

  <div class="form">
    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
      <div class="row">
        <div class="form-group col-md-6">
          <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
        </div>
        <div class="form-group col-md-6 mt-3 mt-md-0">
          <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
        </div>
      </div>
      <div class="form-group mt-3">
        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
      </div>
      <div class="form-group mt-3">
        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
      </div>
      <div class="my-3">
        <div class="loading">Loading</div>
        <div class="error-message"></div>
        <div class="sent-message">Your message has been sent. Thank you!</div>
      </div>
      <div class="text-center"><button type="submit">Send Message</button></div>
    </form>
  </div>

</div>
</section><!-- End Contact Section -->
</main>
@endsection