@extends('admin.app')
@section('content')
    

        {{-- End Navbar --}}

        <div class="container  mt-5 ">
            <div>
                
                <table class="table table-striped table-inverse table-responsive">
                    <thead class="thead-inverse">
                        <tr>
                            <th>Image</th>
                            <th>Titre</th>
                            <th>Contenu</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                            @forelse($actualites as $actualite)
                                
                            
                            <tr>
                                <td scope="row">
                                                            
                                        @if($actualite->image)
                                   
    
                                        <img src="{{Storage::url($actualite->image)}}" width="80">


                                        {{-- <img src="{{asset('storage/image'. $actualite->image)}}" alt="" width="80"> --}}
                                            @else
                                                
                                    @endif
                                </td>
                                <td>{{$actualite->titre}}</td>
                                <td>{{$actualite->contenu}}</td>
                                <td>
                                    <a href="{{route('edit.actualite',$actualite->id)}}">
                                        <button class="btn btn-warning">Modifier</button>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{route('destroy.actualite',$actualite->id)}}" method="POST">@csrf
                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
    
                            @empty
                                <td>Pas d'Actualité</td>
                            @endforelse
                        </tbody>
                </table>
                    
            </div>
        </div>

@endsection