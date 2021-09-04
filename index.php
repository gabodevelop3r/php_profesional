<?php 

    /***
     *  MOSTRAR DATOS  
     * 
     */

    /* 
        echo "hola ","mundo";
        print 'hola'; */

    /***
     *  COMO UTILIZAR COMILLAS
     * 
     */

    /* 
        $animal = "panda";
        echo "HOLA \"$animal \n adios\"";
        echo "Tu ganas mucho dinero \$_$";
        echo 'Hola $animal \n "comillas " \'T\'';
    */

    /***
     *  SINTAXIS HEREDOC Y NOWDOC
     * 
     */
    /* 
        $heredoc = <<<FRASE
                "CON ESFUERZO Y PERSEVERANCIA \n PODRAS ALCANZAR TUS METAS" $animal
                'HOLA'
            FRASE;
        $test = 'Hola';
        $newdoc = <<<'TEXTO'
                    "CON ESFUERZO Y PERSEVERANCIA \n PODRAS ALCANZAR TUS METAS $test"
                    'HOLA'
                TEXTO;
        echo $newdoc; 
    */

    /***
     * CONVERSION Y TIPOS
     * 
     */

    /*     $name = 'JUANITO';
        $price = 2021.33;
        $age = 12;
        $isDog = false;
        # FORZAR A UNA VARIABLE A QUE TOME UN TIPO DE DATO
        $price = (int) $price;
        var_dump (strval($price));
        $name = (bool) $name;
        echo getType($price);
        echo var_dump($price);
        echo var_dump($name); 
    */

    /*    
         $word1 = 'Codigo';
        $word2 = 'Facilito';
        echo "Hola bienvenido a {$word1}{$word2}sss"; 
    */

    /**
     *  EXTRAER Y BUSCAR
     * 
     */

    /* 
        $myString = "Bienvenido al mundo de la programacion";
        $findMy = "a";
        echo substr("MARINES MENDEZ GALLEGOS" , -8);
        echo strpos($myString,$findMy, 12); 
    */

    /* 
        $search = '9';
        $replace = '*';
        $text = '91 75 1A EC 9A C7';
        str_replace( $search, $replace, $text, $count ); #reemplazar texto

        $arg1 = 1994;
        $arg2 = 'PHP';
        $text = 'EN %2$s fue creado %1$d';
        echo sprintf( $text, $arg1, $arg2 ); # formateo de text 
    */


    /**
     * PCRE
     * 
     */
    $text = '21/10/2018';
    $regex = '/Le{2,3}r/';
    echo preg_match($regex ,$text);
    echo preg_match ("/([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)(\d{4})/",$text);

?>