 <!DOCTYPE HTML>
<html>

<head>
  <title>INGRESA TUS DATOS</title>
  <meta name="description" content="website description" />

  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
   <link href="css/styles.css" type="text/css" rel="stylesheet" />
<script src="http://code.jquery.com/jquery-1.9.1.js" type="text/javascript"></script>
<script src="js/general.js" type="text/javascript"></script>
</head>

<body>
  <div id="main">
   <?php
   include('menu.php');
   ?>
    <div id="site_content">
	 
   
      <div class="content1">
        <div class="form_settings">
	
       
		
		  <fieldset> <legend>INGRESA TUS DATOS PARA PODER INICIAR SESIÓN</legend>
		  	<h4>
		<?php
			$msg=$_GET['msg'];
			echo $msg;
		?>
			</h4>
        <form action="system.php" method="POST" >
          <div class="form_settings">
            Usuario<br><input type="text" name="user" placeholder='Escribe tu usuario' ><br><br>
			Contraseña<br><input type="password" name="psw" placeholder='escribe tu contraseña'><br><br>
		
			<input class="submit" type="submit"  value="Enviar" />
			</form>
		
      </div>
	
	  </fieldset>
			
			
				
			
 </div>
 
      </div>
    </div>
   
   <?php
   include('pie.php');
   ?>
  </div>
  <!-- javascript at the bottom for fast page loading -->
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45644533-1', 'opticadiana.com');
  ga('send', 'pageview');

</script>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
      $('.top').click(function() {$('html, body').animate({scrollTop:0}, 'fast'); return false;});
    });
  </script>
</body>
</html>
