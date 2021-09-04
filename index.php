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
    $myString = "Bienvenido al mundo de la programacion";
    $findMy = "a";
    echo substr("MARINES MENDEZ GALLEGOS" , -8);
    echo strpos($myString,$findMy, 12);

?>