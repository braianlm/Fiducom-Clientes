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

    <div class="row">
        <div class="col-md-12 d_flex p0 d_flex_column">
            
            <div class="col-sm-12 col-md-5">
                <div class="contrato_col_6">
                    <div class="titulo_ul_historial_pagos">
                        <h3 class="card_pagos_titulo bold mb-0" style="padding: 1.25rem 1.25rem 0.75rem 1.25rem">Contrato de fideicomiso</h3>
                    </div>
            
                    <div class="contenido_contratos">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dignissim dui lorem, vel rutrum diam molestie sed. Proin sodales pretium libero id interdum. Donec in purus ut dui dapibus iaculis. Nunc vulputate justo ante, vitae vestibulum dui sodales eget. Mauris in sapien id erat fermentum gravida. Integer gravida non dolor bibendum aliquet. Proin nulla sapien, ullamcorper id pulvinar varius, eleifend vitae nisl. Duis eu ante vitae nunc mattis auctor. Cras rhoncus malesuada magna, at laoreet ipsum aliquet ac. Morbi id varius risus. Duis mauris felis, euismod at turpis at, convallis laoreet mauris.
                        Mauris eget mollis velit. Vestibulum pharetra, ante a iaculis volutpat, elit purus pellentesque libero, eu faucibus eros turpis sed purus. Etiam sapien turpis, porta non dolor vitae, viverra luctus nibh. Quisque fringilla, purus sit amet porttitor aliquam, ante justo aliquam mi, vel semper ligula quam et ipsum. Sed ligula augue, feugiat id libero et, mollis placerat leo. Cras vulputate nisi massa, eu posuere eros faucibus eget. Suspendisse potenti. Proin et tempor velit, eu aliquam nulla. Nullam faucibus tellus condimentum dictum tempor.</p>
                    </div>

                    <div style="background-color: white !important; padding: 0 0 15px 10px">
                        <a href="/contrato-fideicomiso" class="btn btn-sm float-left"><button class="btn_contratos">Ver contrato</button> </a>
                    </div>
                </div>
            </div>
        
            <div class="col-sm-12 col-md-5">
                <div class="contrato_col_6">
                    <div class="titulo_ul_historial_pagos">
                        <h3 class="card_pagos_titulo bold mb-0" style="padding: 1.25rem 1.25rem 0.75rem 1.25rem">Contrato de adhesión</h3>
                    </div>
            
                    <div class="contenido_contratos">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dignissim dui lorem, vel rutrum diam molestie sed. Proin sodales pretium libero id interdum. Donec in purus ut dui dapibus iaculis. Nunc vulputate justo ante, vitae vestibulum dui sodales eget. Mauris in sapien id erat fermentum gravida. Integer gravida non dolor bibendum aliquet. Proin nulla sapien, ullamcorper id pulvinar varius, eleifend vitae nisl. Duis eu ante vitae nunc mattis auctor. Cras rhoncus malesuada magna, at laoreet ipsum aliquet ac. Morbi id varius risus. Duis mauris felis, euismod at turpis at, convallis laoreet mauris.
                        Mauris eget mollis velit. Vestibulum pharetra, ante a iaculis volutpat, elit purus pellentesque libero, eu faucibus eros turpis sed purus. Etiam sapien turpis, porta non dolor vitae, viverra luctus nibh. Quisque fringilla, purus sit amet porttitor aliquam, ante justo aliquam mi, vel semper ligula quam et ipsum. Sed ligula augue, feugiat id libero et, mollis placerat leo. Cras vulputate nisi massa, eu posuere eros faucibus eget. Suspendisse potenti. Proin et tempor velit, eu aliquam nulla. Nullam faucibus tellus condimentum dictum tempor.</p>
                    </div>

                    <div style="background-color: white !important; padding: 0 0 15px 10px">
                        <a href="/contrato-adhesion" class="btn btn-sm float-left"><button class="btn_contratos">Ver contrato</button> </a>
                    </div>
                </div>
            </div>

            <div class="col-md-2" style="max-width: 10%">

            </div>
        </div>
    </div>



</div>

@endsection