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

        {{-- Historial de pagos --}}
        <div class="row">
            <div class="col-md-11" style="float:left">
                <div class="card card_historial_pagos" style="padding:0 15px;">
    
                    {{-- Título --}}
                    <div class="titulo_ul_historial_pagos">
                        <h3 class="card_pagos_titulo bold mb-0" style="padding: 1.25rem 1.25rem 0.75rem 1.25rem">Historial de pagos</h3>

                        <div class="dropdown" style="background-color: transparent !important">
                            <p class="d_inline_block">Cuenta</p>
                            <button class="dropdown-toggle boton_unidades_historial_pagos" type="button" id="menu1" data-toggle="dropdown">Park-Bamboo
                            <span class="caret ml-15"></span></button>
                            <ul class="dropdown-menu" style="min-width: max-content">
                              <li><a href="#" class="items_submenu_unidades_historial_pagos">Palermo</a></li>
                              <li><a href="#" class="items_submenu_unidades_historial_pagos">Vte. López</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0 ta_c">
                        <div class="table-responsive mb-20">
        
                            <table class="table m-0 tabla_historial_pagos tabla_historial_pagos_vista_unica">
                                <thead>
                                    <tr>
                                        <th class="columnas_historial_pagos_vista_unica">Estado</th>
                                        <th class="columnas_historial_pagos_vista_unica">Fecha de pago</th>
                                        <th class="columnas_historial_pagos_vista_unica">Aviso de pago</th>
                                        <th class="columnas_historial_pagos_vista_unica">Unidad</th>
                                        <th class="columnas_historial_pagos_vista_unica">Forma de pago</th>
                                        <th class="columnas_historial_pagos_vista_unica">Monto</th>
                                        <th class="columnas_historial_pagos_vista_unica">Observación</th>
                                        <th></th>
                                    </tr>
                                </thead>
        
                                <tbody>
                                    <tr>
                                        <td><i class="far fa-check-circle" style="color: black;"></i></td>
                                        <td>20 Jul 2020</td>
                                        <td>04 Sep 2020</td>
                                        <td>1-C</td>
                                        <td>Efectivo</td>
                                        <td>
                                        $ 430.050,00
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><i class="far fa-check-circle" style="color: black;"></i></td>
                                        <td>06 Sep 2020</td>
                                        <td>15 Ene 2020</td>
                                        <td>3-B</td>
                                        <td>Tarjeta</td>
                                        <td>
                                        $ 27.000,00
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-times-circle" style="color: black;"></i></td>
                                        <td>17 Sep 2020</td>
                                        <td>20 May 2020</td>
                                        <td>4-H</td>
                                        <td>Cheque</td>
                                        <td>
                                        $ 128.800,00
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-times-circle" style="color: black;"></i></td>
                                        <td>24 Sep 2020</td>
                                        <td>28 Abr 2020</td>
                                        <td>2-G</td>
                                        <td>Efectivo</td>
                                        <td>
                                        $ 1.110.547,00
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
        
                        </div>
                    </div>
    
                </div>
            </div>
    
            <div class="col-md-1" style="float:right">
            </div>
        </div>

        {{-- Informar nuevo pago --}}
        <div class="row">
            <div class="col-md-11" style="float:left">
                <div class="card informar_nuevo_pago">
                    <div style="padding: 20px 25px 20px 25px;">
                        <h3 class="card_pagos_titulo mb-20 d-contents" >Informar pago nuevo</h3>
                    </div>
                    <div class="caja_informar_pago_historial">
                        <a href="/informar-pago">
                            <button class="btn-informar mt-0" id="IngresoLog" type="submit" >
                                Ingresar
                            </button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-1" style="float:right">
            </div>
        </div>

    </div>
@endsection