<!DOCTYPE html>
<html>
	<head>
		<title>&bull; Login 04 &bull;</title>
		<meta charset="utf-8">
		<meta name='copyright' content="JScript">
		<meta name="description" content="Form de Login com campos normatizados">
		<meta name="keywords" content="HTML5, CSS3, Web">
		<meta name="author" content="Bernardo">
		<meta name="googlebot" content="noindex">
		<meta name="bingbot" content="noindex">
		<meta http-equiv='Expires' content='0'>
		<meta http-equiv='Cache-Control' content='no-cache'>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
			FORM.frm { font-family: Arial; }
			H1 {  font-family: Arial; font-size: 64px; }
			INPUT[type=submit] {padding-left: 1%;padding-right: 1%;}
			LABEL.frm { display: inline-block; font-size: 18px; min-width: 110px; text-align: left; }
			LABEL.frm.sub {max-width: 110px;}
		</style>
		<script>
			var div1 = null;
			// NOVO - submit do form
			function envia(obj){
				for( campo in obj ){
					if( obj[campo].attributes["class"].value == "frm" ){
						alert(obj[campo].name+" : "+obj[campo].value);
						}
					}
				return false;
				}
			function init(){
				div1 = document.getElementById("app");
				}
		</script>
	</head>
	<body onload="init();">
		<center>
			<h1>L O G I N</h1>
			<div id="app">
				<form class="frm" method="post" action="" onsubmit="envia(this);">
					<label class="frm">Identificador:</label><input class="frm" name="Id_1" size="10"><br>
					<label class="frm">Apelido:</label><input class="frm" name="Apel_4" size="10"><br>
					<label class="frm">Senha:</label><input type="password" class="frm" name="Pwd_8" size="10"><br><br>
					<label class="frm sub">&nbsp;</label><input type="submit" value="ENTRAR">
				</form>
			</div>
		</center>
	</body>
</html>