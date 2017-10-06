  <!-- search modal -->
  <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
    <div class="widget widget_search">
      <form method="get" class="searchform form-inline" action="/">
        <div class="form-group">
          <input type="text" value="" name="search" class="form-control" placeholder="Buscar por nombre..." id="modal-search-input">
        </div>
        <button type="submit" class="theme_button input_button">Buscar</button>
      </form>
    </div>
  </div>

  <!-- wrappers for visual page editor and boxed version of template -->
  <div id="canvas">
    <div id="box_wrapper">



<!-- template sections -->

<section class="page_topline ds ms gorizontal_padding table_section">
  <div class="container-fluid with_border">
    <div class="row">


      <div class="col-sm-4 col-md-3 col-lg-2 text-xs-center text-right text-lg-left">
        <ul class="inline-dropdown inline-block">

          <li class="dropdown cart-dropdown">
            <div class="total-quantity text-center">0 Seleccionadas -
              <span class="total-amount">$0.00</span>
            </div>
            <a class="topline-button" id="cart" data-target="#" href="./" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
              <i class="rt-icon2-star-o"></i>

            </a>
            <div class="dropdown-menu" aria-labelledby="cart">
              <span class="grey">Recently added item(s)</span>
              <div class="widget widget_shopping_cart">
                <div class="widget_shopping_cart_content">
                  <ul class="cart_list product_list_widget media-list darklinks">
                    <li class="media">
                      <div class="media-left media-middle">
                        <a href="product-right.html">
                          <img src="images/models_square/01.jpg" alt="">
                        </a>
                      </div>
                      <div class="media-body media-middle">
                        <h4>
                          <a href="product-right.html">Stet clitad gubergren</a>
                        </h4>
                        <span class="quantity">1 ×
                          <span class="amount">$90</span>
                        </span>
                      </div>
                      <div class="media-body media-middle">
                        <a href="#" class="remove" title="Remove this item">
                          <i class="rt-icon2-trash highlight"></i>
                        </a>
                      </div>
                    </li>
                    <li class="media">
                      <div class="media-left media-middle">
                        <a href="product-right.html">
                          <img src="images/models_square/02.jpg" alt="">
                        </a>
                      </div>

                      <div class="media-body media-middle">
                        <h4>
                          <a href="product-right.html">Takimata san bctus</a>
                        </h4>
                        <span class="quantity">1 ×
                          <span class="amount">$90</span>
                        </span>
                      </div>
                      <div class="media-body media-middle">
                        <a href="#" class="remove" title="Remove this item">
                          <i class="rt-icon2-trash highlight"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                  <!-- end product list -->

                  <p class="total">
                    <span class="grey">Cart Subtotal:
                      <span class="amount">$180</span>
                    </span>
                  </p>

                  <p class="buttons">
                    <a href="cart-right.html" class="theme_button color1">View All</a>
                    <a href="checkout-right.html" class="theme_button inverse">Checkout</a>
                  </p>

                </div>
              </div>
            </div>
          </li>
          <li class="dropdown login-dropdown">
            <a class="topline-button" id="login" data-target="#" href="./" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
              <i class="rt-icon2-user"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="login">
              <form role="form" action="/">
                <div class="form-group">
                  <label for="login_email" class="sr-only">Email </label>
                  <input type="email" class="form-control" id="login_email" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="login_password" class="sr-only">Contraseña</label>
                  <input type="password" class="form-control" id="login_password" placeholder="Contraseña">
                </div>
                <button type="button" class="theme_button color1">
                  Ingresar
                </button>
                <div class="checkbox-inline">
                  <input type="checkbox" id="remember">
                  <label for="remember" class="bottommargin_0"> Recordar cuenta</label>
                </div>
              </form>
              <div class="topmargin_25">
                <a href="register.html" class="text-uppercase">¿Olvidaste la contraseña?</a>
              </div>
            </div>
          </li>
          <li class="dropdown">
            <a href="#" class="search_modal_button topline-button">
              <i class="rt-icon2-search2"></i>
            </a>
          </li>
        </ul>
      </div>

    </div>
  </div>
</section>

<header class="page_header header_darkgrey columns_padding_0 table_section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3 col-sm-6 text-center">
        <a href="./" class="logo logo_image">
          <h1>My
            <span class="muellerhoff">HotPlace</span>
          </h1>
          <img src="images/logo.png" alt="">
        </a>
      </div>
      <div class="col-md-6 text-center">
        <!-- main nav start -->
        <nav class="mainmenu_wrapper">
          <ul class="mainmenu nav sf-menu">
            <li class="active">
              <a href="<?php echo base_url();?>home/index">Inicio</a>
            </li>

            <li class="page-scroll">
              <a href="<?php echo base_url();?>home/todas">Todas</a>

            </li>
            <!-- eof pages -->


            <li>
              <a href="<?php echo base_url();?>home/mapa">Ver mapa</a>
            </li>

            <li>
              <a href="<?php echo base_url();?>home/servicios">Servicios</a>
            </li>

          </ul>
        </nav>
        <!-- eof main nav -->
        <span class="toggle_menu">
          <span></span>
        </span>
      </div>
      <div class="col-md-3 col-sm-6 header-contacts text-center hidden-xs">
        <div class="highlight inline-block fontsize_30 thin">Disponibles</div>
        <div class="fontsize_20 grey topmargin_-5">24/7 contáctanos</div>
        <div class="filters isotope_filters inline-block margin_0"><a href="#" data-filter="*" class="selected">Crear cuenta</a></div>
      </div>
    </div>
  </div>
</header>