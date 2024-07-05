@extends('layouts.app')

@section('contenido_js')
@endsection

@section('contenido_cSS')
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }} ">

<!-- Custom CSS -->
<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }} ">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/responsive.css') }} ">
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

<style>
    .fixed-size-card {
        width: 275px; /* Ajusta el ancho según tus necesidades */
        height: 450px; /* Ajusta la altura según tus necesidades */
        display: flex;
        flex-direction: column;
        justify-content: space-between; /* Distribuye el espacio entre los elementos de la tarjeta */
        border: 1px solid #ddd; /* Añade un borde para que se vea mejor */
        margin: 10px; /* Espacio alrededor de cada tarjeta */
        padding: 10px; /* Añade un poco de padding para que el contenido no esté pegado a los bordes */
        box-sizing: border-box;
    }
    .product-upper {
        height: 150px;
        overflow: hidden;
    }
    .product-upper img {
        height: 100%;
        width: 100%;
        object-fit: cover; /* Asegura que la imagen cubra todo el área disponible sin distorsionarse */
    }
    .content-container {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .description-service {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
@endsection

@section('content')
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Retos</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="single-product-area">
    <div class="container">
        <div class="row">
            @foreach($changeAllOcc as $service)
            <div class="col-md-3 col-sm-6">
                <div class="single-shop-product fixed-size-card">
                    <div class="product-upper">
                        @if($service->imagen!=null)
                        <img src="{{ $service->imagen }}" alt="Servicio">
                        @else
                        <img src="img/product-6.jpg" alt="Servicio">
                        @endif
                    </div>
                    <div class="content-container">
                        <h2>
                            <a href="{{ route('showProfileServiceRetos',$service->id) }}" style="color:LimeGreen;">
                                {{ $service->IntermediateChange->cha_name }}
                            </a>
                        </h2>
                        <div class="product-carousel-price">
                            <a href="{{ route('perfil',$service->use_id) }}" style="color:LimeGreen;">
                                {{ $service->IntermediateUseOcc->name }}
                            </a>
                        </div>
                        <div class="product-carousel-price description-service">
                            {{ $service->descripcion }}
                        </div>
                        <div class="product-carousel-price">
                            <ins style="color:LimeGreen;">${{ $service->precio_actual }} de ${{ $service->precio }} contribuido</ins>
                        </div>
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="{{ route('showProfileServiceRetos',$service->id) }}" style="background-color: LimeGreen;">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
@endsection

@section('contenido_abajo_js')
<script>
</script>
@endsection
