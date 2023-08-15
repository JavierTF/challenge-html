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
        .azul-inverted {
            background-color: #3636EB !important;
            color: #00D0F9 !important;
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
        .card {
            width: 18rem;
            border-radius: 0px;
            height: auto;
            border: none;
        }
    </style>
  </head>
  <body class="vertical-center container justify-content-center align-items-center" style="max-width: 100vw; background-color: black;">
    <div class="d-flex flex-column px-5" style="width: 73%; height: 100%; background-color: white; /*padding-left: 30px; padding-right: 30px;*/">
        <div class="d-flex gap-2 grid" style="padding-top: 10px;">
            <div class="col-md-4 justify-content-start">
                <div class="card w-100 full-width">
                    <img src="./originales/fantasma.png">
                    <div class="card-body" style="background-color: #F5F5F5;">
                        <p class="card-title" style="font-size: 16px; font-weight: 600; margin-bottom: 11px;">Project name</p>
                        <p class="card-text lh-sm fw-medium" style="font-size: 10px;">Lorem ipsun dolor sit amet, consectetur adipiscing elit. Aenean euismod bidendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
                        <div class="d-flex" style="margin-top: -8px;">
                            <div class="azul-inverted circle" style="margin-right: 5px;">
                                <span>></span>
                            </div>
                            <div><span style="color: #3636EB; font-size: 10px; font-weight: 600;">See project</span></div>
                        </div>                    
                    </div>
                </div>
            </div>     
            <div class="col-md-4 justify-content-start">
                <div class="card w-100 full-width">
                    <img src="./originales/microscopio.png">
                    <div class="card-body" style="background-color: #F5F5F5;">
                        <p class="card-title" style="font-size: 16px; font-weight: 600; margin-bottom: 11px;">Project name</p>
                        <p class="card-text lh-sm fw-medium" style="font-size: 10px;">Lorem ipsun dolor sit amet, consectetur adipiscing elit. Aenean euismod bidendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
                        <div class="d-flex" style="margin-top: -8px;">
                            <div class="azul-inverted circle" style="margin-right: 5px;">
                                <span>></span>
                            </div>
                            <div><span style="color: #3636EB; font-size: 10px; font-weight: 600;">See project</span></div>
                        </div>                    
                    </div>
                </div>
            </div>
            <div class="col-md-4 justify-content-start">
                <div class="card w-100 full-width">
                    <img src="./originales/fantasma.png">
                    <div class="card-body" style="background-color: #F5F5F5;">
                        <p class="card-title" style="font-size: 16px; font-weight: 600; margin-bottom: 11px;">Project name</p>
                        <p class="card-text lh-sm fw-medium" style="font-size: 10px;">Lorem ipsun dolor sit amet, consectetur adipiscing elit. Aenean euismod bidendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
                        <div class="d-flex" style="margin-top: -8px;">
                            <div class="azul-inverted circle" style="margin-right: 5px;">
                                <span>></span>
                            </div>
                            <div><span style="color: #3636EB; font-size: 10px; font-weight: 600;">See project</span></div>
                        </div>                    
                    </div>
                </div>
            </div>    
        </div>
        <div class="d-flex gap-2 grid" style="padding-top: 10px;">
            <div class="col-md-4 justify-content-start">
                <div class="card w-100 full-width">
                    <img src="./originales/fantasma.png">
                    <div class="card-body" style="background-color: #F5F5F5;">
                        <p class="card-title" style="font-size: 16px; font-weight: 600; margin-bottom: 11px;">Project name</p>
                        <p class="card-text lh-sm fw-medium" style="font-size: 10px;">Lorem ipsun dolor sit amet, consectetur adipiscing elit. Aenean euismod bidendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
                        <div class="d-flex" style="margin-top: -8px;">
                            <div class="azul-inverted circle" style="margin-right: 5px;">
                                <span>></span>
                            </div>
                            <div><span style="color: #3636EB; font-size: 10px; font-weight: 600;">See project</span></div>
                        </div>                    
                    </div>
                </div>
            </div>     
            <div class="col-md-4 justify-content-start">
                <div class="card w-100 full-width">
                    <img src="./originales/microscopio.png">
                    <div class="card-body" style="background-color: #F5F5F5;">
                        <p class="card-title" style="font-size: 16px; font-weight: 600; margin-bottom: 11px;">Project name</p>
                        <p class="card-text lh-sm fw-medium" style="font-size: 10px;">Lorem ipsun dolor sit amet, consectetur adipiscing elit. Aenean euismod bidendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
                        <div class="d-flex" style="margin-top: -8px;">
                            <div class="azul-inverted circle" style="margin-right: 5px;">
                                <span>></span>
                            </div>
                            <div><span style="color: #3636EB; font-size: 10px; font-weight: 600;">See project</span></div>
                        </div>                    
                    </div>
                </div>
            </div>
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