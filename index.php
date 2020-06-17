<?
echo "IP del cliente: ".get_client_ip();
echo "<br>Hostname: ".gethostname();
echo "<br>Date ".date("d/m/Y H:i:s");
echo "<br>Uname ".php_uname();
echo "<br> Datos de servidor<br>";
echo $_SERVER['SERVER_ADDR']."(ip)<br/>"; //Imprime la IP del servidor
echo $_SERVER['SERVER_NAME']."(nombre)<br/>"; //Imprime el nombre del servidor
echo $_SERVER['SERVER_SOFTWARE']."(software)<br/>"; //Imprime el software que usa el servidor
echo $_SERVER['SERVER_PROTOCOL']."(protocolo)<br/>"; //Imprime el protocolo usado
echo $_SERVER['REQUEST_METHOD']."(method)<br/>"; //Imprime el método de petición empleado
echo $_SERVER['REQUEST_TIME']."(request time)<br/>";  //Imprime el tiempo de respuesta
echo $_SERVER['HTTP_USER_AGENT']."(user agent)<br/>"; /*Imprime la información de S.O y navegador del cliente*/
echo $_SERVER["REMOTE_ADDR"]."(remote addr)<br/>";  //Imprime la dirección IP del cliente
/*Imprime puerto empleado por la máquina del usuario para comunicarse con el servidor web. */
echo $_SERVER["REMOTE_PORT"]."(remote port)<br/>"; 
echo $_SERVER['SERVER_ADDR']."(server addr)<br/>";

echo "<br>Directorio de trabajo del script:".getcwd();
echo "<br>";
echo "<br>";
phpinfo();



function get_client_ip() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
           $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }
?>