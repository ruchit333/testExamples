
    <?php
            $string_url="www.google";
            $reg_exp = "/^(http(s?):\/\/)?(www\.)+[a-zA-Z0-9\.\-\_]+(\.[a-zA-Z]{2,3})+(\/[a-zA-Z0-9\_\-\s\.\/\?\%\#\&\=]*)?$/";
            if(preg_match($reg_exp, $string_url) == TRUE){
            echo "URL is valid format";
            }
            else{
            echo "URL is invalid format";
            }
    ?>