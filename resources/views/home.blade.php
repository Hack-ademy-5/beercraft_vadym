@extends('plantilla')
@section('content')
  <h1>Home</h1>



</head>

<body>

  <!-- Background Home -->

  <div class="container my-5 py-5">
    <div class="row align-items-center">
      <div class="col-12 col-md-6">
        <h1 class="display-2 fw-bold text-gradient">Portal de cervecerias</h1>
        <h2 class="text-muted">Elige la mejor cerveceria de Barcelona</h2>
        <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, 
        sint fugit! In quia obcaecati temporibus exercitation
        </p>
        <button class="btn-head px-4 py-2">para buscar</button>
      </div>
     
    </div>
  </div>

  <!--Container tarjeta de crédito  -->

  <div class="container m-5 p-5 h-100">
    <div class="row">
      <div class="col-12 col-md-6">
        <h3 class="text-gradient">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid voluptatem qui vero exercitationem, natus neque dolor culpa vel ab quam nulla unde repudiandae, distinctio illo nostrum ipsa quas maiores iusto./h3>
        <p class="small text-muted mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum saepe recusandae reprehenderit ducimus ipsa
          aliquid illum, expedita harum, eaque distinctio amet autem! Corporis minima quis illo, veritatis sit officiis
          pariatur.</p>
      </div>
      <div class="col-12 col-md-6 text-center">
        <img class="tarjetacredito d-block mx-auto" src="/imagenes/cerveceria.jpg"
          alt="Imagen de una tarjeta">
      </div>
    </div>
  </div>

  <!-- Container categories -->

  
  <div class="container my-5 py-5">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="text-gradient fw-bold">Categorias del Portal</h2>
        </div>
      </div> 
      <div class="row mt-4 justify-content-around">
          
      </div>
  </div>

  
  <div class="container my-5 py-5">
      <div class="row">
          <div class="col-12">
            <div class="swiper-container mySwiper">
              <div id="categoryWrapper" class="swiper-wrapper">
                <div class="swiper-slide">

                </div>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
              <!-- <div class="swiper-pagination"></div> -->
            </div> 
          </div>
      </div>
  </div>

@endsection


