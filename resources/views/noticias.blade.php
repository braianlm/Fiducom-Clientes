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

    {{-- 1ra Ficha --}}
    <div class="row mb-10">
        <div class="col-md-12">

            <div class="col-md-9 ficha_novedades" style="float: left">
                <div class="col-md-4">
                    <div>
                        <h3 class="bold" style="color: #707070; font-size: 22px; position: absolute; top: -5px;">
                            Novedades
                        </h3>
                        <img src="/img/edificios/vidal.jpg" alt="" style="width: 100%; height: auto;">
                    </div>
                </div>

                <div class="col-md-8">
                    <div>
                        <p style="font-size: 12px; color: #707070">
                            10 SEP 2020
                        </p>
                        <h3 style="color: #707070; font-size: 22px; font-weight: 500;">
                            Título de novedades, puede ser en dos líneas
                        </h3>
                        <p style="font-size: 12px; color: #707070">
                            Curabitur sapien nisl, pulvinar placerat leo malesuada, volutpat consequat lacus. Aliquam erat volutpat. Nam accumsan blandit leo, vel tempor odio condimentum et. Sed bibendum nunc et mi consequat, a pharetra massa posuere. Mauris sapien nisl, viverra sed enim quis, faucibus interdum diam. Fusce consectetur lacinia urna, non faucibus augue tristique ac. Etiam faucibus hendrerit felis, dapibus volutpat arcu convallis quis. Mauris feugiat porttitor ornare. Nam euismod nibh ut faucibus pellentesque. Cras sodales lectus vitae quam interdum, vitae semper odio dignissim. Vestibulum gravida pharetra est, dictum pharetra lacus. Suspendisse potenti. Sed sapien sapien, egestas vel ultricies id, sagittis ut quam. Donec porta lacinia velit eget rutrum. Duis egestas dui in metus pulvinar tempor.
                        </p>
                        <button class="boton_aside_contacto">
                            <a class="a_contactanos" href="/contactanos">Ver nota completa</a>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-2 cards-novedades pr0">
                <div class="card card_1">
                    <h3 class="bold">
                        Título de novedades, puede ser en dos líneas
                    </h3>
                    <p>
                        10 SEP 2020
                    </p>
                </div>
                <div class="card card_1">
                    <h3 class="bold">
                        Título de novedades, puede ser en dos líneas
                    </h3>
                    <p>
                        10 SEP 2020
                    </p>
                </div>
            </div>

            <div class="col-md-1" style="float: right"></div>

        </div>
    </div>

    {{-- 2da Ficha --}}
    <div class="row mb-10">
        <div class="col-md-12">

            <div class="col-md-2 cards-novedades pl0" style="float:left">
                <div class="card card_2">
                    <h3 class="bold">
                        Título de novedades, puede ser en dos líneas
                    </h3>
                    <p>
                        10 SEP 2020
                    </p>
                </div>
                <div class="card card_2">
                    <h3 class="bold">
                        Título de novedades, puede ser en dos líneas
                    </h3>
                    <p>
                        10 SEP 2020
                    </p>
                </div>
            </div>

            <div class="col-md-9 ficha_novedades" >
                <div class="col-md-4">
                    <div>
                        <h3 class="bold" style="color: #707070; font-size: 22px; position: absolute; top: -5px;">
                            Informe de obra
                        </h3>
                        <img src="/img/edificios/vidal.jpg" alt="" style="width: 100%; height: auto;">
                    </div>
                </div>

                <div class="col-md-8">
                    <div>
                        <p style="font-size: 12px; color: #707070">
                            10 SEP 2020
                        </p>
                        <h3 style="color: #707070; font-size: 22px; font-weight: 500;">
                            Título de novedades, puede ser en dos líneas
                        </h3>
                        <p style="font-size: 12px; color: #707070">
                            Curabitur sapien nisl, pulvinar placerat leo malesuada, volutpat consequat lacus. Aliquam erat volutpat. Nam accumsan blandit leo, vel tempor odio condimentum et. Sed bibendum nunc et mi consequat, a pharetra massa posuere. Mauris sapien nisl, viverra sed enim quis, faucibus interdum diam. Fusce consectetur lacinia urna, non faucibus augue tristique ac. Etiam faucibus hendrerit felis, dapibus volutpat arcu convallis quis. Mauris feugiat porttitor ornare. Nam euismod nibh ut faucibus pellentesque. Cras sodales lectus vitae quam interdum, vitae semper odio dignissim. Vestibulum gravida pharetra est, dictum pharetra lacus. Suspendisse potenti. Sed sapien sapien, egestas vel ultricies id, sagittis ut quam. Donec porta lacinia velit eget rutrum. Duis egestas dui in metus pulvinar tempor.
                        </p>
                        <button class="boton_aside_contacto">
                            <a class="a_contactanos" href="/contactanos">Ver nota completa</a>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-1" style="float: right"></div>

        </div>
    </div>

</div>

@endsection