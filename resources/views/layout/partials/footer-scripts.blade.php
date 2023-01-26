

@if(Route::is(['index','agencias']))
<script src="{{asset('assets/js/view_controllers/index_vs.js')}}"></script>
@endif

@if(Route::is(['landing.index']))
<script src="{{asset('assets/js/landing.js')}}"></script>
@endif

<!-- Sticky Sidebar JS -->
<script src="{{asset('assets/plugins/theia-sticky-sidebar/ResizeSensor.js')}}"></script>
<script src="{{asset('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')}}"></script>
<!-- Datepicker Core JS -->
<script src="{{asset('assets/js/moment.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>
<!-- Owl JS -->
<script src="{{asset('assets/plugins/owlcarousel/owl.carousel.min.js')}}"></script>

<!-- Custom JS -->
<script src="{{asset('assets/js/owl2row.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  
<script>
    AOS.init();
  </script>
  

{{-- <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script> --}}
