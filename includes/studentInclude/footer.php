



<!-- Bootstrap core JavaScript-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script src="assets/adminAssets/vendor/bootstrap/js/bootstrap.js"></script>


<!-- Core plugin JavaScript-->
<script src="assets/adminAssets/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="assets/adminAssets/js/isotope.pkgd.min.js"></script>

<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.2.3/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.2.3/dist/js/uikit-icons.min.js"></script>


<!-- Custom scripts for all pages-->
<script src="assets/adminAssets/js/sb-admin-2.min.js"></script>

<script src="assets/adminAssets/js/custom.js"></script>



<!-- Page level plugins -->
<script src="assets/adminAssets/vendor/chart.js/Chart.min.js"></script>

<script src="assets/adminAssets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="assets/adminAssets/js/demo/datatables-demo.js"></script>

<!-- Page level custom scripts -->
<!-- <script src="assets/adminAssets/js/demo/chart-area-demo.js"></script>
<script src="assets/adminAssets/js/demo/chart-pie-demo.js"></script>
<script src="assets/adminAssets/js/demo/chart-pie-demo.js"></script> -->





<?php 

if(isset($jsList)  && $jsList){
	foreach ($jsList as $value) {
		echo "<script src='assets/adminAssets/js/{$value}.js'></script>";
	}
}

 ?>

</body>

</html>


