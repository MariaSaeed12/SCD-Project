@extends('frontend.layout1.main')

@section('main-container')


<style>
  /* Custom styling for health tips */
  .tip-card {
      transition: transform 0.3s ease;
      cursor: pointer;
  }
  .tip-card:hover {
      transform: scale(1.05);
  }
  .tip-icon {
      font-size: 3rem;
      color: #007bff;
  }
</style>

<body>



  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('images/Untitled design (5).png') }}" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block" style="color: black;" >
          <h2><b>A Healthier Tomorrow, Starting Today  </b></h2>
          <p>Nurturing Health, Inspiring Joy</p>
          <a class="btn" href="#healthTips" style="background-color:#91255b; color: white;">Health Tips</a>
          <a class="btn" href="#Testimonials" style="background-color:#91255b; color: white;">Testimonials</a>
          <a class="btn" href="#articles" style="background-color: #91255b; color: white;">Articles</a>

        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/Untitled design (3).png') }}" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block" style="color: black;">
          <h2> <b>Helping Little Ones Thrive, from Day One</b></h2>
          <p>Nurturing Health, Inspiring Joy</p>
          <a class="btn" href="#healthTips" style="background-color:#91255b; color: white;">Health Tips</a>
          <a class="btn" href="#Testimonials" style="background-color:#91255b; color: white;">Testimonials</a>
          <a class="btn" href="#articles" style="background-color: #91255b; color: white;">Articles</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/Untitled design (4).png') }}" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block" style="color: black;">
          <h2> <b>Where Every Little Heart Matters</b></h2>
          <p>Nurturing Health, Inspiring Joy</p>
          <a class="btn" href="#healthTips" style="background-color:#91255b; color: white;">Health Tips</a>
          <a class="btn" href="#Testimonials" style="background-color:#91255b; color: white;">Testimonials</a>
          <a class="btn" href="#articles" style="background-color: #91255b; color: white;">Articles</a>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<div class="container my-5">
  <h2 class="text-center mb-4">Health Tips for Parents</h2>
  <div id="healthTips" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
          <!-- Tip 1 -->
          <div class="carousel-item active">
              <div class="card tip-card p-4 shadow-sm">
                  <div class="text-center">
                      <i class="tip-icon fas fa-apple-alt"></i>
                  </div>
                  <h5 class="card-title text-center mt-3">Nutrition Tip</h5>
                  <p class="card-text text-center">Ensure your child has a balanced diet including fruits, vegetables, and proteins. This supports growth and boosts immunity.</p>
              </div>
          </div>
          <!-- Tip 2 -->
          <div class="carousel-item">
              <div class="card tip-card p-4 shadow-sm">
                  <div class="text-center">
                      <i class="tip-icon fas fa-bed"></i>
                  </div>
                  <h5 class="card-title text-center mt-3">Sleep Advice</h5>
                  <p class="card-text text-center">Establish a bedtime routine to help your child get quality sleep, essential for development and focus during the day.</p>
              </div>
          </div>
          <!-- Tip 3 -->
          <div class="carousel-item">
              <div class="card tip-card p-4 shadow-sm">
                  <div class="text-center">
                      <i class="tip-icon fas fa-smile"></i>
                  </div>
                  <h5 class="card-title text-center mt-3">Mental Wellness</h5>
                  <p class="card-text text-center">Encourage open communication with your child. Create a safe space where they feel heard and supported.</p>
              </div>
          </div>
      </div>



  <div class="container mt-5">
    <div id="Testimonials" class="section">
      <h2 style="text-align: center;"> <b>Testimonials</b></h2>
      <div class="row"> <!-- Added Bootstrap row class -->
            <div class="col-md-4"> <!-- Use columns for responsive layout -->
                <div class="card mb-4">
                    <img src="{{ asset('images/Career.jpeg') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Sarah M. </h5>
                        <p class="card-text">"As a first-time mom, I was overwhelmed with information about my baby’s health. LittleHeartsHealth has been my go-to resource! The articles are easy to understand, and the expert advice has given me the confidence I need to make informed decisions for my daughter."</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4"> <!-- Repeat for the second card -->
                <div class="card mb-4">
                    <img src="{{ asset('images/download.jpeg') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Dr. Angela Smith,Family Medicine</h5>
                        <p class="card-text">"This website is an excellent platform for parents seeking trustworthy health information. The resources are well-researched, and I appreciate how they address common concerns that families face."</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4"> <!-- Repeat for the third card -->
                <div class="card mb-4">
                    <img src="{{ asset('images/Portfolio - S72 Business Portraits San Francisco.jpeg') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">James R. </h5>
                        <p class="card-text">"I love how comprehensive the resources are on this site. The tips on nutrition and developmental milestones have been invaluable as my son grows. It feels great knowing I'm not alone on this parenting journey!"</p>
                    </div>
                </div>
            </div>
        </div> <!-- End of row -->
    </div>
</div>

<section id="articles">
  <h2 style="text-align: center;"> <b>Latest Articles</b></h2>
  <div class="article">
      <h3><a href="https://www.medicinenet.com/childrens_health/article.htm#introduction_to_childrens_health">Children's Health</a></h3>
      <p>Children's health, or pediatrics, focuses on the well-being of children from conception through adolescence. It is vitally concerned with all aspects of children's growth and development and with the unique opportunity that each child has to achieve their full potential as a healthy adult.</p>
      <a href="https://www.medicinenet.com/childrens_health/article.htm#introduction_to_childrens_health" class="read-more">Read More</a>
  </div>

  <div class="article">
      <h3><a href="https://health.ucdavis.edu/blog/cultivating-health/strep-throat-how-long-its-contagious-symptoms-and-recovery/2024/01">Strep throat: How long it's contagious, symptoms and recovery</a></h3>
      <p>Strep throat is caused by a bacteria (Streptococcus pyogenes). It's more common in children than adults, but people who are in contact with kids a lot are at increased risk.</p>
      <a href="https://health.ucdavis.edu/blog/cultivating-health/strep-throat-how-long-its-contagious-symptoms-and-recovery/2024/01" class="read-more">Read More</a>
  </div>

  <div class="article">
      <h3><a href="https://health.ucdavis.edu/blog/cultivating-health/4-tips-for-preventing-food-allergies-at-school/2023/08">4 tips for preventing food allergies at school</a></h3>
      <p>Most parents send their children off to begin a new school year with excitement. But parents of children with severe food allergies often have real fear. They often wonder: Will their children accidentally eat the food they're allergic to?</p>
      <a href="https://health.ucdavis.edu/blog/cultivating-health/4-tips-for-preventing-food-allergies-at-school/2023/08" class="read-more">Read More</a>
  </div>
</section>



@endsection



