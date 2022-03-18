@extends('layouts.app')
    @section('content')

    <div class="container mb-5"></div><br><br>
    <div class="mb-5"></div>

        <div class="container">
          {{-- start --}}
          {{-- @foreach ($actualites as $actualite)
                <div class="col-md-4">
              <img   class="bd-placeholder-img card-img-top" width="10%" height="225" src="{{Storage::url($actualite->image)}}" width="80">
            </div> --}}
        

            <section id="services" class="services">


              <div class="container mb-5" >
        
                <div class="row">
        
                  <section>
                    <div class="container text-center">
                      <h1 class="text-danger">Actualité</h1>
                    </div>
                    <div class="row">
                    @forelse($actualites as $actualite)

                       <div  class="col-md-4"><img src="{{Storage::url($actualite->image)}}" width="90"></div>
                   <div class="col-md-8">
                      <div class="icon-box">
                        <i class="bi bi-exclamation-circle"></i>
                       
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
        

          
            
            
           
            
        
       
    @endsection