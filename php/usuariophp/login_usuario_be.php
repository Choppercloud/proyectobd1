<?php
$link = mysqli_connect("localhost", "root", "", "terminal");

if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT `id`, `nombre`, `email`, `cargo` FROM `usuario` WHERE 1";
$stmt = mysqli_prepare($link, $sql);

session_start();
$correo = $contrasena = "";
$correo_err = $contrasena_err = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $sql = "SELECT `id`, `nombre`, `email`, `password`, `cargo` FROM `usuario` WHERE email = ?";
    if($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, "s", $param_correo);
        $param_correo = trim($_POST["correo"]);
        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_store_result($stmt);
            if(mysqli_stmt_num_rows($stmt) == 1){
                mysqli_stmt_bind_result($stmt, $id, $nombre, $correo, $hashed_contrasena, $usertype);
                if(mysqli_stmt_fetch($stmt)){
                    if(password_verify(trim($_POST["contrasena"]), $hashed_contrasena)){
                        $_SESSION["login"] = true;
                    }
                        $_SESSION["correo"] = $correo;
                        $_SESSION["contrasena"] = $contrasena;
                        if ($usertype == "administrador") {
                            $location = "admin.php";
                        } elseif ($usertype == "supervisor") {
                            $location = "supervisor.php";
                        } elseif ($usertype == "ventanilla") {
                            $location = "ventanilla.php";
                        } else {
                            $location = "welcome.php";
                        }
                        header("location: $location");
                        exit(); 
                      } else{
                          $contrasena_err = "La contraseña es incorrecta. Por favor, intenta de nuevo.";
                      }
                  }
              } else{
                  $correo_err = "No existe una cuenta con ese correo electrónico.";
              }
          } else{
              echo "Algo salió mal, por favor vuelve a intentarlo.";
          }
      }
      mysqli_stmt_close($stmt);
  
  mysqli_close($link);
  ?>
