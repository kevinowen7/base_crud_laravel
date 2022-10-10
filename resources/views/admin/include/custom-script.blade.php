<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/app-style-switcher.js')}}"></script>
<script src="{{asset('plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{asset('js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('js/custom.js')}}"></script>
<!--This page JavaScript -->
<!--chartis chart-->
<script src="{{asset('plugins/bower_components/chartist/dist/chartist.min.js')}}"></script>
<script src="{{asset('plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
<script src="{{asset('js/pages/dashboards/dashboard1.js')}}"></script>

<script>
  function convertTextToPrice(angka) {
    var rupiah = '';
    var angkarev = angka.toString().split('').reverse().join('');
    for (var i = 0; i < angkarev.length; i++) {
      if (i%3 == 0) {
        rupiah += angkarev.substr(i,3)+'.';
      }
    }
    return rupiah.split('',rupiah.length-1).reverse().join('');
  }

  function convertPriceToText(x) {
    return x.split(".").join("");
  }
</script>