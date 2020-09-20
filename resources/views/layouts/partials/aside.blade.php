<aside class="main-sidebar sombra_aside bg_grey_fiducom d-flex" style="flex-direction:column">

    {{-- Logo --}}
    <a href="/home" class="ta_c fiducom_aside_a">
      <span class="fiducom_aside_title">FIDUCOM</span>
    </a>

    {{-- Sidebar --}}
    <div class="sidebar d-flex" style="flex-direction: column; align-items: center;">

      {{-- Imagen de usuario y nombre --}}
      <div class="user-panel mt-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info w100">
         <p class="cuadro_cliente"></p> <a href="#" class="nombre_cliente">Villanueva María {{-- {{ $cliente->name }} --}} </a>
        </div>
      </div>

      {{-- Sidebar Menu --}}
      <nav>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          {{-- Cuenta --}}
          <li class="nav-item">
            <a href="#" class="nav-link bold">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Cuenta
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">

              <li class="nav-item treeview">
                <a href="#" class="nav-link aside_items">
                  <p class="items_ul_list">Park Bamboo
                    <i class="right fas fa-angle-right" style="top: 3px;"></i>
                  </p>
                </a>

                <ul class="nav nav-treeview" style="line-height:19px;">
                  <li class="nav-item">
                    <a href="/cuenta" class="nav-link aside_items">
                      <i class="nav-icon"></i>
                      <p class="items_ul_list">1-A</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="#" class="nav-link aside_items">
                      <i class="nav-icon"></i>
                      <p class="items_ul_list">Level 2</p>
                    </a>
                  </li>
                  
                  <li class="nav-item">
                    <a href="#" class="nav-link aside_items">
                      <i class="nav-icon"></i>
                      <p class="items_ul_list">Level 3</p>
                    </a>
                  </li>
                </ul>

              </li>

              <li class="nav-item">
                <a href="/cuenta" class="nav-link aside_items">
                  <p class="items_ul_list">Park Bamboo Unidad 1-B</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/cuenta" class="nav-link aside_items">
                  <p class="items_ul_list">Park Bamboo Unidad 1-C</p>
                </a>
              </li>

            </ul>
          </li>

          {{-- Pagos --}}
          <li class="nav-item">
            <a href="#" class="nav-link bold">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Pagos
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/historial-pagos" class="nav-link aside_items">
                  <p class="items_ul_list">Historial de pagos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/informar-pago" class="nav-link aside_items">
                  <p class="items_ul_list">Informar pago</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/estado-cuenta" class="nav-link aside_items">
                  <p class="items_ul_list">Estado de cuenta</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/datos-bancarios" class="nav-link aside_items">
                  <p class="items_ul_list">Datos bancarios</p>
                </a>
              </li>
            </ul>

          </li>

          {{-- Contratos --}}
          <li class="nav-item">
            <a href="#" class="nav-link bold">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Contratos
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/contrato-fideicomiso" class="nav-link aside_items">
                  <p class="items_ul_list">Contrato de fideicomiso</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/contrato-adhesion" class="nav-link aside_items">
                  <p class="items_ul_list">Contrato de adhesión</p>
                </a>
              </li>
            </ul>
          </li>

          {{-- Presupuesto --}}
          <li class="nav-item">
            <a href="/presupuesto" class="nav-link bold">
              <i class="nav-icon fas fa-circle"></i>
              <p>Presupuesto</p>
            </a>
          </li>

          {{-- Noticias --}}
          <li class="nav-item">
            <a href="#" class="nav-link bold">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Noticias
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/novedades" class="nav-link aside_items">
                  <p class="items_ul_list">Novedades</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/informes-obras" class="nav-link aside_items">
                  <p class="items_ul_list">Informes de obra</p>
                </a>
              </li>
            </ul>
          </li>
          
          {{-- Vista Contratos --}}
          <li class="nav-item">
            <a href="/contratos" class="nav-link bold">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Vista Contratos
              </p>
            </a>
          </li>

          {{-- Vista Noticias --}}
          <li class="nav-item">
            <a href="/noticias" class="nav-link bold">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Vista Noticias
              </p>
            </a>
          </li>

          {{-- 2da Home --}}
          <li class="nav-item">
            <a href="/2da-home" class="nav-link bold">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                2da Home
              </p>
            </a>
          </li>
          
          
        </ul>
      </nav>

    </div>
    
    {{-- Foot Aside --}}
    <div id="id_contacto_aside" class="contacto_aside">
      <p class="contacto_aside_p1">Estamos más cerca</p>
      <p class="contacto_aside_p2">Ahora podés escribirnos por acá para poder resolver todas tus dudas</p>
      <button class="boton_aside_contacto"><a class="a_contactanos" href="/contactanos">Contactanos</a></button>
    </div>

</aside>