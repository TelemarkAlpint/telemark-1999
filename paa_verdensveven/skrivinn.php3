<!DOCTYPE HTML PUBLIC "-//SoftQuad Software//DTD HoTMetaL PRO 6.0::19990601::extensions to HTML 4.0//EN" "hmpro6.dtd">
<HTML> 
  <HEAD>
	 <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"> 
	 <TITLE>Skriv inn til sladdrespalten</TITLE> <STYLE TYPE="text/css">
  <!--
    A          { font-family: "verdana, arial"; text-shadow: "black"  }
    A:link     { color: #994455; text-decoration: "none"  }
    A:visited  { color: #CCCCCC; text-decoration: "none"  }
    A:active   { color: #EEEEEE; text-decoration: "none"  }
    A:hover    { color: #EEEEEE; text-decoration: "none"  }
  //-->
  </STYLE> <SCRIPT LANGUAGE="javascript">
<!--
	function validate() {
		if(document.mainForm.kommentar.value != "") {
			document.mainForm.addOK.value = "true";
			alert("Takk for ditt innlegg!!\n\nTrykk 'Oppdater' hvis det ikke vises med en gang!");			
			document.mainForm.submit();
		} else {
			alert("Du har ikke skrevet inn noen melding. \n\n Innlegget er ikke blitt lagt inn.. ");
		}
	}

//-->
</SCRIPT> 
  </HEAD> 
  <BODY
	STYLE="font-family: Verdana, Arial; font-size: 10pt; text-decoration: none;"
	BGCOLOR="#758DB8"> <HR WIDTH="100%"> 
	 <P><FONT STYLE="font-family: Verdana, Arial; font-size: 12pt">
		<B>Innleggingsside for sladdrespalten</B></FONT> </P> 
	 <TABLE WIDTH="400" BORDER="0" CLASS="FFBasic" ALIGN="left" VALIGN="top"
	  CELLSPACING="5" CELLPADDING="0"
	  STYLE="font-family: Verdana, Arial; font-size: 10pt"> 
		<TR> 
		  <TD VALIGN="top" WIDTH="407" ROWSPAN="0"> 
			 <FORM NAME="mainForm" ACTION="sladder_inn.php3" METHOD="post">
				<INPUT NAME="cmd" TYPE="hidden" VALUE="addNew">
				<INPUT TYPE="hidden" NAME="addOK" VALUE="false"> 
				<P>Navn: <BR><INPUT TYPE="text" NAME="navn" SIZE="30"> <BR>E-Mail:
				  <BR><INPUT TYPE="text" NAME="email" SIZE="30"> </P> 
				<P>Melding: <BR><TEXTAREA NAME="kommentar" COLS="40" ROWS="10"></TEXTAREA> </P> 
				<P><INPUT TYPE="submit" VALUE="Send">&nbsp;*&nbsp;<INPUT
				  TYPE="reset" VALUE="Nullstill"></P> </FORM> </TD> 
		</TR> 
	 </TABLE> </BODY>
</HTML>