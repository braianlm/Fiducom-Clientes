@extends('layouts.master')
@section('content')

    <div class="content-wrapper">

            {{-- Bienvenido --}}
            <div class="row">
                <div class="col-md-12" style="display:flex; flex-direction: row; align-items: baseline;">
    
                    <div class="caja_unidad_departamento">
                        <div>
                            <p class="nombre_unidad_bienvenida bold"> Bienvenida </p>
                        </div>
                    </div>
    
                    <div class="barra_gris_horizontal">
                    </div>
    
                </div>
            </div>

            {{-- Obras disponibles --}}
            <div class="row">
                <div class="col-md-12">
                    <p style="color: #707070; font-family: 'Lato', sans-serif; font-size: 18px; ">Estas son las obras disponibles. ¿Cuál deseas ingresar?</p>
                </div>
            </div>

            {{-- Cards --}}
            <div id="cards_bienvenida" class="row">
                <div class="col-sm-4">
                    <a href="#" style="text-decoration: none; color: white; ">
                        <div class="card card-outline card_home ">
                            <h2>Park Bamboo</h2>
                            <img src="/img/edificios/01-Monroe-4644-COMPLETO.jpg" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="#" style="text-decoration: none; color: white; ">
                        <div class="card card-outline card_home ">
                            <h2>Park Bamboo</h2>
                            <img src="/img/edificios/02.jpg" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="#" style="text-decoration: none; color: white; ">
                        <div class="card card-outline card_home ">
                            <h2>Park Bamboo</h2>
                            <img src="/img/edificios/anchorena.jpg" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="#" style="text-decoration: none; color: white; ">
                        <div class="card card-outline card_home ">
                            <h2>Park Bamboo</h2>
                            <img src="/img/edificios/Bouchard-1-editada.jpg" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="#" style="text-decoration: none; color: white; ">
                        <div class="card card-outline card_home ">
                            <h2>Park Bamboo</h2>
                            <img src="/img/edificios/Club-Bamboo-1-editada.jpg" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="#" style="text-decoration: none; color: white; ">
                        <div class="card card-outline card_home ">
                            <h2>Park Bamboo</h2>
                            <img src="/img/edificios/Cordoba-2-editada.jpg" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="#" style="text-decoration: none; color: white; ">
                        <div class="card card-outline card_home ">
                            <h2>Park Bamboo</h2>
                            <img src="/img/edificios/lib13200.jpg" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="#" style="text-decoration: none; color: white; ">
                        <div class="card card-outline card_home ">
                            <h2>Park Bamboo</h2>
                            <img src="/img/edificios/Libertador-2-1-editada.jpg" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="#" style="text-decoration: none; color: white; ">
                        <div class="card card-outline card_home ">
                            <h2>Park Bamboo</h2>
                            <img src="/img/edificios/rawson.jpg" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="#" style="text-decoration: none; color: white; ">
                        <div class="card card-outline card_home ">
                            <h2>Park Bamboo</h2>
                            <img src="/img/edificios/Render-Washington-02.jpg" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="#" style="text-decoration: none; color: white; ">
                        <div class="card card-outline card_home ">
                            <h2>Park Bamboo</h2>
                            <img src="/img/edificios/Saenz-Pena-01.jpg" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="#" style="text-decoration: none; color: white; ">
                        <div class="card card-outline card_home ">
                            <h2>Park Bamboo</h2>
                            <img src="/img/edificios/Tres-de-Febrero-01.jpg" alt="">
                        </div>
                    </a>
                </div>

            </div>

    </div>

@endsection