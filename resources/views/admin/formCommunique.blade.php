@extends('admin.app')
@section('content')
    


          {{-- form --}}

            <h2 class="text-center">Ajouter Une Communiqué </h2>

            <form action="" method="post">

              <div class="container mt-5">
                    <label for=""><h3>Titre</h3></label>
                    <input type="text" name="titre" id="" class="form-control">
                    <br>
                    <div class="form-group">
                    <label for="exampleFormControlFile1"> <h3>Image</h3> </label><br>
                    <input type="file" class="form-control" name="image" id="exampleFormControlFile1">
                    </div>
                    <br>
                    <label for=""><h3>Contenu</h3> </label>
                    <textarea name="" id="" cols="30" rows="10" class="form-control" ></textarea>
                    <br>
                    <input type="submit" value="Créer" class="btn btn-primary ">
              </div>
              <br>
              
            </form>


            @endsection