<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | CPI</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon2.ico">
    <?php include './importaciones.php';?>
    <style>
      a:visited {
        color: green;
      }
    </style>
  </head>
  <body>
    <?php include './menu.php';?>
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