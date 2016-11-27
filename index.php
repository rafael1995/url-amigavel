<html>
<head>
  <!-- CSS PROJETO -->
<link rel="stylesheet"  href="http://<?=$_SERVER["HTTP_HOST"]?>/css/style.css" .../>
<!-- BIBLIOTECA JQUERY 1.4 -->
<script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
<!-- Add fancyBox main JS and CSS files -->
  <script type="text/javascript" src="js/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
  <link rel="stylesheet" type="text/css" href="js/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
<!-- CSS ORBIT - SLIDE -->
<link rel="stylesheet" href="http://<?=$_SERVER["HTTP_HOST"]?>/css/orbit-1.2.3.css">
<!-- BIBLIOTECA JS ORBIT -->
<script src= "js/jquery.orbit-1.2.3.min.js"  type= "text/javascript" ></script>
<script type="text/javascript">

</script>

  <script type="text/javascript">
      // EXECUTANDO PLUGINS
      $(window).load(function() {
        $('#featured').orbit();
        $('.fancybox').fancybox();
      });
  </script>
</head>
<body>  
<?php   
    // Tratamento de URL 
    $_SERVER["REQUEST_URI"];
    $parte1 = strrchr($_SERVER["REQUEST_URI"],"?");
    $parte2 = str_replace($parte1,"", $_SERVER["REQUEST_URI"]);
    $url = explode("/",$parte2);
    array_shift($url);
?>
  <div id="background">
          <div class="all">
              <?php  
                   if(empty($url[0])){
                      include("pg/home.php");
                   }
                  if(!empty($url[0])){
                    if(file_exists("pg/".$url[0].".php")){
                       include("pg/".$url[0].".php");
                    }
                   else{
                    echo "arquivo nao existe";
                   } 
                  }
              ?> 
      </div>
  </div>
</body>
</html>
