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
        
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


    </head>
    <body>
        
    
        
        <form method="POST" action="edit2.php">


    <div class="form-horizontal">
        <h4> Editar Prestamo</h4>
        <hr />
        
          <div class="form-group">
            <label>Codigo de Prestamo:</label>
            <div class="col-md-10">
                <input type="text" name="codigoPrestamo" class="form-control" readonly value='.$row["idPrestamo"] . '>
               <!-- @Html.ValidationMessageFor(model => model.Nombre, "", new { @class = "text-danger" }) --->
            </div>
        </div>

        <br>



        <div class="form-group">
            <label>Monto</label>
            <div class="col-md-10">
                <input type="text" name="monto" class="form-control" value='.$row["monto"] . '>
               <!-- @Html.ValidationMessageFor(model => model.Nombre, "", new { @class = "text-danger" }) --->
            </div>
        </div>

        <br>
        
        <div class="form-group">
            <label>Tiempo</label>
            <div class="col-md-10">
                <input type="text" name="tiempo" class="form-control" value ='.$row["tiempo"].'>
             
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
                        
                    
                    echo '  <select name="unidadTiempo" class="form-control"">
                     <option value="mensual" selected >Mensual</option>
                     <option value="anual">Anual</option>
                 
                </select>';
                    }else{
                          echo '  <select name="unidadTiempo" class="form-control">
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
                <input type="text" name="idCliente"  class="form-control" value='.$row["idCliente"] .'>
                
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
                <input type="submit" class="btn-default" name ="editButton" value="editar"  />
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
   
   
   
   
   
   
   
   



