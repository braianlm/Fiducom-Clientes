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

            <div class="col-md-9" style="float:left; background-color: white; border-radius:10px; box-shadow: 0px 0px 11px 0px rgba(0,0,0,0.15) !important;">
                <div class="col-md-6 caja_datos_bancarios">
                    <div>
                        <h3 class="card_pagos_titulo bold mb-15" style="padding: 1.25rem 1.25rem 0.75rem 1.25rem">Datos Bancarios</h3>
                    </div>
                    <div class="contenido-estado-pago">
                        <div class="sucursal_bancaria">
                            <img src="/img/Logo-BBVA.jpg" alt="BBVA" style="width: 130px">
                            <p><strong>Sucursal Martinez</strong></p>
                        </div>
                        <div class="datos_bancarios_vista mb-30 mt-30">
                            <p><strong>Titular Fideicomiso Maipú 3460</strong></p>
                            <p>Cuenta Corriente en $ <strong>347-310729/2</strong></p>
                            <p>CBU <strong>0170347220000031072920</strong></p>
                            <p>CUIT <strong>30-71653327-8</strong></p>
                        </div>
                        <div class="medios_pago_bancarios">
                            <p>Medios de pagos habilitados: Depósito o transferencia bancaria. Por favor notificar el pago efectuado: <strong><ins><a href="/informar-pago" style="color: #707070"> Informar nuevo pago</a></ins></strong></p>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="col-md-3"></div>
            
        </div>


    </div>

@endsection