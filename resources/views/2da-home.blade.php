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

    {{-- Contenido --}}
    

</div>

@endsection