

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
       
       
<h1>Pacientes</h1>

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


     
     echo'<tr> \n
     <td>';
        
    echo $row['idCliente']."<br />\n";
   
    echo'<tr> \n
     <td>';
     
        echo $row['nombre']."<br />\n";
           
     echo'<tr> \n
     <td>';
             
        echo $row['apellido']."<br />\n";
             
      echo'<tr> \n
     <td>';
             
      echo $row['cedula']."<br />\n";
             
      echo'<tr> \n
     <td>';
      
     echo $row['telefono']."<br />\n";
     echo'<tr> \n  <td>';
     
     echo $row['email']."<br />\n";
     echo'<tr> \n  <td>';
     
     echo $row['sexo']."<br />\n";
     echo'<tr> \n  <td>';
     

      /*
      
      @Html.ActionLink("Edit", "Edit", new { id = item.IdPaciente }) |
        @Html.ActionLink("Details", "Details", new { id = item.IdPaciente }) |
        @Html.ActionLink("Delete", "Delete", new { id = item.IdPaciente })
        */
     echo'<tr> \n
     <td>';
        


     echo '</table>';


 echo '
<br /> \n
<br /> \n
<br /> \n';
    
 echo '       
 </body> \n
</html> \n ';




    }






   
     
   
    
    
