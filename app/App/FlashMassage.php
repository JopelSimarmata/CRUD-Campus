<?php

namespace Jopel\Mhs\App;

class FlashMassage 
{
    public static function setFlashMessage($status, $message){
        unset($_SESSION["FlashMessage"]);
        $_SESSION["FlashMessage"] = [
            "status" => $status,
            "message" => $message
        ];
    }

    public static function flashMessage(){
        if(isset($_SESSION["FlashMessage"])){
            $status = $_SESSION["FlashMessage"]["status"];
            $message = $_SESSION["FlashMessage"]["message"];
            
            echo "<script>
                alert('Status: {$status}\\nMessage: {$message}');
            </script>";

            unset($_SESSION["FlashMessage"]);
        }
    }
}