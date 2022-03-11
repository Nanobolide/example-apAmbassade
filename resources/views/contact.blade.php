@extends('layouts.app')
    @section('content')
    <div>
        <br>
        <br>
        <br>
    </div>
    <div class="col-10 ">
        <form action="" method="post">
            <div class="mt-5"></div>
                 <div class="container m-5"><br>
                     <br>
                     <div class="container">
                             <h3>Comment venir</h3>
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1574.971304123236!2d-4.004878165579483!3d5.340199874702303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1eb75944e229b%3A0x57b1442f2041f069!2sFoyer%20des%20Jeunes%20Travailleuse!5e0!3m2!1sfr!2sci!4v1645709276521!5m2!1sfr!2sci" class="form-control" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                     </div>
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