<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?=$title;?> </title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link rel="stylesheet" href="index.css">
  <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

  <script type="text/javascript">
   
   function ajax() 
   {
      if (window.XMLHttpRequest)
      {
        // untuk IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
      }
      else
      {
        // untuk IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
    
      xmlhttp.onreadystatechange=function()
      {
         if (xmlhttp.readyState==4 && xmlhttp.status==200)
         {
           // hasil pembacaan script date.php akan ditampilkan di komponen id="hasil"
           document.getElementById("hasil").innerHTML = xmlhttp.responseText;
         }
      }
    
      // menjalankan script date.php secara asynchronous
      xmlhttp.open("GET","./user/active.php", true);
      xmlhttp.send();
  
      // refresh time 1 detik (1000 ms)
      setTimeout("ajax()", 1000);
   }  
   </script>






</head>

<body id="page-top" onload="ajax()">

  <!-- Page Wrapper -->
  <div id="wrapper">