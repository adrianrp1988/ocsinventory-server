<?php 
//====================================================================================
// OCS INVENTORY REPORTS
// Copyleft Pierre LEMMET 2005
// Web: http://ocsinventory.sourceforge.net
//
// This code is open source and may be copied and modified as long as the source
// code is always made freely available.
// Please refer to the General Public Licence http://www.gnu.org/ or Licence.txt
//====================================================================================
//Modified on $Date: 2006/12/21 18:13:46 $$Author: plemmet $($Revision: 1.5 $)
//pour le d�bug
if ($_SESSION['DEBUG'] == 'ON'){
	echo "<hr/>";
	echo "<div align=center>VAR POST</div>";
	if (isset($_POST))
	print_r_V2($_POST);
	echo "<hr/>";
	echo "<div align=center>VAR SESSION</div>";
	foreach ($_SESSION as $key=>$value){
		
		if ($key != "fichLang" and $key != "LANGUAGE_FILE" and $key != "mac" and $key != "storedRequest"){
			$tab_session[$key]=$value;
		}
		
	}
	if (isset($tab_session))
	print_r_V2($tab_session);	
}

echo"<br></div><table class='headfoot'>";
echo"<tr height=25px><td align='center'>&nbsp;";
if( function_exists("getmicrotime") ) {
	$fin = getmicrotime();
	if($_SESSION["DEBUG"]=="ON") {
		echo "<b>CACHE:&nbsp;<font color='".($_SESSION["usecache"]?"green'><b>ON</b>":"red'><b>OFF</b>")."</font>&nbsp;&nbsp;&nbsp;<font color='black'><b>".round($fin-$debut, 3) ." secondes</b></font>&nbsp;&nbsp;&nbsp;";
		echo "<script language='javascript'>document.getElementById(\"tps\").innerHTML=\"<font color='black'><b>".round($fin-$debut, 3)." secondes</b></font>\"</script>";
	}
}

echo"</td></tr></table>";
?>
</body>
</html>
