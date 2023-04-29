@include('modals')

<!-- Footer -->
<footer class="footer">
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget">
                        <h2 class="footer-title">Campus Central</h2>
                        <div class="footer-contact-info">
                            <small>10707 Haddington Dr<br> Houston TX. 77043 </small> <br>
                            <small class="element">Miércoles 7:30PM</small> <br>
                            <small class="des">Reunión General</small> <br>
                            <small class="element">Viernes 8:00PM</small> <br>
                            <small class="des">Servicio de Oración</small> <br>
                            <small class="element">Domingo 9:00AM</small> <br>
                            <small class="des">Adultos y Jóvenes sin niños</small> <br>
                            <small class="element">Domingo 11:00AM</small> <br>
                            <small class="des">Familias y Jóvenes con niños</small> <br>
                        </div>
                    </div>
                    <!-- /Footer Widget -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title">Campus Norte</h2>
                        <div class="footer-contact-info">
                            <small>16800 Imperial Valley Dr Houston <br> TX. 77060 </small> <br>
                            <small class="element">Jueves 7:00PM</small> <br>
                            <small class="des">Servicio de Oración</small> <br>
                            <small class="element">Domingo 5:00 PM</small> <br>
                            <small class="des">Reunión General</small> <br>
                        </div>
                    </div>
                    <!-- /Footer Widget -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title">Pestañas</h2>
                        <ul>
                            <li>
                                <a href="{{ route('index') }}">Inicio</a>
                            </li>
                            <li>
                                <a href="#eventos">Eventos</a>
                            </li>
                            <li>
                                <a href="{{ route('errors.build') }}">Ministerios</a>
                            </li>
                            <li>
                                <a href="{{ route('errors.build') }}">Campus</a>
                            </li>
                            <li>
                                <a href="#contacto">Contáctanos</a>
                            </li>
                            <li>
                                <a href="{{ route('errors.build') }}">Blog</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /Footer Widget -->
                </div>

                <div class="col-lg-2 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget">
                        <h2 class="footer-title">Síguenos</h2>
                        <div class="social-icon">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/amoryrestauracion/" target="_blank"><i
                                            class="fab fa-facebook-f"></i> </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/amor.y.restauracion/" target="_blank"><i
                                            class="fab fa-instagram"></i> </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/channel/UCDT3-Oijp2N7Bwn3DlZHPJw"
                                        target="_blank"><i class="fab fa-youtube"></i> </a>
                                </li>

                            </ul>
                        </div>
                        <div class="subscribe-form">
                            <a style="color:var(--primary);" href="tel:+1 713-932-1800">
                                <i class="fas fa-phone"></i> +1 713-932-1800</a>
                        </div>
                    </div>
                    <!-- /Footer Widget -->
                </div>
            </div>
        </div>
    </div>
    <!-- /Footer Top -->
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <!-- Copyright -->
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="copyright-text">
                            <p>Copyright Amor & Restauración &copy; {{ date('Y') }} Todos los derechos reservados.
                            </p>
                        </div>
                        <div class="copyright-img">
                            <a target="_blank" href="https://eric3r1c.wixsite.com/mtm-">
                                <img src="{{ asset('assets/img/index/mtm.png') }}" class="img-fluid"
                                    alt="Ministerios de Transformación Mundial">
                            </a>
                            <img src="{{ asset('assets/img/index/institute.png') }}" class="img-fluid" alt="Instituto">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <!-- Copyright Menu -->
                        <div class="copyright-menu">
                            <ul class="policy-menu">
                                <li>
                                    <a href="{{ route('term-condition') }}">Términos y Condiciones</a>
                                </li>
                                <li>
                                    <a href="{{ route('privacy-policy') }}">Aviso de Privacidad</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /Copyright Menu -->
                    </div>
                </div>
            </div>
            <!-- /Copyright -->
        </div>
    </div>
    <!-- /Footer Bottom -->

</footer>
<!-- /Footer -->
