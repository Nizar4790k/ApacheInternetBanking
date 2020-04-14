

<?php 

echo '
    <!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
       
       
<h1>Prestamos</h1>

<p>
    <a href="create.html">Create</a> 
   
    
</p>
<table class="table" id="tablon">
    <tr>
        <th>
            <label>Codigo de Prestamo</label>
        </th>

        <th>
           <label>Monto</label>
        </th>
        <th>
          <label>Tiempo</label>
        </th>
        <th>
            <label>Unidad de tiempo</label>
        </th>
        
        <th>
            <label>Cuota </label>
        </th>
        
        <th>
            <label>Codigo de Cliente </label>
        </th>
        
      
        
        <th></th>
    </tr>
    ';
    
          $pdo=new PDO("mysql:host=127.0.0.1;dbname=apachenetbanking","root", "root12");
     $data = $pdo->query("SELECT * FROM Prestamo")->fetchAll();

 
    foreach ($data as $row)
    {
    echo '<tr> ';
    echo  '<td>';
    echo $row["idPrestamo"];
     $idPrestamo=$row["idPrestamo"];
    echo '</td>';

    echo  '<td>';
    echo $row["monto"];
    echo '</td>';

    echo  '<td>';
    echo $row["tiempo"];
    echo '</td>';
    
    echo  '<td>';
    echo $row["unidadTiempo"];
    echo '</td>';
    
    echo  '<td>';
    echo ($row["monto"]/$row["tiempo"]." ".$row["unidadTiempo"]);
    echo '</td>';
    
      echo  '<td>';
    echo ($row["idCliente"]);
    echo '</td>';
    
    
    
     echo"<td> ".
            "<a href=edit.php?idPrestamo=",urlencode($idPrestamo),">Edit</a>". "| <a href=details.php?idPrestamo=",urlencode($idPrestamo),">Details</a>". "| <a href=delete.php?idPrestamo=",urlencode($idPrestamo),">Delete</a>".
             
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
    


    

 
 







   





   
     
   
    
    
