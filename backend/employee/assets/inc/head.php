<head>
    <meta charset="utf-8" />
    <title>Hospital Management Information System -A Super Responsive Information System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="MartDevelopers" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png">

    <!-- font awasome -->
    <script src="https://kit.fontawesome.com/7dd87cb521.js" crossorigin="anonymous"></script>

    <!-- Plugins css -->
    <link href="assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">


    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- Loading button css -->
    <link href="assets/libs/ladda/ladda-themeless.min.css" rel="stylesheet" type="text/css" />

    <!-- Footable css -->
    <link href="assets/libs/footable/footable.core.min.css" rel="stylesheet" type="text/css" />

    <!--Load Sweet Alert Javascript-->
    <script src="assets/js/swal.js"></script>

    <!--Inject SWAL-->
    <?php if(isset($success)) {?>
    <!--This code for injecting an alert-->
    <script>
    setTimeout(function() {
            swal("Success", "<?php echo $success;?>", "success");
        },
        100);
    </script>

    <?php } ?>

    <?php if(isset($err)) {?>
    <!--This code for injecting an alert-->
    <script>
    setTimeout(function() {
            swal("Failed", "<?php echo $err;?>", "Failed");
        },
        100);
    </script>

    <?php } ?>

    <style>
    .custom-select-container {
        position: relative;
        width: 100%;
    }

    .custom-select-icon {
        position: absolute;
        top: 75%;
        right: 15px;
        transform: translateY(-50%);
    }
    </style>

</head>