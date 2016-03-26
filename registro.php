<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="test.js"></script>
<script type="text/javascript" src="jquery-1.11.1.min.js"></script>
<title>Cabecera y pie fijos</title>


<script type="text/javascript">
    function panel()
    {
      var estilo = document.getElementById("panel").className; <!-- Aqui (donde pone capa) pones el nombre de la clase que le des a la caja que quieres que se despliegue -->
      if (estilo == "hidden")
      {
        document.getElementById("panel").className = "show"; <!-- Lo mismo aquí (donde pone capa) y donde pones "show" seria el estilo de la caja desplegada -->
      }
      else
      {
        document.getElementById("panel").className = "hidden"; <!-- Lo mismo aquí (donde pone capa) y donde pones "hidden" seria el estilo de la caja escondida -->
      }
    }
</script>

	


  <style>
  .textbox
  {
  border: 1px solid #000;
  font-size: 14px;
  font-family: Arial, Verdana;
  padding-left: 7px;
  padding-right: 7px;
  padding-top: 10px;
  padding-bottom: 10px;
  border-radius: 3px;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  -o-border-radius: 4px;
  background: #FFFFFF;
  background: linear-gradient(left, #FFFFFF, #F7F9FA);
  background: -moz-linear-gradient(left, #FFFFFF, #F7F9FA);
  background: -webkit-linear-gradient(left, #FFFFFF, #F7F9FA);
  background: -o-linear-gradient(left, #FFFFFF, #F7F9FA);
  color: #2E3133;
  }
  
  .textbox:focus
  {
  color: #2E3133;
  border-color: #FBFFAD;
  }
 .textbox1 {  border: 1px solid #000;
  font-size: 14px;
  font-family: Arial, Verdana;
  padding-left: 7px;
  padding-right: 7px;
  padding-top: 10px;
  padding-bottom: 10px;
  border-radius: 3px;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  -o-border-radius: 4px;
  background: #FFFFFF;
  background: linear-gradient(left, #FFFFFF, #F7F9FA);
  background: -moz-linear-gradient(left, #FFFFFF, #F7F9FA);
  background: -webkit-linear-gradient(left, #FFFFFF, #F7F9FA);
  background: -o-linear-gradient(left, #FFFFFF, #F7F9FA);
  color: #2E3133;
}
  .textbox2 {  border: 1px solid #000;
  font-size: 14px;
  font-family: Arial, Verdana;
  padding-left: 7px;
  padding-right: 7px;
  padding-top: 10px;
  padding-bottom: 10px;
  border-radius: 3px;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  -o-border-radius: 4px;
  background: #FFFFFF;
  background: linear-gradient(left, #FFFFFF, #F7F9FA);
  background: -moz-linear-gradient(left, #FFFFFF, #F7F9FA);
  background: -webkit-linear-gradient(left, #FFFFFF, #F7F9FA);
  background: -o-linear-gradient(left, #FFFFFF, #F7F9FA);
  color: #2E3133;
}
  .textbox3 {  border: 1px solid #000;
  font-size: 14px;
  font-family: Arial, Verdana;
  padding-left: 7px;
  padding-right: 7px;
  padding-top: 10px;
  padding-bottom: 10px;
  border-radius: 3px;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  -o-border-radius: 4px;
  background: #FFFFFF;
  background: linear-gradient(left, #FFFFFF, #F7F9FA);
  background: -moz-linear-gradient(left, #FFFFFF, #F7F9FA);
  background: -webkit-linear-gradient(left, #FFFFFF, #F7F9FA);
  background: -o-linear-gradient(left, #FFFFFF, #F7F9FA);
  color: #2E3133;
}
  .textbox4 {  border: 1px solid #000;
  font-size: 14px;
  font-family: Arial, Verdana;
  padding-left: 7px;
  padding-right: 7px;
  padding-top: 10px;
  padding-bottom: 10px;
  border-radius: 3px;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  -o-border-radius: 4px;
  background: #FFFFFF;
  background: linear-gradient(left, #FFFFFF, #F7F9FA);
  background: -moz-linear-gradient(left, #FFFFFF, #F7F9FA);
  background: -webkit-linear-gradient(left, #FFFFFF, #F7F9FA);
  background: -o-linear-gradient(left, #FFFFFF, #F7F9FA);
  color: #2E3133;
}
  .textbox5 {  border: 1px solid #000;
  font-size: 14px;
  font-family: Arial, Verdana;
  padding-left: 7px;
  padding-right: 7px;
  padding-top: 10px;
  padding-bottom: 10px;
  border-radius: 3px;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  -o-border-radius: 4px;
  background: #FFFFFF;
  background: linear-gradient(left, #FFFFFF, #F7F9FA);
  background: -moz-linear-gradient(left, #FFFFFF, #F7F9FA);
  background: -webkit-linear-gradient(left, #FFFFFF, #F7F9FA);
  background: -o-linear-gradient(left, #FFFFFF, #F7F9FA);
  color: #2E3133;
}

  
#create
{
	width: 120px;
	height: 35px;
	background-color:#000;
	color:#FFF;
	padding-top: 15px;
}


	a:hover{
		color:#CCC;
		text-decoration:none;
	}
 
</style>
	
</head>


<body>

	<div id="cabecera">
  
     <table align="left" border="0" width="50">
    	<tr>
        	<td width="35" align="left"> <input type=image src="img/menu.png" width="45" height="35" onClick="panel()"></td>
       	</tr>
    </table>
    

   
    

    
    
     <table align="center" border="0" width="50">
     	<tr>
        	<td></td>         
       </tr>
       <tr>
         <td width="35" align="left"><img src="img/logo2.png" width="230" height="30"></td>
       </tr>
     </table>
	</div><!--FIN DE CABECERA-->
    
    
<div id="contenedor">

<div id="panel" class="hidden">    
	  <br><br><br>
    
    <table width="200" border="0" align="center">
  <tr>
    <td align="center"><a href="index2.html"><img src="img/ojo.png" width="100" height="60"></a></td>    
  </tr>
  <tr>
  	 <td align="center"><font color="#CCCCCC">#Look Your Color</font></td>
  </tr>
</table>

    
    <div id="separacion1"></div>
    <div id="separacion2"></div>
      <div id="acc"><img src="img/ojo.png" width="20" height="13" /><strong>ACCOUNT</strong></div>
    <div id="acc"><a href="#">Sing In or Register</a></div>
      <div id="acc"><em><a href="#">My Shopping Cart ()</a></em></div>
      <div id="acc"><a href="contacto.php">Contact Us</a></div>
        <div id="separacion2"></div>
      <div id="separacion1"></div>
    <div id="separacion2"></div>
    <div id="acc"><img src="img/ojo.png" width="20" height="13" /><strong>AYOUNIK STORE</strong></div>
       <div id="acc"><a href="#">New Arrivals</a></div>
      <div id="acc"><a href="#">Classics</a></div>
      <div id="acc"><a href="#">All</a></div>
        <div id="separacion2"></div>
      <div id="separacion1"></div>
    <div id="separacion2"></div>
    <div id="acc"><img src="img/ojo.png" width="20" height="13" /><strong>SOCIAL</strong></div>
       <div id="acc"><a href="press.php">Press</a></div>
      <div id="acc"><a href="blog.php">Blog</a></div>
      <div id="acc"><a href="#"> Gallery</a></div>
      
</div><!---FIN DE PANEL-->



<div id="contenedor2">
	

	<br>

        
<table width="200" border="0" align="center">
              <tr>
                <td align="center"><br>
                <br>
                <img src="img/create.png" width="452" height="92"><br>
                <br></td>
             	
              </tr>
            </table>
            
            
            
            
  <br>
  
  
  
  <form>
  
 <table width="372" border="0" align="center">
  <tr>
    <td width="157"><font face="Tahoma, Geneva, sans-serif">FIRST NAME</font></td>
    <td width="158"><input type="text" class="textbox" size="30"></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>LAST NAME</td>
    <td><input type="text" class="textbox1" size="30"></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>E-MAIL</td>
    <td><input type="text" class="textbox3" size="30"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>COUNTRY</td>
    <td><input type="text" class="textbox4" size="30"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>ADDRESS</td>
    <td><input type="text" class="textbox5" size="30"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><table width="126" border="0" align="right">
      <tr>
        <td align="center"><div id="create"><a href="#">CREATE</a></div></td>
      </tr>
    </table></td>
  </tr>
 </table>

  </form>
  <br><br>
<br>
<br><br>
    
    
    
</div>  <!---FIN DE CONTENEDO2R-->  
</div> <!---FIN DE CONTENEDOR-->
<div id="pie">
  <table width="900" border="0" align="center">
    <tr>
      <td><table width="332" border="0" align="left">
        <tr>
          <td width="223">&nbsp;</td>
          </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><font color="#FFFFFF">Ayounik Todos los derechos reservados.</font></td>
        </tr>
        </table>
        <table width="250" border="0" align="right">
          <tr>
            <td align="right"><a href="#"><img src="img/redes.png" width="95" height="22"></a>
            </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td align="right"><font color="#FFFFFF">Desing By: Systems Admins C.A</font></td>
          </tr>
      </table></td>
    </tr>
  </table>
</div>
</body>

</html> 