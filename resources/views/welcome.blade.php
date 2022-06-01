@extends('layout')

@section('content')
<div class="container col-xxl-9 px-4 py-5">

    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="{{ asset('images\herodoc.svg') }}" class="d-block mx-lg-auto img-fluid" alt="labo image" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">LABOSMART</h1>
        <p class="lead">Notre laboratoire est organisé en plateaux techniques équipés de matériels à la pointe de la technologie pour garantir à nos patients les meilleurs délais de réalisations de leurs analyses dans des conditions de qualité optimale.</p>
      </div>
    </div>
  </div>
 
  <div class="container px-4 py-5" id="icon-grid">
    <h2 class="pb-2 border-bottom">Avantages</h2>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3" fill="#0275D8" width="1.75em" height="1.75em"><use xlink:href="#check"></use></svg>
        <div>
          <h4 class="fw-bold mb-0">CONFIDENTIALITÉ</h4>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3"fill="#0275D8" width="1.75em" height="1.75em"><use xlink:href="#check"></use></svg>
        <div>
          <h4 class="fw-bold mb-0">EFFICACITE</h4>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3"fill="#0275D8" width="1.75em" height="1.75em"><use xlink:href="#check"></use></svg>
        <div>
          <h4 class="fw-bold mb-0">EXPERTISE</h4>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3"fill="#0275D8" width="1.75em" height="1.75em"><use xlink:href="#check"></use></svg>
        <div>
          <h4 class="fw-bold mb-0">VOS RÉSULTATS EN LIGNE</h4>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3" fill="#0275D8"width="1.75em" height="1.75em"><use xlink:href="#check"></use></svg>
        <div>
          <h4 class="fw-bold mb-0">PRISE EN CHARGE AVEC OU SANS RENDEZ-VOUS</h4>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3" fill="#0275D8"width="1.75em" height="1.75em"><use xlink:href="#check"></use></svg>
        <div>
          <h4 class="fw-bold mb-0">Service de proximité</h4>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3"fill="#0275D8" width="1.75em" height="1.75em"><use xlink:href="#check"></use></svg>
        <div>
          <h4 class="fw-bold mb-0">Aménagement des salles optimisé</h4>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3"fill="#0275D8" width="1.75em" height="1.75em"><use xlink:href="#check"></use></svg>
        <div>
          <h4 class="fw-bold mb-0">Délai de résultat maitrisé</h4>
        </div>
      </div>
    </div>
  </div>

  <div class="container px-4 py-5" id="custom-cards">
    <h2 class="pb-2 border-bottom">Nos Tests</h2>

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-white bg-primary rounded-4 shadow-lg" >
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h4 >BACTÉRIOLOGIE</h4>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-white bg-primary rounded-4 shadow-lg">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h4 >PARASITOLOGIE</h4>
            
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-white bg-primary rounded-4 shadow-lg" >
          <div class="d-flex flex-column h-100 p-5 pb-3  text-white text-shadow-1">
            <h4 >HEMATOLOGIE</h4>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-white bg-primary rounded-4 shadow-lg" >
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h4 >SÉROLOGIE</h4>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-white bg-primary rounded-4 shadow-lg">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h4 >MICROBIOLOGIE</h4>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-white bg-primary rounded-4 shadow-lg" >
          <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
            <h4 >HÉMOSTASE</h4>
            
          </div>
        </div>
      </div>
      
    </div>
  </div>
@endsection
