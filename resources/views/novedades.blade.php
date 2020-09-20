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

            <div class="col-md-9" style="float:left; width: 100%; background-color: white; border-radius:10px; box-shadow: 0px 0px 11px 0px rgba(0,0,0,0.15) !important;">


                        <div class="row" style="padding: 1.25rem 1.25rem 0rem 1.25rem">
                            <div class="col-md-12 p0">
                                <h3 class="card_pagos_titulo bold" style="width: 75% !important;">Novedades</h3>
                                <p style="font-size: 12px; color: #707070">
                                    10 SEP 2020
                                </p>
                            </div>
                        </div>
                        <div class="row" style="padding: 1.25rem 1.25rem 0rem 1.25rem">
                            <div class="col-md-12 d_f_row p0" style="align-items:center;">
                                <div class="col-md-7 pl0">
                                    <h3 class="card_pagos_titulo bold w75">
                                        Título de novedades, puede ser en dos líneas
                                    </h3>
                                    <p class="mb-0">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi viverra dapibus mauris a vestibulum. Proin sed dictum sem. Mauris sed ullamcorper mauris, porttitor lobortis orci. Curabitur ultrices faucibus ante non vehicula. Quisque ex lectus, posuere a faucibus sed, fermentum sed ipsum. Phasellus ac libero ligula. Suspendisse at massa vitae purus varius porta eleifend in mauris. Phasellus hendrerit elementum rhoncus. Nam molestie est quis velit iaculis, ullamcorper consequat justo condimentum. Aliquam euismod fringilla ligula eu feugiat. Curabitur tristique nunc at erat fermentum egestas. Mauris a pharetra nisl. Vivamus ac massa ac nisl rutrum egestas eget ac lectus. Integer nisi orci, vestibulum id enim sed, consectetur ultrices metus. Nullam non felis ut eros varius condimentum id quis turpis. Morbi nec est id odio viverra convallis vel non tortor.
                                    </p>
                                </div>
                                <div class="col-md-5 p0">
                                    <div style="width: 100%; height: 300px; background-color: green;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding: 0rem 1.25rem">
                            <div class="col-md-12 p0">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam velit nisi, hendrerit at fringilla ut, consequat sed velit. Phasellus venenatis et lectus at ultricies. Duis at fringilla libero, eget blandit lorem. Etiam faucibus id nunc et rutrum. Nulla facilisi. Vestibulum vel arcu arcu. Vestibulum elementum in lectus nec dictum. Nulla in pulvinar urna. Pellentesque dolor odio, hendrerit ac congue eget, commodo a libero. Quisque sit amet nunc leo. Praesent fringilla non massa in cursus. Phasellus eu vulputate velit.
                                Vestibulum vitae magna malesuada, venenatis orci ac, pellentesque nunc. Cras et luctus velit, eget euismod erat. Suspendisse porta quam eu est scelerisque lobortis. Cras non pellentesque mauris, vel ultricies lacus. Etiam rhoncus interdum nunc vitae volutpat. Duis vel ex luctus, hendrerit augue sed, imperdiet urna. Fusce vel quam sit amet ex mattis imperdiet vitae in felis.
                                Ut viverra volutpat eros, in scelerisque ipsum accumsan eget. Mauris elementum quis urna ut malesuada. Mauris a vestibulum felis. Vestibulum dictum arcu vitae elit tincidunt suscipit. Curabitur malesuada pellentesque erat in ultrices. Maecenas aliquet facilisis elit, in pharetra mauris dignissim eu. Phasellus eros justo, dapibus in mauris a, consequat pellentesque nunc. Mauris nec risus in ligula elementum pharetra. Nam pellentesque ullamcorper consequat.</p>
                            </div>
                        </div>

            </div>

            <div class="col-md-2 cards-novedades">
                <div class="card">
                    <h3>
                        Título de novedades
                    </h3>
                    <p>
                        Puede ser en dos líneas
                    </p>
                </div>
                <div class="card">
                    <h3>
                        Título de novedades
                    </h3>
                    <p>
                        Puede ser en dos líneas
                    </p>
                </div>
                <div class="card">
                    <h3>
                        Título de novedades
                    </h3>
                    <p>
                        Puede ser en dos líneas
                    </p>
                </div>
                <div class="card">
                    <h3>
                        Título de novedades
                    </h3>
                    <p>
                        Puede ser en dos líneas
                    </p>
                </div>
                <div class="card">
                    <h3>
                        Título de novedades
                    </h3>
                    <p>
                        Puede ser en dos líneas
                    </p>
                </div>
            </div>
           
            <div class="col-md-1"></div>
            
        </div>


    </div>

@endsection