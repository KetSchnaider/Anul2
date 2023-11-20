<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ursul pacalit de vulpe</title>
	<h1 align=center style="font-size:260%">Ursul pacalit de vulpe</h1>
	<div align=center>
		<cite>de Ion Creanga</cite>
	</div>
	<style type="text/css">
		p {
			margin:20px 20% 20px 20%;
			text-indent:25px;
			font-size:18px;
		}
	.atentionare 
	{
		color: blue;
	}
	form 
	{
		text-align: center;
	}
</style>
</head>
<body>
	<div>
				
<H1 style ="text-align:center"> INSERARE DATE IN TABELUL AUTOR </H1>

<?PHP 
require_once 'connectare.php';
require '1task_AFISARE_TABEL_AUTOR.php'; 
	$nume_autor = $eroarenumeautor= $idcarte="";
//  detalii aici https://www.quora.com/Why-do-some-PHP-programmers-use-_SERVER-REQUEST_METHOD-POST
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["nume_autor"])) 
  {    $eroarenumeautor = "Se cere a fi introdus Name_autor";  }   else   {
    $nume_autor = procesare_input($_POST["nume_autor"]);
    // Verificare daca numele contine litere si spatii
    if (!preg_match("/^[a-zA-Z ]*$/",$nume_autor)) 
	{
      $eroarenumeautor = "Se introduc doar litere si spatii";
    }
  }
} 
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["idcarte"]))   {
    $eroarenumeautor = "Se cere a fi introdus idcarte";
  }   else   {
    $idcarte = procesare_input($_POST["idcarte"]);
    // Verificare daca numele contine litere si spatii
    if (!preg_match("/^[a-zA-Z ]*$/",$idcarte)) 	{
      $eroarenumeautor = "Se introduc doar litere si spatii";
    }
  }
}
function procesare_input($data) 
{
  $data = trim($data);
  return $data;
}
?>
		<p><span style="align:center" class="atentionare">* se cere a fi completata obligator</span></p>
		<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<span class="atentionare">* <?php echo $eroarenumeautor;?></span>
		Nume autor: 	<input type="text" name="nume_autor" size="25">  <br/>
		<span class="atentionare">* <?php echo $eroarenumeautor;?></span>
		Id carte  :   	<input type="text" name="idcarte" size="15">  <br/>
		<input type="submit" name="submit" value="Submit">  
	</form> 
