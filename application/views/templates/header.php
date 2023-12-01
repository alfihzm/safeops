<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> <?= $judul ?> </title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
  <style>
    .btn-primary-responsive-width {
      width: 60%;
      /* Menetapkan lebar maksimum */
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
  </style>
  <script>
    function togglePassword() {
      var passwordField = document.getElementById("password");
      if (passwordField.type === "password") {
        passwordField.type = "text";
      } else {
        passwordField.type = "password";
      }
    } 
  </script>
  <script
    type="text/javascript"
    src='https://cdn.tiny.cloud/1/mlvvrqzvo7nqpxb7wsk8zjvq1stubfl8y3ti5dm6sgj29zvg/tinymce/6/tinymce.min.js'
    referrerpolicy="origin">
  </script>
    <script>
        tinymce.init({
            selector: '#myTextarea'
        });
    </script>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">