<!DOCTYPE html> 
<html>
  <head>
    <title>Account Register</title>
    
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    
    <link rel="stylesheet" href="css/regform/demo.css" />
    <link rel="stylesheet" href="css/regform/sky-forms.css" />
    <link rel="stylesheet" href="css/regform/sky-forms-purple.css" />
    <link rel="stylesheet" href="css/regform/add-on.css" />
    <!--[if lt IE 9]>
      <link rel="stylesheet" href="css/regform/sky-forms-ie8.css">
    <![endif]-->
    
    <script src="js/regform/jquery-1.9.1.min.js"></script>
    <script src="js/regform/jquery.validate.min.js"></script>
    <script src="js/regform/jquery.maskedinput.min.js"></script>
    <!--[if lt IE 10]>
      <script src="js/regform/jquery.placeholder.min.js"></script>
    <![endif]-->    
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <script src="js/regform/sky-forms-ie8.js"></script>
    <![endif]-->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
  
  <body class="bg-purple">
   <?php 
      echo $this->Session->flash();
      echo $this->fetch('content'); 
    ?>
  </body>
</html>

regform/