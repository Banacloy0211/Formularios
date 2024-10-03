<?php
    if (isset($_POST['aficion'])){
        $afic = $_POST['aficion'];
    }
    if (isset($_POST['menu'])){
        $menu_fav = $_POST['menu'];
    }
    $aficion= implode(",", $afic);
    $menu = implode(",", $menu_fav);
    
?>