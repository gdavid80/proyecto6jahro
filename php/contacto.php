<?php // a este codigo lo utilizo cuando subo mi pagina 
if (isset($_POST['asunto']) && isset($_POST['mensaje']) && isset($_POST['email'])){
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $correo_origen = $_POST['email'];
    $correo_destino = 'info@jahro.com.ar'; // aqui voy a enviar los correos
    $cabecera = 'from : '.$correo_origen;
    $resultado = mail ($correo_destino, $asunto, $mensaje, $cabecera);
    if($resultado){
        echo '<h1>envio exitoso</h1>';
        header('Refresh:1;url=../index.html');
    }else{
        echo '<h1>el correo no pudo enviarse</h1>';
        header('Refresh:1;url=../index.html');
    }
}
?>

