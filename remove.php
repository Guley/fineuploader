<?php

if(isset($_REQUEST['remove']) && !empty($_REQUEST['remove'])){
    unlink($_REQUEST['remove']);
   echo 1;

}else{
    echo 0;
}
?>