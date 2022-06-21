<?php

    define("DSN", "mysql:host=localhost; dbname=Contact;port=3306;charset=utf8");
    define("USERNAME","root");
    define("PASSWORD", "");

    #this function permit us to initialize database connection
    function chaineConnexion(){
        $PDO = new PDO(DSN, USERNAME,PASSWORD);
        $PDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $PDO;
    }
    #this function permit us to prepare REQUEST
    function request($SQL, $PARAMS = null){
        $PDO = chaineConnexion();
        $QUERY = $PDO->PREPARE($SQL);
        if ($PARAMS == null) {
            # code...
            $QUERY->execute();
        } else {
            # code...
            $QUERY->execute($PARAMS);
        }
        return $QUERY;
        
    }
    
?>