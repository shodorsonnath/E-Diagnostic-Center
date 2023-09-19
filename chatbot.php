<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Page Title -->
    <title>Health Care Point</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="assets_frontend\img\favicon-32x32.png" type="image/x-icon" />

    <!--== Main Style CSS ==-->
    <link href="assets_frontend/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


    
    </style>
</head>

<body class=" bg-img" data-bg-img="assets_frontend/img/photos/testimonial-bg1.jpg">
<div class="wrapper">
        <div class="title">Smart Medical Chatbot</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>Hello, how can I help you?</p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Type something here.." required>
                <button id="send-btn">Send</button>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $("#send-btn").on("click", function(){
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                
                // start ajax code
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
        });
    </script>

    <!--=======================Javascript============================-->

    <!--=== Modernizr Min Js ===-->
    <script src="assets_frontend/js/modernizr.js"></script>
    <!--=== jQuery Min Js ===-->
    <script src="assets_frontend/js/jquery-main.js"></script>
    <!--=== jQuery Migration Min Js ===-->
    <script src="assets_frontend/js/jquery-migrate.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="assets_frontend/js/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="assets_frontend/js/bootstrap.min.js"></script>
    <!--=== jquery UI Min Js ===-->
    <script src="assets_frontend/js/jquery-ui.min.js"></script>
    <!--=== Plugin Collection Js ===-->
    <script src="assets_frontend/js/plugincollection.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    <!--=== Custom Js ===-->
    <script src="assets_frontend/js/custom.js"></script>
   
    </script>
    <!--=== Login Js ===-->
    <script src="asset_login/js/jquery.min.js"></script>
    <script src="asset_login/js/popper.js"></script>
    <script src="asset_login/js/bootstrap.min.js"></script>
    <script src="asset_login/js/main.js"></script>

    

   
</body>

</html>