<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product | CPI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="./css/all.css" rel="stylesheet">
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
        .imagen {
            height: 97vh;
            max-height: 97vh;
            object-fit: cover;
            width: 670px;
        }
        .azul {
            color: #3636EB;
        }
        .linea span {
            display: block;
        }
        .parrafo p {
            display: block;
            font-size: 12px;
            font-weight: 500;          
        }
        .highlight {
            font-size: 12px;
        }
        .sub {
            font-size: 10px;
        }
        .gris {
            color: lightgray;
        }
        .circle {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background-color: #F5F5F5;
            margin-top: 3px;
        }
        .circle span {
            /* padding-bottom: 10px; */
            margin-left: 8px;
            margin-top: 1px;
            font-size: 12px;
            font-weight: 900;
            position: absolute;
        }
    </style>
  </head>
  <body class="vertical-center container justify-content-center align-items-center" style="max-width: 100vw; background-color: black;">
    <div class="row" style="width: 85%; background-color: white;">
        <div class="col-md-6 vertical-center justify-content-start" style="width: 550px;">
            <div style="margin-left: 50px;">
                <p class="azul highlight"><strong>Highlights</strong></p>
                <div class="linea">
                    <h1 class="fw-bold">Grid your part</h1>
                    <h1 class="fw-bold" style="margin-top: -10px;">in a single set-up</h1>
                </div>
                <div class="linea parrafo" style="width: 360px;">
                    <p style="margin-bottom: 6px;">The LG performs multiple grinding and measuring operations in a single set-up, so you can start and finish your part in the same cycle. Combine several grinding wheelheads and avoid stopping the machine for each operation. Which ones do you choose?</p>
                    <p style="margin-bottom: 6px;">External, faces, cones, unround, contours, internal...</p>
                    <p style="margin-bottom: 6px;">If you need to grind multiple parts on a simgle machine, the LG has also elements to change references quickly: movable tailstock, automation systems, counter heads...</p>      
                </div>
                <div class="d-inline-flex" style="margin-top: 10px;">
                    <div>
                        <span class="azul sub"><strong>1/4</strong></span>
                    </div>
                    <div>
                        <span class="gris sub" style="margin-left: 10px;"><strong>|</strong></span>
                    </div>
                    <div class="circle" style="margin-left: 12px;">
                        <span style="color: gray;"><strong><</strong></span>
                    </div>
                    <div class="azul circle" style="margin-left: 6px;">
                        <span>></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <img class="imagen mt-2" src="./device.jpg" />
        </div>           
    </div>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script>
        const currentUrl = window.location.href;
        if (currentUrl.includes('index') && !localStorage.getItem('mostrado')){
            alert('Bienvenido');
            localStorage.setItem('mostrado', true);
        }
    </script>
  </body>
</html>