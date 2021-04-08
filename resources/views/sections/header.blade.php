
<!-- Top header start -->
<header class="top-header top-header-bg d-none d-xl-block d-lg-block d-md-block" id="top-header-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8 col-sm-7">
                <div class="list-inline">
                    <a href="tel:+59827096771" onclick="_gaq.push(['_trackEvent','Button','OnClick','Llamada']);">
                    <i class="fa fa-phone"></i>Contáctenos</a>
                    <a href="tel:info@puntoinmobiliario.com.uy"><i class="fa fa-envelope"></i>info@puntoinmobiliario.com.uy</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-4 col-sm-5">
                <ul class="top-social-media pull-right">
                    <li>
                        @if(Auth::check())
                            <form method="POST" action="{{route('logout')}}" class="logout">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-default">Salir</button>
                            </form>
                        @else
                            <a href="{{url('rentalmanagment')}}">Ingresar</a>
                        @endif

                    </li>
                    <li>
                        <a onclick="_gaq.push(['_trackEvent','Button','OnClick','Whatsapp']);"
                           href="https://api.whatsapp.com/send?phone=59892642020&text=Hola,%20estuve%20en%20la%20web%20de%20Punto%20Inmobiliario%20y%20quisiera%20hablar%20con%20un%20asesor"
                           target="_blank" class="whatsapp">

                            <i class="fa fa-whatsapp"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/puntoinmobiliarioUY/" class="facebook"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/punto-inmobiliario-uy/" class="linkedin"><i class="fa fa-linkedin"></i> </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/puntoinmobiliariouy/?hl=es-la" class="rss"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- Top header end -->