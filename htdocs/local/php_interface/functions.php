<?php

    function print_c($message)
    {
        if ( is_array($message) ) {
            echo '<script>console.log('.json_encode($message).')</script>';
        } else {
            echo '<script>console.log("'.$message.'")</script>';
        }
    }


    function custom_dd($arr)
    {
        echo '<pre>';
        var_dump($arr);
        echo '</pre>';
    }