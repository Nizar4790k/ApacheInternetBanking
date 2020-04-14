<?php

 include  ( __DIR__."/Cliente.php");

$pdo=new PDO("mysql:host=127.0.0.1;dbname=apachenetbanking","root", "root12");





$idPrestamo=$_GET['idPrestamo'];


     
    
   $data = $pdo->query("SELECT * FROM PRESTAMO WHERE idPrestamo= $idPrestamo")->fetchAll();
   

   
   foreach($data as $row){
       
   
   

   
   echo'
   <!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <title>Cliente</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
    
        
        <form method="POST" action="edit2.php">


    <div class="form-horizontal">
        <h4> Editar Cliente</h4>
        <hr />
        
          <div class="form-group">
            <label>Codigo de Prestamo:</label>
            <div class="col-md-10">
                <input type="text" name="codigoPrestamo" readonly value='.$row["idPrestamo"] . '>
               <!-- @Html.ValidationMessageFor(model => model.Nombre, "", new { @class = "text-danger" }) --->
            </div>
        </div>

        <br>



        <div class="form-group">
            <label>Monto</label>
            <div class="col-md-10">
                <input type="text" name="monto" value='.$row["monto"] . '>
               <!-- @Html.ValidationMessageFor(model => model.Nombre, "", new { @class = "text-danger" }) --->
            </div>
        </div>

        <br>
        
        <div class="form-group">
            <label>Tiempo</label>
            <div class="col-md-10">
                <input type="text" name="tiempo" value ='.$row["tiempo"].'>
             
                <!--
                @Html.ValidationMessageFor(model => model.Cedula, "", new { @class = "text-danger" })
                
                @if (ViewBag.CedulaDuplicada)
                {
                    @Html.ValidationMessage("Cedula","La cedula que acaba de ingresar esta duplicada",new { @class = "text-danger" })
                }
                    -->
            </div>
        </div>

         <br>
        
         <div class="form-group">
            
            
             <label>Modalidad de tiempo</label>
             <!--@Html.LabelFor(model => model.Cedula, htmlAttributes: new { @class = "control-label col-md-2" })-->
            <div class="col-md-10">';
           
                    if($row["unidadTiempo"]=="mensual"){
                        
                    
                    echo '  <select name="unidadTiempo">
                     <option value="mensual" selected >Mensual</option>
                     <option value="anual">Anual</option>
                 
                </select>';
                    }else{
                          echo '  <select name="unidadTiempo">
                     <option value="mensual"  >Mensual</option>
                     <option value="anual" selected>Anual</option>
                 
                </select>';
                    }
                
                echo '
                <!--
                @Html.ValidationMessageFor(model => model.Cedula, "", new { @class = "text-danger" })
                
                @if (ViewBag.CedulaDuplicada)
                {
                    @Html.ValidationMessage("Cedula","La cedula que acaba de ingresar esta duplicada",new { @class = "text-danger" })
                }
                -->

            </div>
            
        </div>
        
        <div>
        
            <br>
            
          <label>Codigo de cliente</label>
             <!--@Html.LabelFor(model => model.Cedula, htmlAttributes: new { @class = "control-label col-md-2" })-->
            <div class="col-md-10">
                <input type="text" name="idCliente" value='.$row["idCliente"] .'>
                
                <!--
                @Html.ValidationMessageFor(model => model.Cedula, "", new { @class = "text-danger" })
                
                @if (ViewBag.CedulaDuplicada)
                {
                    @Html.ValidationMessage("Cedula","La cedula que acaba de ingresar esta duplicada",new { @class = "text-danger" })
                }
                -->

            </div>
            
        </div>
            
            
            </div>
            <br>
            
            

        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <input type="submit" name ="editButton" value="editar"  />
            </div>
        </div>
    </div>
    
    <br>
    <br>
<div>
    <a href="index.html">Volver a la lista</a>
    
</div>
 </form>

    </body>
</html>
';
   }
   
   
   
   
   
   
   
   



