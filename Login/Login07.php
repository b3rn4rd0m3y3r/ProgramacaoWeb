<!DOCTYPE html>
<html>
	<head>
		<title>&bull; Login 07 &bull;</title>
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
				var nomeCampo = "";
				var arr = "";
				var Soma = 0;
				var Difer = 0;
				for( campo in obj ){
					if( obj[campo] != "" ){
						if( obj[campo].attributes["class"].value == "frm" ){
							if( obj[campo].value != "" ){
								nomeCampo = obj[campo].name;
								arr = nomeCampo.split("_");
								Soma += parseInt(arr[1]);
								}
							}
						//alert(Soma);
						} else {
						break;
						}
					}
				if( Soma < 16 ){
					alert("Faltou a senha");
					return false;
					} else {
					Difer = Soma - 16;
					//if( Soma != 29 && Soma != 28 && Soma != 24 && Soma != 21 && Soma != 20 && Soma != 17 ){
					//if( Difer != 13 && Difer != 9 && Difer != 5 && Difer != 1 ){
					if( Difer < 1 ){
						alert("Faltou Identificador ou Apelido ou Telefone");
						return false;
						} else {
						var seletor = "";
						for( campo in obj ){
							if( obj[campo] != "" ){
								if( obj[campo].attributes["class"].value == "frm" ){
									//if( obj[campo].value != "" ){
										nomeCampo = obj[campo].name;
										arr = nomeCampo.split("_");
										seletor = "INPUT[name='"+nomeCampo+"']";
										document.querySelector(seletor).name = arr[0];
									//	}
									}
								}
							}
						return true;
						}
					}
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
				<form class="frm" method="post" action="auth01.php" onsubmit="return envia(this);">
					<label class="frm">Identificador:</label><input class="frm" name="Id_1" size="10"><br>
					<label class="frm">Apelido:</label><input class="frm" name="Apel_4" size="10"><br>
					<label class="frm">Telefone:</label><input class="frm" name="Tel_8" size="10"><br>
					<label class="frm">Senha:</label><input type="password" class="frm" name="Pwd_16" size="10"><br><br>
					<label class="frm sub">&nbsp;</label><input class="dummy" type="submit" value="ENTRAR">
				</form>
			</div>
		</center>
	</body>
</html>