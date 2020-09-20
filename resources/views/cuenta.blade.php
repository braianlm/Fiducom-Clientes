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

        {{-- Pagos + Historial --}}
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6" style="float:left">
                    <div class="card ultimo_pago bg-success">
                        <div>
                            <h3 class="card_pagos_titulo">Último pago acreditado</h3>
                        </div>
                        <div>
                            <p class="card_pagos_montos">$ 2.236.400,00</p>
                        </div>
                        <div>
                            <p class="card_pagos_fecha">24 JUN 2020, Efectivo.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6" style="float:right">
                    <div class="card card_historial_pagos" style="min-height:376px;">

                        {{-- Título --}}
                        <div class="card-header border-transparent">
                          <h3 class="card_pagos_titulo">Historial de pagos</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                          <div class="table-responsive">

                            <table class="table m-0 tabla_historial_pagos">
                              <thead>
                                <tr>
                                    <th></th>
                                    <th class="columnas_historial_pagos">Pago</th>
                                    <th class="columnas_historial_pagos">Forma</th>
                                    <th class="columnas_historial_pagos">Monto</th>
                                    <th></th>
                                </tr>
                              </thead>

                              <tbody>
                                <tr>
                                    <td><i class="far fa-check-circle" style="color: black;"></i></td>
                                    <td>20 Jul 2020</td>
                                    <td>Tarjeta</td>
                                    <td>
                                    $ 430.050,00
                                    </td>
                                </tr>
                                <tr>
                                    <td><i class="far fa-check-circle" style="color: black;"></i></td>
                                    <td>06 Sep 2020</td>
                                    <td>Efectivo</td>
                                    <td>
                                    $ 27.000,00
                                    </td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-times-circle" style="color: black;"></i></td>
                                    <td>17 Sep 2020</td>
                                    <td>Tarjeta</td>
                                    <td>
                                    $ 128.800,00
                                    </td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-times-circle" style="color: black;"></i></td>
                                    <td>24 Sep 2020</td>
                                    <td>Transferencia</td>
                                    <td>
                                    $ 1.110.547,00
                                    </td>
                                </tr>
                              </tbody>
                            </table>

                          </div>
                          <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix" style="background-color: white !important">
                          <a href="/historial-pagos" class="btn btn-sm float-left"><button class="btn_historial">Ver historial completo</button> </a>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                </div>

                <div class="col-md-6" style="float:left">
                    <div class="card proximo_pago bg-warning">
                        <div>
                            <h3 class="card_pagos_titulo">Próximo pago a abonar</h3>
                        </div>
                        <div>
                            <p class="card_pagos_montos2">$ 453.850,00</p>
                        </div>
                        <div>
                            <p class="card_pagos_fecha2">Fecha de vencimiento: 30 SEP 2020</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Pago nuevo + Datos Bancarios --}}
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6" style="float:left">
                    <div class="card nuevo_pago bg-info">
                        <div>
                            <h3 class="card_pagos_titulo mb-20">Informar pago nuevo</h3>
                        </div>
                        <div>
                            <p class="card_pagos_informe">Deberá generar un <strong>Informe de pago</strong> por cada unidad funcional a su nombre y por cada forma de pago efectuada (Ej: Depósito en efectivo, depósito cheque, transferencia).</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" style="float:right">
                    <div class="card datos_bancarios">
                        <div>
                            <h3 class="card_pagos_titulo mb-20">Datos Bancarios</h3>
                        </div>
                        <div class="info_banco">
                            <p><strong>Titular Fideicomiso Maipu 3460</strong></p>
                            <p>Cuenta Corriente en $ <strong>347-310729/2</strong></p>
                            <p>CBU <strong>0170347220000031072920</strong></p>
                            <p>CUIT <strong>30-71653327-8</strong></p>
                        </div>
                        <div style="background: linear-gradient(to right, rgba(212,212,212,1) 0%, rgba(255,255,255,1) 0%, rgba(230,230,230,1) 100%); padding: 5px; border-radius: 5%; width:95%;">
                            <p class="card_medios_pago">Medios de pagos habilitados: Depósito o transferencia bancaria. Por favor notificar el pago efectuado: <ins><a href="#" style="color: black; text-decoration:none;">Informar pago nuevo</a></ins> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection