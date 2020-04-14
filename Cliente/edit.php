<?php

 include  ( __DIR__."/Cliente.php");

$pdo=new PDO("mysql:host=127.0.0.1;dbname=apachenetbanking","root", "root12");





$idCliente=$_GET['idCliente'];


     
    
   $data = $pdo->query("SELECT * FROM CLIENTE WHERE idCliente= $idCliente")->fetchAll();
   
   $cliente =null;
   
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
        <h4> Crear Cliente</h4>
        <hr />
        
          <div class="form-group">
            <label>Codigo de Cliente:</label>
            <div class="col-md-10">
                <input type="text" name="codigoCliente" readonly value='.$row["idCliente"] . '>
               <!-- @Html.ValidationMessageFor(model => model.Nombre, "", new { @class = "text-danger" }) --->
            </div>
        </div>

        <br>



        <div class="form-group">
            <label>Nombre</label>
            <div class="col-md-10">
                <input type="text" name="nombre" value='.$row["nombre"] . '>
               <!-- @Html.ValidationMessageFor(model => model.Nombre, "", new { @class = "text-danger" }) --->
            </div>
        </div>

        <br>
        
        <div class="form-group">
            <label>Apellido</label>
            <div class="col-md-10">
                <input type="text" name="apellido" value ='.$row["apellido"].'>
             
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
            
            
             <label>Cedula</label>
             <!--@Html.LabelFor(model => model.Cedula, htmlAttributes: new { @class = "control-label col-md-2" })-->
            <div class="col-md-10">
                <input type="text" name="cedula" value='.$row["cedula"].'>
                
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
            
          <label>Direccion</label>
             <!--@Html.LabelFor(model => model.Cedula, htmlAttributes: new { @class = "control-label col-md-2" })-->
            <div class="col-md-10">
                <input type="text" name="direccion" value='.$row["direccion"] .'>
                
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
            <label>Email</label>
            <div class="col-md-10">
                <input type="text" name="email" value='.$row["email"].'>
             
                <!--
                @Html.ValidationMessageFor(model => model.Cedula, "", new { @class = "text-danger" })
                
                @if (ViewBag.CedulaDuplicada)
                {
                    @Html.ValidationMessage("Cedula","La cedula que acaba de ingresar esta duplicada",new { @class = "text-danger" })
                }
                    -->
            </div>
        </div>
            
            
                 <div class="form-group">
            <label>Telefono</label>
            <div class="col-md-10">
                <input type="text" name="telefono" value='.$row["telefono"] .'>
             
                <!--
                @Html.ValidationMessageFor(model => model.Cedula, "", new { @class = "text-danger" })
                
                @if (ViewBag.CedulaDuplicada)
                {
                    @Html.ValidationMessage("Cedula","La cedula que acaba de ingresar esta duplicada",new { @class = "text-danger" })
                }
                    -->
            </div>
        </div>
          
            <br/>
        
            <div>
          <label>Sexo</label>
             <!--@Html.LabelFor(model => model.Cedula, htmlAttributes: new { @class = "control-label col-md-2" })-->
            <div class="col-md-10">
                <label>Masculino</label>';
   
                
                if($row["sexo"]=="masculino"){
                     echo '<input type="radio" name="sexo" value="masculino" checked>
                <br/>
                <label>Femenino</label>
                <input type="radio" name="sexo" value="femenino">';
                } else {
                    
                        echo '<input type="radio" name="sexo" value="masculino" >
                <br/>
                <label>Femenino</label>
                <input type="radio" name="sexo" value="femenino" checked>';
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
        
        
        <br>
        <div>

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
   
   
   
   
   
   
   
   



