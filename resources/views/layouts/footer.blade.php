<!-- Jquery Core Js --> 
<script src="{{ asset('/bundles/libscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->
<script src="{{ asset('/bundles/vendorscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->

<script src="{{ asset('/plugins/jquery-validation/jquery.validate.js') }}"></script> <!-- Jquery Validation Plugin Css -->
<script src="{{ asset('/plugins/jquery-steps/jquery.steps.js') }}"></script> <!-- JQuery Steps Plugin Js -->

<script src="{{ asset('/bundles/mainscripts.bundle.js') }}"></script><!-- Custom Js -->
<script src="{{ asset('/js/pages/forms/form-wizard.js') }}"></script>
@yield('pageScripts')
</body>
</html>