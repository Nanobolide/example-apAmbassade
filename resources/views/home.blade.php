
    @extends('layouts.app')
    @section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

          <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

          <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
              <div class="carousel-container">
                <div class="container">
                  <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Sailor</span></h2>
                  <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                  <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                </div>
              </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
              <div class="carousel-container">
                <div class="container">
                  <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
                  <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                  <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                </div>
              </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
              <div class="carousel-container">
                <div class="container">
                  <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
                  <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                  <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                </div>
              </div>
            </div>

          </div>

          <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
          </a>

          <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
          </a>

        </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6 ">

           <img src="assets/img/img1.jpg" alt="" width="100%" height="500px">
          </div>

          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequa</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</li>
            </ul>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
 
    <!-- ======= Services Section ======= -->
    <div>
      
    </div>






        <div class="container">
          <div class="row">
            
          </div>
        </div>
        
        <h2 class="text-center mb-5">Actualité</h2>
          <div class="container-fluid ">
              <div class="row ">
                @forelse($actualites as $actualite)
                
                  <div class="col-3 card-header">
                    <div class="icon-box card-body">
                    @if($actualite->image)

                    <img src="{{Storage::url($actualite->image)}}" width="90">
                        @else       
                      @endif</p>
                <p>{{$actualite->titre}}</p>
                  <p>{{$actualite->contenu}}</p>
                    </div>
                </div>
              @empty
              <td>Pas d'Actualité</td>
          @endforelse
                  
              </div>
          </div>








    <section id="services" class="services">
      
      
      <div class="container mb-5" >

        <div class="row">
          
          <section>
            <div class="container text-center">
              <h1 class="text-danger">Communiqués</h1>
            </div>
            <div class="row">
            @forelse($actualites as $actualite)
          
           <div class="col-md-6">
              <div class="icon-box">
                <i class="bi bi-brightness-high"></i>
                <h4><a href="#">{{$actualite->titre}}</a></h4>
                <p>{{$actualite->contenu}}</p>
              </div>
           </div>
          

          @empty
          <td>Pas d'Actualité</td>
      @endforelse
          </div>
          </section>


         
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-calendar4-week"></i>
              <h4><a href="#">Eiusmod Tempor</a></h4>
              <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
          </div>
          </div>
          
        </div>

      </div>
    </section><!-- End Services Section -->

    <hr>




    @endsection