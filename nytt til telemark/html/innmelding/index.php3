 
 
<html>                                                                                       
<head>  
  <title>Innmelding</title>
  <link rel="stylesheet" href="../style/snow.css">
</head> 
 
<body bgcolor="#ffffff" link="#006400" vlink="#8fbc8f" text="#3366CC">                       
   
<h1>Innmelding til NTNUI Snowboard</h1> 
 
<form                                                                                        
   name="innmelding" 
   action="skrivInnmelding.php3"
   method="POST" 
>                                                                                            
<table> 
<tr>    
   <td>Fornavn:</td> 
   <td> <input name="fnavn" type="text" size="30">   </td> 
</tr> 
<tr>                                                                                         
  <td>Etternavn:</td>
  <td><input name="enavn" type="text" size="30">   </td>
</tr> 
<tr>                                                                                         
   <td>Kjønn:   </td>
   <td><select name="sex">
       <option>Velg kjønn. 
        <option>Kvinne                                                                       
        <option>Mann
    </select> </td>  
</tr> 

<tr>                                                                                         
   <td>Fødselsdato: </td>                                                                    
   <td> 
     <input  name="dag" type="text" size="2" MAXLENGTH="2"> 
     <input  name="maande" type="text" size="2" MAXLENGTH="2">
     <input  name="aar"   type="text"  size="4" MAXLENGTH="4">&nbsp;(DD&nbsp;MM&nbsp;ÅÅÅÅ)</$
</tr> 
<tr> 
   <td>Medlemsnr. i NTNUI: </td>
   <td><input name="ntnui" type="text" size="8"></td>
</tr> 
<tr> 
   <td>Email:</td>
   <td><input name="epost" type="text" size="50"></td>
</tr>                                                                                        
<tr> 
   <td>Telefon:</td> 
   <td><input name="tlf" type="text" size="8" MAXLENGTH="8"></td>

</tr> 
<tr>                                                                                         
   <td>Mobil:</td>
   <td><input name="mob" type="text" size="8" MAXLENGTH="8"></td>
</tr> 
<tr>                                                                                         
   <td>Studpost:</td>
   <td><input name="studpost" type="text" size="5"></td>
</tr> 
<tr> 
   <td>Adresse:</td> 
   <td><textarea cols="45" name="adr" rows="4" wrap="off" >
</textarea></td> 
</tr> 
<tr> 
   <td>Postnummer:</td> 
   <td><input name="postnr" type="text" size="4"></td> </tr> <tr>
   <td>Poststed:</td>    
<td><input name="poststed" type="text" size="40"></td>
</tr> 
<tr> 
   <td>Hjemmeside:</td>
   <td><input name="url" type="text" size="50"></td>                                         
</tr> 
<tr> 
  <td valign="top">Mailinglister:</td>
  <td><input type="checkbox" name="snowbull" value="J" checked>snow-bull@stud.ntnu.no<br>    
      <input type="checkbox" name="snowbabes" value="J" checked>snow-babes@stud.ntnu.no<p>
      <b>Om mailinglistene:</b><br> 
      Alle klubbens medlemmer står på mailinglista
      <em>snow-ball</em>. Denne er forbeholt beskjeder fra styret,
      mere informasjon om mailinglistene finner du <a
      href="../mail/">her</a>.<br>
      <em>snow-bull</em> er ment som en mer uformell mailingliste for
      alle medlemmer. Det betyr ikke at den er uten regler, se <a
      href="../mail/"> mail-siden</a>.<br> 
      <em>snow-babes</em> er en mailingliste for jentene i klubben.
  </td>
</table> 
<input type="submit"> 
</form>
 
<?php 
  include("../oppdatert.inc"); 
?> 
       
</body> 
</html>