<?php
/* echo "nume_autor=". $nume_autor;
echo "<br/>";
echo "idautor=". $idcarte;
echo "<br/>"; */
if ((($nume_autor<>"")and ($idcarte<>"")))
{
/* LUCRUL CU COMANDA SELECT */
$insert_sql = "INSERT INTO autor (nume_autor, idcarte) VALUES ('$nume_autor', '$idcarte');";
$result= mysqli_query($link, $insert_sql);
if (!$result)
{
	die('Could not insert ' . mysqli_error($link));  } else {
ECHO "<p align='center'> <font color=BLUE >DATELE AU FOST INSERATE</p>";
	require '1task_AFISARE_TABEL_AUTOR.php'; 
}
} 
ELSE
{
ECHO "<p align=center> <font color=red > INTRODUCETI DATELE PENTRU INSERARE</font></p>";
}	 
?>  
		<i>
		<p>Era odată o vulpe vicleană, ca toate vulpile. Ea umblase o noapte întreagă după hrană şi nu găsise nicăiri. Făcându-se ziua albă, vulpea iese la marginea drumului şi se culcă sub o tufă, gândindu-se ce să mai facă, ca să poată găsi ceva de mâncare.</p>
		
		
		<p>Şăzând vulpea cu botul întins pe labele de dinainte, îi vine miros de peşte. Atunci ea rădică puţin capul şi, uitându-se la vale, în lungul drumului, zăreşte venind un car tras de boi.
		– Bun! gândi vulpea. Iaca hrana ce-o aşteptam eu. Şi îndată iese de sub tufă şi se lungeşte în mijlocul drumului, ca şi cum ar fi fost moartă.
		</p>
		

		<p>Carul apropiindu-se de vulpe, ţăranul ce mâna boii o vede şi, crezând că-i moartă cu adevărat, strigă la boi: Aho! Aho! Boii se opresc. Ţăranul vine spre vulpe, se uită la ea de aproape şi, văzând că nici nu suflă, zice: Bre! da’ cum naiba a murit vulpea asta aici?! Ti! ce frumoasă caţaveică am să fac nevestei mele din blana istui vulpoiu! Zicând aşa, apucă vulpea de după cap şi, târând-o până la car, se opinteşte ş-o aruncă deasupra peştelui. Apoi strigă la boi: "Hăis! Joian, cea! Bourean". Boii pornesc.</p>

		<p>Ţăranul mergea pe lângă boi şi-i tot îndemna să meargă mai iute, ca s-ajungă degrabă acasă şi să ieie pelea vulpii.
		Însă, cum au pornit boii, vulpea a şi început cu picioarele a împinge peştele din car jos. Ţăranul mâna, carul scârţâia, şi peştele din car cădea.</p>

		<p>După ce hoaţa de vulpe a aruncat o mulţime de peşte pe drum, bine…şor! sare şi ea din car şi, cu mare grabă, începe a strânge peştele de pe drum.</p>
		
		
		<img style="margin-left:24%" src="imagini/img0.jpg" width="50%" height="800px" >

		<p> După ce l-a strâns grămadă, îl ia, îl duce la bizunia sa şi începe a mânca, că ta…re-i mai era foame!</p>

		<p>Tocmai când începuse a mânca, iaca vine la dânsa ursul.
		– Bună masa, cumătră! Ti!!! da’ ce mai de peşte ai! Dă-mi şi mie, că ta…re! mi-i poftă!
		– Ia mai pune-ţi pofta-n cuiu, cumătre, că doar nu pentru gustul altuia m-am muncit eu. Dacă ţi-i aşa de poftă, du-te şi-ţi moaie coada-n baltă, ca mine, şi-i avea peşte să mănânci.
		– Învaţă-mă, te rog, cumătră, că eu nu ştiu cum se prinde peştele.
		Atunci vulpea rânji dinţii şi zise: Alei, cumătre! da’ nu ştii că nevoia te duce pe unde nu-ţi e voia şi te-nvaţă ce nici gândeşti? Ascultă, cumătre: vrei să mănânci peşte? Du-te desară la băltoaga cea din marginea pădurei, vârâ-ţi coada-n apă şi stăi pe loc, fără să te mişti, până despre ziuă; atunci smunceşte vârtos spre mal şi ai să scoţi o mulţime de peşte, poate îndoit şi-ntreit de cât am scos eu.</p>
		<img style="margin-left:24%" src="imagini/img1.jpg" width="50%" height="800px" >

		<p>Ursul, nemaizicând nici o vorbă, aleargă-n fuga mare la băltoaga din marginea pădurei şi-şi vâră-n apă toată coada!
		În acea noapte începuse a bate un vânt răce, de îngheţa limba-n gură şi chiar cenuşa de sub foc. Îngheaţă zdravăn şi apa din băltoagă, şi prinde coada ursului ca într-un cleşte. De la o vreme, ursul, nemaiputând de durerea cozei şi de frig, smunceşte o dată din toată puterea. Şi, sărmanul urs, în loc să scoată peşte, rămâne făr’ de coadă!</p>
		<img style="margin-left:24%" src="imagini/img2.jpg" width="50%" height="800px" >

		<p>Începe el acum a mornăi cumplit ş-a sări în sus de durere; şi-nciudat pe vulpe că l-a amăgit, se duce s-o ucidă în bătaie. Dar şireata vulpe ştie cum să se ferească de mânia ursului. Ea ieşise din bizunie şi se vârâse în scorbura unui copac din apropiere; şi când văzu pe urs că vine făr’ de coadă, începu a striga:
		– Hei cumătre! Dar ţi-au mâncat peştii coada, ori ai fost prea lacom ş-ai vrut să nu mai rămâie peşti în baltă?</p>
		<img style="margin-left:24%" src="imagini/img3.jpg" width="50%" height="800px" >

		<p>Ursul, auzind că încă-l mai ie şi în râs, se înciudează şi mai tare şi se răpede iute spre copac; dar gura scorburei fiind strâmtă, ursul nu putea să încapă înlăuntru. Atunci el caută o creangă cu cârlig şi începe a cotrobăi prin scorbură, ca să scoată vulpea afară, şi să-i deie de cheltuială… Dar când apuca ursul de piciorul vulpei, ea striga: "Trage, nătărăule! mie nu-mi pasă, că tragi de copac…" Iar când anina cârligul de copac, ea striga: "Valeu, cumătre! nu trage, că-mi rupi piciorul!"</p>
		<img style="margin-left:24%" src="imagini/img4.jpg" width="50%" height="800px" >

		<p>În zadar s-a năcăjit ursul, de-i curgeau sudorile, că tot n-a putut scoate vulpea din scorbura copacului.
		Şi iaca aşa a rămas ursul păcălit de vulpe!</p>
	</i>
	</div>
</body>
</html>