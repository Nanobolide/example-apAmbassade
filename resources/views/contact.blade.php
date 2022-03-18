@extends('layouts.app')
    @section('content')
    <div>
        <br>
        <br>
        <br>
    </div>
    <div class="container mt-3 ">
        <form action="" method="post">
            <div class="mt-5"></div>

                     <hr>
                     <h4>Contactez-nous</h4>
                 <div>
                     <label for="">Nom</label>
                     <input type="text" name="" id="" class="form-control">
                 </div>
                 <div>
                     <label for="">Prénom</label>
                     <input type="text" name="" id="" class="form-control">
                 </div>
                 <div>
                     <label for="">Email</label>
                     <input type="text" name="" id="" class="form-control">
                 </div>
                 <div>
                     <label for="">Numero</label>
                     <input type="text" name="" id="" class="form-control">
                 </div>
                 <div>
                     <label for="">Sujet</label>
                     <input type="text" name="" id="" class="form-control">
                 </div>
                 <div>
                     <label for="">Message</label>
                     <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                 </div>
             
                 <div class="mt-3">
                     <input type="submit" class="btn btn-success">
                 </div>
             </div >
             <br><div class="mb-3"></div>
             
         
             
         </form>
    </div>

    @endsection