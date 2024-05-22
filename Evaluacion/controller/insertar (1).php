
<?php
    include ('../conexion.php');
	$link = conectaDB();

    if(isset($_POST['guardar'])){	

        $Nombre= $_POST['txtNom'];
        $Precio= $_POST['txtPre'];
        $Ext= $_POST['txtExt'];
        
        $query = "INSERT INTO tb_productos(idPro,Nombre,Precio,Ext) VALUES (NULL,'$Nombre',$Precio,$Ext)";

        $result = mysqli_query($link,$query);

        if($result){
             Header("Location: ../dashboard.php");
        } else {
            echo "<script> alert('Algo salio mal, intentalo de nuevo'); </script>";
        }
        
         mysqli_free_result($result);
        mysqli_close($link);

       

    }

?>