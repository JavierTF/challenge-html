<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product | CPI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        .reduced-center {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .vertical-center {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .card {
            width: 550px;
            height: 90vh;
            max-height: 90%;
            max-width: 550px;
            z-index: 1;
        }
        .reduced {
            width: 80%;
            height: 80%;
            max-height: 80%;
            max-width: 80%;
        }
        /* body, html {
            background-image: url('./automotive.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
        } */
        .my-color {
            background-color: #0000E6 !important;
            border-color: #0000E6 !important;
            color: #00D0F9 !important;
        }
        .form-check-input:checked {
            width: 20px;
            height: 20px;
            border-radius: 0.15em !important;
            content: "\2713";
            display: inline-block;
            text-align: center;
            font-size: 16px;
            line-height: 18px;
            margin-right: 5px;
        }
    </style>
  </head>
  <body class="vertical-center">
    <div class="d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="col-md-4">
                <div>
                    <span>hjabshd</span>         
                </div>
            </div>
            <div class="col-md-8">
                <div>
                    <img src="./automotive.jpg" />
                </div>
            </div>           
        </div>        
    </div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script>
        const currentUrl = window.location.href;
        function enLocal (){
            if (currentUrl.includes('index') && !localStorage.getItem('mostrado')){
                alert('Bienvenido');
                localStorage.setItem('mostrado', true);
            }
        }
        enLocal();
    </script>
  </body>
</html>