<?php
/*este es una biblioteca de msql para la cconecion  el base de datos */

$conn = mysqli_connect(
    'localhost', //este es el servidor 
    'root',   // este es el usuario administrador
    '',       // aqui debe de ir la contrase;a
    'php_msql_crud'  // esta es la base de datos
);


if(isset($conn)){
   // echo 'DB is connected';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="col-md-8">
        <table class="table table-bordered">
        <!-- theaad -->
        <thead>
            <tr>
            <th>titulo</th>
            <th>descripcion</th>
            <th>fecha creacion</th>
            <th>actions</th>
            </tr>
        </thead>
        <!-- para rellenar la table debo de hacer una consulta de php ejemplo -->
        <tbody>
            <?php  
             $query = "SELECT * FROM task";
             $result_tasks = mysqli_query($conn, $query);
            while($row = mysqli_fetch_array($result_tasks)){ ?>  <!--- con este while recoro mi base de datos para verificar e imprimir los datos en la tabla-->
                
                <tr>
                <?php if($row['id'] != null){?>
                <td><?php  echo $row['titulo']?></td>
                <td><?php echo $row['descripcion']?></td>
                <td><?php echo $row['created_at']?></td>
                <td><a href="edit.php?id=<?php echo $row['id']?>"> editar </a> 
                <a href="delete_task.php?id=<?php echo $row['id']?>"> eliminar</a> 
                <a href="edit.php?id=<?php echo $row['id']?>"> </a>
                </tr>
           <?php }?>
           <?php } ?>
        
        
        </tbody>
        </table>

 </div>
</body>
</html>