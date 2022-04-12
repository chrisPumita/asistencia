<?php

class MAIN
{
    /** Metodos de esnciptacion/desencriptacion de URL  */

    #Las vistas podran tener acceso a esta funcion para encriptar las peticiones
    public function encryption($string){
        $output=FALSE;
        $key=hash('sha256', SECRET_KEY);
        $iv=substr(hash('sha256', SECRET_IV), 0, 16);
        $output=openssl_encrypt($string, METHOD, $key, 0, $iv);
        $output=base64_encode($output);
        return $output;
    }


    protected static function decryption($string){
        $key=hash('sha256', SECRET_KEY);
        $iv=substr(hash('sha256', SECRET_IV), 0, 16);
        $output=openssl_decrypt(base64_decode($string), METHOD, $key, 0, $iv);
        return $output;
    }

    /** Funcion para limpiar cadenas y evitar inyeccion de sql */
    public static function limpiar_cadena($cadena)
    {
        #elimina espacios dentro de los string
        $cadena = trim($cadena);
        #elimina .\ plecas invertidas
        $cadena = stripslashes($cadena);
        $cadena = str_ireplace("<script>","",$cadena);
        $cadena = str_ireplace("</script>","",$cadena);
        $cadena = str_ireplace("<script src>","",$cadena);
        $cadena = str_ireplace("</script type=>","",$cadena);
        $cadena = str_ireplace("SELECT * FROM","",$cadena);
        $cadena = str_ireplace("DELETE FROM","",$cadena);
        $cadena = str_ireplace("INSERT INTO","",$cadena);
        $cadena = str_ireplace("DROP TABLE","",$cadena);
        $cadena = str_ireplace("DROP DATABASE","",$cadena);
        $cadena = str_ireplace("TRUNCATE TABLE","",$cadena);
        $cadena = str_ireplace("SHOW TABLES","",$cadena);
        $cadena = str_ireplace("SHOW DATABASES","",$cadena);
        $cadena = str_ireplace("<?php","",$cadena);
        $cadena = str_ireplace("?>","",$cadena);
        $cadena = str_ireplace("--","",$cadena);
        $cadena = str_ireplace(">","",$cadena);
        $cadena = str_ireplace("<","",$cadena);
        $cadena = str_ireplace("[","",$cadena);
        $cadena = str_ireplace("]","",$cadena);
        $cadena = str_ireplace("^","",$cadena);
        $cadena = str_ireplace("==","",$cadena);
        $cadena = str_ireplace(";","",$cadena);
        $cadena = str_ireplace("::","",$cadena);

        #elimina .\ plecas invertidas
        $cadena = stripslashes($cadena);
        #elimina espacios dentro de los string
        $cadena = trim($cadena);

        return $cadena;
    }

    /** Verificar  formato de datos */
    protected static function verificar_datos($filtro,$cadena)
    {
        if (preg_match("/^".$filtro."$/",$cadena)) {
            # no tiene errore en el fotmato
            return false;
        } else {
            # Si tiene errores
            return true;
        }
    }

    /** Verificar  las fechas */
    protected static function verificar_fecha($fecha)
    {
        # verificamos que el fot}rmato de la fecha sea correcta
        #checkdate

        #Separamos en un array los valores que vienen divididos en - 01-01-1995
        $valores = explode('-',$fecha);

        if (count($valores)==3 &&  checkdate($valores[1],$valores[2],$valores[0])) {
            return false;
        } else {
            #si tiene errores
            return true;
        }
    }

    #KEYS
    /** Funcion para generar codigos aleatorios propios de la plataforma de prestamos */
    protected static function generar_codigo_aleatorio($letra,$longitud,$numero)
    {
        # A151131-1 -> Ejmeplo de codigo generado
        for ($i=0; $i < $longitud ; $i++) {
            $aleatorio = rand(0,9);
            $letra .= $aleatorio;
        }
        return $letra."-".$numero;
    }
    protected static function gen_user_id($strength = 16)  {
        $input = '0123456789';
        $input_length = strlen($input);
        $random_string = '';
        for($i = 0; $i < $strength; $i++) {
            $random_character = $input[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }
        return $random_string;
    }

    protected static function genIdBIGInt($strength = 3)  {
        $input = '0123456789';
        $input_length = strlen($input);
        $random_string = '';
        $year = date("Y")-2000;
        for($i = 0; $i < $strength; $i++) {
            $random_character = $input[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }
        return $year.date("md").$random_string; //2021816654321, 2021816123456
    }

    protected static function gen_PW_user($strength = 8)  {
        //Carácteres para la contraseña
        $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        $password = "";
//Reconstruimos la contraseña segun la longitud que se quiera
        for($i=0;$i<$strength;$i++) {
            //obtenemos un caracter aleatorio escogido de la cadena de caracteres
            $password .= substr($str,rand(0,62),1);
        }
//Mostramos la contraseña generada
        return $password;
    }

}