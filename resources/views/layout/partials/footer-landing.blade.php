@include('modals_landing')

<!-- Footer -->
<footer class="footer" style="background-color:rgb(0, 0, 0)">
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <!-- Copyright -->
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <a href="{{ route('landing.index') }}"> <img class="img-fluid mb-4" width="30%"
                                src="{{ asset('assets/img/logo.png') }}" alt="Logo AutoNavega Footer"></a>
                        <div class="copyright-text">
                            <p class="text-white">Copyright &copy; 2021 - {{ date('Y') }} Todos los derechos
                                reservados. </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <!-- Copyright Menu -->
                        <div class="copyright-menu">
                            <ul class="policy-menu">
                                <li>
                                    <a class="text-white" href="{{ route('privacy-policy') }}">Aviso de Privacidad</a>
                                </li>
                                <li>
                                    <a class="text-white" href="{{ route('term-condition') }}">Términos y
                                        Condiciones</a>
                                </li>
                                <li>
                                    <a class="text-primary"
                                        href="mailto:contacto@amoryrestauracion.com">contacto@amoryrestauracion.com</a>
                                </li>
                            </ul>
                        </div>
                        <div class="disenoby">
                            <span class="text-white">Diseño por: </span>
                            <a href="https://lacasadelospixeles.com/"><img width="40%"
                                    src="{{ asset('assets/img/casa-pixel-logo.svg') }}" alt="Casa Pixel"></a>
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
