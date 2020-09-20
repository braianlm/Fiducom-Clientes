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

        <div class="row mt-30">
            {{-- Informar Pago / Formulario --}}
            <div class="col-md-8 caja_formulario">
                <!-- general form elements disabled -->
                <div class="card form_pago">

                    <div class="sin_bordes">
                        <h3 class="titulo bold" style="margin: 0; padding: 1.25rem 1.25rem 0.75rem 1.25rem;">Informar un pago</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form>

                            {{-- Usuario y Forma de pago --}}
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group input_1_resp" style="margin-right:20px;">
                                        <select class="form-control input_border_informar_pago">
                                            <option value=""></option>
                                            <option>Park Bamboo 1-B</option>
                                            <option>Park Bamboo 2-B</option>
                                            <option>Park Bamboo 3-B</option>
                                            <option>Park Bamboo 4-B</option>
                                            <option>Park Bamboo 5-B</option>
                                        </select>
                                        <p class="placeholder_form_pago">Usuario</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select class="form-control input_border_informar_pago">
                                            <option value=""></option>
                                            <option>Efectivo</option>
                                            <option>Tarjeta</option>
                                            <option>Transferencia</option>
                                            <option>Cheque</option>
                                        </select>
                                        <p class="placeholder_form_pago">Forma de pago</p>
                                    </div>
                                </div>
                            </div>

                            {{-- Fecha y Monto --}}
                            <div class="row">

                                <div class="col-sm-6">
                                    <div class="form-group input_2_resp" style="margin-right:20px;">
                                        <input type="date" class="form-control input_border_informar_pago" />
                                        <p class="placeholder_form_pago">Fecha de pago</p>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <input type="text" class="form-control input_border_informar_pago" placeholder="$ 12.250,00"/>
                                    <p class="placeholder_form_pago">Monto</p>
                                </div>

                            </div>

                            {{-- Número operación + Comprobante --}}
                            <div class="row">

                                <div class="col-sm-6">
                                    <div class="form-group input_3_resp" style="margin-right:20px;">
                                        <input type="text" class="form-control input_border_informar_pago"/>
                                        <p class="placeholder_form_pago">Número de operación</p>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="custom-file">
                                            <input type="file" name="choose_file" id="choose_file" class="inputfile custom"/>
                                            <label for="choose_file" id="label_comprobante">
                                                <span id="file_name">Comprobante</span><strong>Adjuntar</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>

                            {{-- Comentarios --}}
                            <div class="row">

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea class="form-control input_border_informar_pago" rows="1" placeholder></textarea>
                                        <p class="placeholder_form_pago">Comentarios</p>
                                    </div>
                                </div>
                                
                            </div>

                            {{-- Botón Informar --}}
                            <div class="row">

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <button class="btn btn-informar" id="IngresoLog" type="submit">
                                            Informar
                                        </button>
                                        <button class="btn btn-cancelar" id="IngresoLog" type="submit" disabled>
                                            Cancelar
                                        </button>
                                    </div>
                                </div>
                                
                            </div>


                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>

            {{-- Card Importante --}}
            <div class="col-md-3">
                <div class="card card-info-pago">
                    <p class="titulo">Importante</p>
                    <p class="tenga_presente">Tenga presente que deberá generar <strong>un aviso de pago</strong> por cada unidad funcional a su nombre y por cada forma de pago efectuada.</p>
                    <p class="ejemplo">Ejemplo:</p>
                    <p class="aviso_pago">Un aviso de pago de depósito efectivo por unidad 1C + un aviso de pago de depósito cheque por unidad 1C, etc.</p>
                </div>
            </div>

            <div class="col-md-1"></div>

        </div>
        
    </div>
@endsection