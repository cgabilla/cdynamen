<?php
if(empty($controller) && empty($model)){
  $bg_1 = "theme/assets/img/bluewater-login-compressor.jpg";
}else{
  $bg_1 = "../theme/assets/img/bluewater-login-compressor.jpg";
}
?>

<!-- <nav id="login-footer" class="navbar navbar-default navbar-fixed-bottom" role="navigation">

  <div class="container">
  </div>
</nav> -->



<script src="<?php echo $base_url.'theme/assets/libs/jquery/jquery.min.js'; ?>"></script>
<script src="<?php echo $base_url.'theme/assets/bs3/js/bootstrap.min.js'; ?>"></script>
<script src="<?php echo $base_url.'theme/js/plugins/jquery.backstretch.js'; ?>"></script>
<script>

var image = 

$.backstretch([
  "<?php echo base_url('theme/images/bg5.png'); ?>",
  ], {
    fade: 750,
    duration: 4000
  });
</script>

<script type="text/javascript">
  
  function login_loading(){

      var login_btn = '.login-btn';
      var loading_modal = '.login-loading';

      $(login_btn).click(function(){
        $(loading_modal).removeClass('hidden');
        $(this).text('Signing In');

      });

  }

  login_loading();

</script>

</body>


</html>