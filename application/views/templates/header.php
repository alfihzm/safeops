<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> <?= $judul ?> </title>
    <link rel="icon" href="<?php echo base_url('favicon.ico'); ?>" type="image/x-icon">
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <script src="<?= base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>



    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        .sidebar-heading {
            margin-bottom: 5px;
        }
        .nav-item {
            margin-top: -15px;
        }

        .btn-primary-responsive-width {
            width: 60%;
            /* Menetapkan lebar maksimum */
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .text-warning {
            position: relative;
            overflow: hidden;
        }
        .text-overlay {
            position: absolute;
            top: 8%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            text-align: center;
        }
        .text-warning:before {
            content: '';
            position: absolute;
            top: 0;
            right: 100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(to left, transparent, rgba(250, 255, 255, 0.8), transparent);
            animation: uhuyy 2.5s infinite linear;
        }

        .ytp-chrome-top, .ytp-cued-thumbnail-overlay, .ytp-cued-thumbnail-overlay-image {
            display: none !important;
        }

        @keyframes uhuyy {
            0% {
            transform: translateX(100%);
            }
            100% {
            transform: translateX(-150%);
            }
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
    <script type="text/javascript" src='https://cdn.tiny.cloud/1/mlvvrqzvo7nqpxb7wsk8zjvq1stubfl8y3ti5dm6sgj29zvg/tinymce/6/tinymce.min.js' referrerpolicy="origin">
    </script>
    <script>
        tinymce.init({
            selector: '#myTextarea'
        });
        document.getElementById('toggleKomentar').addEventListener('change', function() {
        var kolomInput = document.getElementById('kolomInput');
        kolomInput.classList.toggle('hidden', !this.checked);

        // Bersihkan nilai textarea jika checkbox tidak dicentang
        if (!this.checked) {
            document.getElementById('komentar').value = '';
        }
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">