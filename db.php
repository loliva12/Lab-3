<?PHP
//Establecer la posibilidad de utilizar variables de sesión


//Definir una constante para usar como salto de línea
define("NEWLINE","<br>");

//Conexión de la base de datos
$host = "localhost:3306";
$DB_name = "vicoli_lab3";
$DB_user = "vicoli";
$DB_pass = "VICl4b0r4t0r102IVA";

$DB_conn = mysqli_connect($host, $DB_user, $DB_pass, $DB_name);
if (!$DB_conn) {
    echo "Error: No se pudo conectar a MySQL." . NEWLINE;
    echo "Nro de error: " . mysqli_connect_errno() . NEWLINE;
    echo "Mensaje de depuración: " . mysqli_connect_error() . NEWLINE;
    exit;
 }else{
    //echo "Connected successfully";
 }

// echo "Éxito: Se realizó una conexión correcta a MySQL." . NEWLINE;

//mysqli_close($DB_conn);



?>