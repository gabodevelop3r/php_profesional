<?php 

    /***
     *  MOSTRAR DATOS  
     * 
     */
    echo "hola ","mundo";
    print 'hola';

    /***
     *  COMO UTILIZAR COMILLAS
     * 
     */
    $animal = "panda";
    echo "HOLA \"$animal \n adios\"";
    echo "Tu ganas mucho dinero \$_$";
    echo 'Hola $animal \n "comillas " \'T\'';


    /***
     *  SINTAXIS HEREDOC Y NOWDOC
     * 
     */
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



?>