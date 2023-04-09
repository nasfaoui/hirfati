@extends('layouts.app')

@section('content')
    <div class="container p mt-2">
<form action="" method="post">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button"
                    role="tab" aria-controls="nav-home" aria-selected="true"><i class="fas fa-cog"></i>
                    Parametre</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                    type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><i
                        class="fas fa-bullhorn"></i> Mes Annonces</button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active  " id="nav-home" role="tabpanel"
                aria-labelledby="nav-home-tab">
               <div class="d-flex flex-column align-items-center justify-content-center">
                 <div class="d-flex justify-content-around flex-wrap">
                     <div class="tab-child m-3">
                         <h4>Modifier Informations</h4>
                         <label for="">Nom d'utilisateur</label>
                         <input type="text" placeholder="&#xf007   taper votre nom">
                         <label for="">Email</label>
                         <input type="text" placeholder="&#xf0e0   taper votre Email">
                         <label for="">ville</label>
                         <input type="text" placeholder="&#xf3c5   taper votre ville">
                     </div>
                     <div class="tab-child m-3">
                         <h4>Modifier Mot de passe</h4>
                         <label for="">Mot de passe</label>
                         <input type="text" placeholder="&#xf084  taper votre Mot de passe">
                         <label for="">Neveau mot de passe</label>
                         <input type="text" placeholder="&#xf084">
                         <label for="">confermer mot de passe</label>
                         <input type="text" placeholder="&#xf084">
                     </div>
                 </div>
                 <div> <button class="btn-p" type="submit">SAVEGARDER</button></div>
                
               </div>
            </div>
            <div class="tab-pane fade mt-5  d-flex flex-row justify-content-between  align-items-center rounded " style="border-bottom: 2px solid var(--gray);border-right: 2px solid var(--gray); width: 50rem;" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="d-flex flex-row">
                    <img style="width: 100px ; border-radius: 5px; height: 100px; border: 1px solid black;" src="" alt="" srcset="">
                    <div class="m-3">
                        <h6>title product</h6>
                        <h6>(10)</h6>
                        <h6 style="color: var(--blue)">A partir de : xxxx $</h6>
                    </div>
                </div>
                <div class="p-2">
                    <button type="button" class="btn btn-danger">Danger</button>
                    <button type="button" class="btn btn-success">Success</button>

                </div>
            </div>
        </div>
    </form>
    </div>
@endsection
