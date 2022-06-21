<?php

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$object = $_POST['object'];
$content = $_POST['message'];
if (isset($_POST['submit'])) {
    # code...
    $errors = [];
    if(!isset($_POST['full_name']) || isset($_POST['full_name']) && empty($_POST['full_name']) ){
        $errors['full_name'] = 'ce champs est requis';
    }
    if(!isset($_POST['email']) || isset($_POST['email']) && empty($_POST['email']) ){
        $errors['email'] = 'ce champs est requis';
    }
    if(!isset($_POST['object']) || isset($_POST['object']) && empty($_POST['object']) ){
        $errors['object'] = 'ce champs est requis';
    }
    if(!isset($_POST['message']) || isset($_POST['message']) && empty($_POST['message']) ){
        $errors['message'] = 'ce champs est requis';
    }
    if (count($errors) > 0) {
        
    } else {
        # code...
        $success = 'le champs a ete rempli';
    }
    
} else {
    # code...
}

die(var_dump($_POST));
?>