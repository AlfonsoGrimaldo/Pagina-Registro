<?php
include("con_db.php");
if($conex){
    echo "conexion exitosa a la base de datos"
} else {
    echo "conexion fallida a la base de datos"
}
if(isset($_POST['register'])){
    if(strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['password']) >= 1){
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $password = $_POST['password'];
        $fechareg = date("d/m/y");
        $consulta = "INSERT INTO 'datos'('id', 'nombre', 'email', 'password', 'fecha_reg') VALUES ('$name','$email','$password','$fechareg')";
        $resultado = mysqli_query($conex, $consulta);
        if($resultado){
            ?>
            <h3 class="ok">!Registro realizado correctamemte!</h3>
            <?php
        } else {
            ?>
            <h3 class="bad">!Error al registrar!</h3>
            <?php
        }
    } else {
        ?>
            <h3 class="bad">Rellene todos los campos</h3>
            <?php
    }
}
?>