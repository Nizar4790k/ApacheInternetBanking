

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
    


    

 
 







   





   
     
   
    
    
