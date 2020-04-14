

<?php 

echo '
    <!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
    <body>
       
       
<h1>Clientes</h1>

<p>
    <a href="create.html">Create</a> |
    <input type="button" value="Export to PDF" onclick="exportToPdf();" />
    
</p>
<table class="table" id="tablon">
    <tr>
        <th>
            <label>Codigo de Cliente</label>
        </th>

        <th>
           <label>Nombre</label>
        </th>
        <th>
          <label>Apellido</label>
        </th>
        <th>
            <label>Cedula</label>
        </th>
        
        <th>
            <label>Telefono</label>
        </th>
        
          <th>
            <label>Direccion</label>
        </th>
        
        <th>
            <label>Email</label>
        </th>
        
         <th>
            <label>Sexo</label>
        </th>
        
        
        <th></th>
    </tr>
    ';
    
          $pdo=new PDO("mysql:host=127.0.0.1;dbname=apachenetbanking","root", "root12");
     $data = $pdo->query("SELECT * FROM CLIENTE")->fetchAll();

 
    foreach ($data as $row)
    {
    echo '<tr> ';
    echo  '<td>';
    echo $row["idCliente"];
    $idCliente=$row["idCliente"];
    echo '</td>';

    echo  '<td>';
    echo $row["nombre"];
    echo '</td>';

    echo  '<td>';
    echo $row["apellido"];
    echo '</td>';
    
    echo  '<td>';
    echo $row["cedula"];
    echo '</td>';
    
     echo  '<td>';
     echo $row["telefono"];
    echo '</td>';
    
    echo  '<td>';
    echo $row["direccion"];
    echo '</td>';
    
    echo  '<td>';
    echo $row["email"];
    echo '</td>';
    
    echo  '<td>';
    echo $row["sexo"];
    echo '</td>';
    
     echo"<td> ".
            "<a href=edit.php?idCliente=",urlencode($idCliente),">Edit</a>". "| <a href=details.php?idCliente=",urlencode($idCliente),">Details</a>". "| <a href=delete.php?idCliente=",urlencode($idCliente),">Delete</a>".
             
            "</td>";
     
     /*
            . "| <a href=''>Detalles</a>  | <a href=''>Eliminar</a> ". 
             
             */
    echo' </tr>';
    
       
    
    
    }
    echo '</table>';
 
    
    echo '<br />';
    echo '<br />';
    echo '<br />';
    
    echo '</body>';
    echo '</html>';
    


    

 
 







   





   
     
   
    
    
