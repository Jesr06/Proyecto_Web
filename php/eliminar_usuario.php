<?php 

    if(!empty($_GET["id"])){
        $id=$_GET["id"];
        $sql=$conexion->query("delete from usuarios where id=$id");
        if($sql==1){
            echo '<div>persona eliminada</div>';
        }else{
            echo '<div>persona no eliminada</div>';
        }
        
    }

?>