<?php
$site = $this->konfigurasi_model->listing();
?>
<!-- footer -->

<div class="copy">
<div class="container">
<div class="copy-center">
	<p>Copyright © 2018</p>
</div>
<div class="social-icons">

<div class="clearfix"> </div>
</div>
</div>
<!--//footer-->
<!--smooth-scrolling-of-move-up-->
<script type="text/javascript">
$(document).ready(function() {
/*
var defaults = {
	containerID: 'toTop', // fading element id
	containerHoverID: 'toTopHover', // fading element hover id
	scrollSpeed: 1200,
	easingType: 'linear' 
};
*/

$().UItoTop({ easingType: 'easeOutQuart' });

});
</script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!--//smooth-scrolling-of-move-up-->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url() ?>assets/front/js/bootstrap.js"></script>
</body>
</html>