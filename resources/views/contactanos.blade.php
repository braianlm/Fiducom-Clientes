@extends('layouts.master')
@section('content')

    <div class="content-wrapper">

        {{-- Separador superior --}}
        <div class="barra_gris_horizontal mb-30 w100">
        </div>

        <div>
            <div class="row">
                <div class="col-md-10">
                    <h3 class="titulo_contacto_h3 mt-15">Como contactarse con nosotros</h3>
                </div>
                <div class="col-md-2"></div>
            </div>

            <div class="row mt-30">

                <div class="col-md-5">
                    <div class="card cards_contacto">

                        <p class="titulo_card_contacto bold">CONSULTAS DOCUMENTACIÓN</p>

                        <div class="contenedor_contacto">
                            <div class="imagen_contacto mr-20"></div>
                            <div class="contenido_contacto">
                                <p class="card_pagos_titulo bold mb-0">María Florencia Zavalía</p>
                                <p>Responsable de Gestiones y Clientes</p>
                                <br>
                                <p>zavalia@fiducom.com.ar</p>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="card cards_contacto">

                        <p class="titulo_card_contacto bold">CONSULTAS DOCUMENTACIÓN</p>

                        <div class="contenedor_contacto">

                            <div class="imagen_contacto mr-20"></div>
                            <div class="contenido_contacto">
                                <p class="card_pagos_titulo bold mb-0">Sandra Grassi</p>
                                <p>Responsable Administrativa</p>
                                <br>
                                <p>administracion@fiducom.com.ar</p>
                            </div>

                        </div>
                    </div>
                </div>
                
            </div>

            <div class="row mt-30">
                <div class="col-md-12 d-flex">
                    <div class="col-md-5 d_f_column estilos_pie_contacto" style="float:left">

                        <div class="d_f_row mb-30">
                            <div class="mt-15 mr-20" style="height: 50px; width: 50px; background-color: white; border-radius: 50px; border: 1px solid grey;">
                            </div>
                            
                            <div class="d_f_column">
                                <p>DOMICILIO</p>
                                <p>Av. Libertador 13305 (1640) </p>          
                                <p>Martínez, Buenos Aires, Argentina.</p>
                            </div>
                        </div>


                        <div class="d_f_row">
                            <div class="mt-15 mr-20" style="height: 50px; width: 50px; background-color: white; border-radius: 50px; border: 1px solid grey;">
                            </div>
    
                            <div class="d_f_column">
                                <p>MAIL</p>
                                <p>recepcion@fiducom.com.ar</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-5 d_f_column estilos_pie_contacto" style="float:right">

                        <div class="d_f_row mb-30">
                            <div class="mt-15 mr-20" style="height: 50px; width: 50px; background-color: white; border-radius: 50px; border: 1px solid grey;">
                            </div>
    
                            <div class="d_f_column">
                                <p>TELÉFONO</p>
                                <p>(5411) 4793-2475</p>
                            </div>
                        </div>

                        <div class="d_f_row">
                            <div class="mt-15 mr-20" style="height: 50px; width: 50px; background-color: white; border-radius: 50px; border: 1px solid grey;">
                            </div>
    
                            <div class="d_f_column">
                                <p>ASDASD</p>
                                <p>asdasd</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-2"></div>
            </div>
        </div>

    </div>

@endsection