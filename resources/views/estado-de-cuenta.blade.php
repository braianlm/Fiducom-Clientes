@extends('layouts.master')
@section('content')

    <div class="content-wrapper">

        {{-- Unidades --}}
        <div class="row">

            <div class="col-md-12" style="display:flex; flex-direction: row; align-items: baseline;">
                <div class="caja_unidad_departamento">

                    <div>
                        <p class="nombre_unidad bold">Park Bamboo</p>
                    </div>
                    <div class="dropdown" style="background-color: transparent !important">
                        <p class="d_inline_block" style="margin-right:10px; font-size:22px; color:#6c757d ">Unidad</p>
                        <button class="dropdown-toggle boton_unidades" type="button" id="menu1" data-toggle="dropdown">1-A
                        <span class="caret ml-15"></span></button>
                        <ul class="dropdown-menu" style="min-width: max-content">
                          <li><a href="#" class="items_submenu_unidades">1-B</a></li>
                          <li><a href="#" class="items_submenu_unidades">Ácido Desoxirribonucleico</a></li>
                        </ul>
                    </div>

                </div>

                <div class="barra_gris_horizontal">
                </div>

            </div>
        </div>

        {{-- Estado + deptos --}}
        <div class="row mb-20">

            <div class="col-md-9" style="float:left; height: 500px; width: 100%; background-color: white; border-radius:10px; box-shadow: 0px 0px 11px 0px rgba(0,0,0,0.15) !important;">
                <div class="">
                    <div>
                        <h3 class="card_pagos_titulo bold mb-0" style="padding: 1.25rem 1.25rem 0.75rem 1.25rem">Estado de Cuenta</h3>
                    </div>
                    <div class="contenido-estado-pago">
                        <p>Mauris urna nulla, venenatis auctor iaculis eget, ultrices id libero. Curabitur diam est, pulvinar a nunc nec, congue accumsan nulla. Sed scelerisque pharetra nibh. Cras imperdiet arcu vitae laoreet mattis. Phasellus rhoncus pulvinar mi a rhoncus. Nullam lectus purus, pharetra sit amet augue vel, feugiat vulputate sem. Nam sit amet ante odio. Mauris lobortis lectus a lorem aliquet, at scelerisque tellus gravida. Mauris bibendum erat id diam volutpat, varius sollicitudin augue finibus.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-2 cards-unidades-estadocuenta">
                <div class="card bg-gradient-orangee">
                    <h3>
                        5 5B
                    </h3>
                    <p>
                        DEPARTAMENTO
                    </p>
                </div>
                <div class="card bg-gradient-orangee">
                    <h3>
                        PB 14
                    </h3>
                    <p>
                        COCHERA
                    </p>
                </div>
                <div class="card bg-gradient-orangee">
                    <h3>
                        11 G 
                    </h3>
                    <p>
                        DEPARTAMENTO
                    </p>
                </div>
                <div class="card bg-gradient-orangee">
                    <h3>
                        1 C
                    </h3>
                    <p>
                        COCHERA
                    </p>
                </div>
                <div class="card bg-gradient-orangee">
                    <h3>
                        EG 67
                    </h3>
                    <p>
                        DEPARTAMENTO
                    </p>
                </div>
            </div>
           
            <div class="col-md-1"></div>
            
        </div>

        {{-- Solicitar --}}
        <div class="row">
            <div class="col-md-9 caja_solicitar_estadocuenta">
                
                    <div style="height: 50px; width: 50px; background-color:red; ">

                    </div>
                    <div>
                        <p><strong>¿Necesitas un estado de cuenta actualizado a la fecha?</strong></p>
                        <p>El botón enviará una notificación instantánea a la administración</p>
                    </div>
                    <div>
                        <a href="#">
                            <button class="btn-informar mt-0" id="IngresoLog" type="submit" >
                                Solicitar
                            </button>
                        </a>
                    </div>
              
            </div>

            <div class="col-md-1" style="float:right">
            </div>
        </div>

    </div>

@endsection