<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="shortcut icon" href="img/main/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles2.css">
    <title>Contacto</title>
  </head>
  <body>
    <div class="card mb-3" style="max-width: 90%;margin:10%;height:70%;">
  <div class="row no-gutters">
    <div class="col-md-4" style="background-image:
                                      linear-gradient(
                                        rgba(0, 0, 0, 0.5),
                                        rgba(0, 0, 0, 0.5)
                                      ),
                                      url(img/contacto/3.jpg);">

    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Reserva</h5>
        <p class="card-text">Complete el formulario y en menos de 24 hrs sera contactado nuevamente. gracias por elegirnos</p>

        <form class="needs-validation" action="cont.php" method="post" novalidate>
            <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="validationCustom01">Nombre(s)</label>
              <input type="text" name="name" class="form-control" id="validationCustom01" value="" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="validationCustom02">Apellido(s)</label>
              <input type="text" name="lname" class="form-control" id="validationCustom02" value="" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
              <small id="emailHelp" class="form-text text-muted">Nunca compartiremos tu correo con terceros.</small>
            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect1">Servicio a requerir</label>
              <select class="form-control" name="cbox" id="exampleFormControlSelect1">
                <option>Pentesting</option>
                <option>QA Tester</option>
                <option>Desarrollo web</option>
                <option>Desarrollo de apps</option>
              </select>
            </div>

            <div class="form-group">
               <label for="formGroupExampleInput">Telefono (opcional)</label>
               <input type="text" name="tlf" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
            </div>



            <button class="btn btn-success" name="btn" type="submit">Enviar</button>
        </form>

            <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
            'use strict';
            window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
            }, false);
            })();
            </script>


      </div>
    </div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>

<?php
if(isset($_POST['name'],$_POST['lname'],$_POST['email']))
{
  $name = $_POST['name'];
  $last_name = $_POST['lname'];
  $email = $_POST['email'];
  $combobox = $_POST['cbox'];
  $telephone = $_POST['tlf'];

   $destinario = "relibarion@gmail.com";
   $asunto = "contacto de negocio";

   $carta = "De: $name $last_name \n";
   $carta .= "correo. $email  telefono: $telephone\n";

    if(filter_var($email, FILTER_VALIDATE_EMAIL))
      {
        mail($destinario, $asunto, $carta);
      }
}
else {





}
 ?>
