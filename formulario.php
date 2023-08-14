<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario | CPI</title>
    <?php include './importaciones.php';?>
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
            height: 100vh; /* Usar el 100% del alto de la ventana */
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
        body, html {
            background-image: url('./automotive.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
        }
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
  <body >
    <div class="vertical-center">
        <div class="card">
            <span class="text-end me-3 mt-2 text-secondary">x</span>
            <hr>
            <div class="reduced reduced-center mx-auto">
                <div class="card-body align-middle flex-column ">
                    <h5 class="card-title d-flex justify-content-center fs-2 pb-4 fw-semibold">Select country and language</h5>
                    <form class="form-floating">
                        <div class="form-group mb-3">
                            <label for="country">Country*</label>
                            <select id="country" class="form-control form-select fw-medium">
                                <option value="españa" selected>España</option>
                            </select>
                        </div>
                        <div class="form-group mb-5">
                            <label for="language">Language*</label>
                            <select id="language" class="form-control form-select fw-medium">
                                <option value="asd">Español</option>
                            </select>
                        </div>                     
                        <div class="form-check mb-5">
                            <input class="form-check-input my-color" type="checkbox" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked">
                                Save preferences
                            </label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="btn btn-primary my-color px-4 py-1 rounded-5"><span class="fw-bold">></span>    Select</a>
                        </div>
                    </form>
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