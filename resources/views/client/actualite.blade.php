@extends('layouts.app')
    @section('content')

        <div class="container">
            @foreach ($actualites as $actualite)
                
            
            
            
            <div class="col"><p>                      
                {{-- @if($actualite->image)

                <img src="{{Storage::url($actualite->image)}}" width="80">
                    @else
                        
            @endif</p> --}}
          <div class="card shadow-sm mt-5">
            <img   class="bd-placeholder-img card-img-top" width="10%" height="225" src="{{Storage::url($actualite->image)}}" width="80">
            {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="{{Storage::url($actualite->image)}}"  role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/>
                <text x="50%" y="50%" fill="#eceeef" dy=".3em">{{Storage::url($actualite->image)}}</text>
            </svg> --}}

            <div class="card-body">
              <p class="card-text">{{$actualite->titre}}</p>
              <p>{{$actualite->contenu}}</p>

              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
            
        @endforeach
        </div>
    @endsection