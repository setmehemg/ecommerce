    <!-- ======= Header ======= -->
    <header id="header" >
        <div class="container d-flex" >
    
          <div class="logo mr-auto" >
            <!--  <h1 class="text-light"><a href="/">CompanYName</a></h1>  -->
            <a href="/"><img src=" {{asset('assets/img/Logo.webp')}}" alt="" class="img-fluid" ></a>
            
          </div>
          <p class="mobile-nav-toggle"><i class="fas fa-bars"></i> </p>
          <nav class="nav-menu d-none d-lg-block contentfont" >
            <ul style="margin-top:5px">
              <li class="active"><a href="/">Home</a></li>
              <li><a href="/#about">Sobre</a></li>
              <li><a href="/#Startups">Produtos</a></li>
              
              <li><a href="/#Startups">Time</a></li>
              
              <li><a href="/#Startups"><i class="fas fa-headset"  ></i>Ajuda</a></li>   
             
                @if (Route::has('login'))

                @auth
                  <li class="drop-down"><a href="#">Dashboard <i class="fas fa-angle-down"></i></a>
                       <ul> 
                            <li><a href="{{url('admin-all-users')}}" >Usuários Registrados</a></li>
                            <li><a href="{{url('admin-Orders')}}" >Pedidos</a></li>
                            <li><a href="{{url('admin-Transactions')}}" >Detalhes de Transações</a></li>
                            <li><a href="{{url('admin-products')}}" >Produtos</a></li>
                            <a   href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">  {{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            </li>
                        </ul>
                  </li>

                @else
                <li> <a href="{{ route('login') }}">Login</a> </li>

                    @if (Route::has('register'))
                    <li> <a href="{{ route('register') }}">Registrar</a> </li>
                    @endif
                @endauth

                @endif


          
             <li><a href="/#Startups" style="margin-left:15px;">   <i class="fas fa-shopping-cart fa-2x"></i></a></li>
            
            </ul>
            
          </nav><!-- .nav-menu -->
         
        </div>
      </header><!-- End Header --> 
   