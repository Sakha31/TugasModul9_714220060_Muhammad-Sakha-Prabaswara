<?php
if(isset($HTTP_COOKIE_VARS["cookie_no_induk"]))
{
    echo("isi data <b>".$HTTP_COOKIE_VARS["cookie_no_induk"]."</b><br>");
    echo("CLick ,a href=\"cookie_destroy.php\">next</a>untuk menghapus id!");
}else
{
   header("Location: cookie.php");
    exit;
}
?>