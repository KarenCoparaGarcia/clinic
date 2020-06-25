<script src="{{ asset('assets/pluggins/jquery-3.2.1.min.js')}}"></script>
<script src="{{ asset('assets/backoffice/js/materialize.min.js')}}"></script>
<script src="{{ asset('assets/pluggins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{ asset('assets/backoffice/js/plugins.js')}}"></script>
<script src="{{ asset('assets/backoffice/js/custom-script.js')}}"></script>
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
@yield('foot')