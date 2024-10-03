<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Agência de modelo infantil MAXFAMA - A melhor agência de modelos Infantis do Brasil</title>

<style type="text/css" media="screen">
*  {
	margin: 0;
	padding: 0;
}
html, body {font-family: Calibri; background: none;}
#background{border-top: 1px solid #F2F2F2; background: #F2F2F2; padding-bottom: 40px;}
#logo {
	    margin-top: 40px !important;
	}
.geral {
	min-height: 100%;
	position: relative;
	width: 100%;
}
.footer {	
	width: 100%;
	height: 45px;
	background-color: #000;
	color: #FFF;
	text-align: center;
}
.footer p{padding-top: 15px;}
.content {overflow: hidden;}
#logo{margin: 0 auto; display: table; margin-top: 40px; margin-bottom: 40px;}
#cinza{width: 100%; min-height: 500px; background-color: #e5e5e5;}
#cinza p{padding-top: 30px; margin: 0 auto; display: table; text-align: center; font-size: 22px; color: #000;}
#info-contrato{font-weight: bold; margin-top: 20px; font-size: 20px;}
#info-nascimento{font-weight: bold; font-size: 14px;}
.col-md-2{text-align: center;}
.col-md-2 img{margin: 35px 0 10px;}
.btn-gerar{margin-top: 70px; font-size: 25px; padding: 10px 25px;}
@media screen and (max-width: 767px){
	body {background: none !important;}
	.row{margin-right: 0 !important; margin-left: 0 !important;}
}
	</style>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="../_css/maxfama.css?cache=<?php echo time(); ?>" />
	<link rel="stylesheet" href="../_css/nivo-slider.css" type="text/css" />
	<link rel="stylesheet" href="../_css/slicknav.css" type="text/css" media="screen"/>
	<link rel="stylesheet" type="text/css" href="../_css/jquery.fancybox.css?v=2.1.4" media="screen" />	
	<script type="text/javascript" src="../_js/modernizr.custom.js"></script>
</head>
<body>	
<div class="container">
	<div>
		<img src="../_img/logo-agencia.png" id="logo" />
	</div>
</div>
<div id="background">
  	<div class="container">  
    	<form method="post" action="geracomposite.php" enctype="multipart/form-data" class="was-validated" id="form" name="form" target="_blank" >

	   	<?php

	   //	error_reporting(E_ALL);


		if(isset($_POST['contrato'])){
			//$url = 'http://maxsystem.azurewebsites.net/Model/GetModel?contractNumber='.$_POST['contrato'];	// Original

			$url =  'https://maxsystem.azurewebsites.net/api/Model?$filter=Contract/Number+eq+'.$_POST['contrato'].'&$expand=Contract';

			//Pega os dados
			$ch = curl_init();
			$timeout = 5; // set to zero for no timeout
			curl_setopt ($ch, CURLOPT_URL, $url);
			curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
			$file_contents = curl_exec($ch);

			curl_close($ch);

			$obj = json_decode($file_contents);

			//echo $obj->Items;

			echo '<input type="hidden" class="form-control" id="contrato" name="contrato" value="'.$_POST['contrato'].'" />';

			$im = 0; foreach ($obj->Items as $key => $dados): $im++;

			//echo '<img alt="" src="http://maxsystem.blob.core.windows.net'.$dados->ProfilePhotoUri.'" class="img-responsive img-fluid" style="padding-bottom: 10px; padding-top:30px;" >';

				echo '<input type="hidden" class="form-control" id="nome" name="nome" value="'.$dados->Name.'" />';
				echo '<input type="hidden" class="form-control" id="nascimento" name="nascimento" value="'.date('d/m/Y', strtotime(str_replace("/", "-", $dados->Birthday))).'" />';  //str_replace("/", "-", $dados->Birthday)
				echo '<input type="hidden" class="form-control" id="altura" name="altura" value="'.$dados->Height.'" />';
				echo '<input type="hidden" class="form-control" id="peso" name="peso" value="'.$dados->Weight.'" />';
				echo '<input type="hidden" class="form-control" id="manequim" name="manequim" value="'.$dados->ClothSize.'" />';
				echo '<input type="hidden" class="form-control" id="calcado" name="calcado" value="'.$dados->Shoe.'" />';

				if($dados->Name){
					echo '<div class="row">
							<div class="col-md-4">
								<p id="info-contrato"><span style="font-size: 14px; font-weight: 400;">Modelo</span><br />'.$dados->Contract->Number.' - '.$dados->Name.'<p id="info-nascimento"><span style="font-size: 14px; font-weight: 400;">Nascimento: </span>'.date('d/m/Y', strtotime(str_replace("/", "-", $dados->Birthday))).'</p>
						  		<div class="form-group row"><label for="nomeartistico" class="col-4 col-form-label" style="font-size: 14px; font-weight: 400;">Nome artístico</label>
						  			<div class="col-8"><input type="text" class="form-control" name="nomeartistico" id="nomeartistico" value="'.explode(' ',trim($dados->Name))[0].'" placeholder="'.explode(' ',trim($dados->Name))[0].'" maxlength="20" maxlength="3" required /></div>
						  		</div>

						  		<div class="form-group row"><label for="altura" class="col-4 col-form-label" style="font-size: 14px; font-weight: 400;">Altura</label>
						  			<div class="col-8"><input type="text" class="form-control" name="altura" id="altura" value="" placeholder="" maxlength="20" maxlength="3" /></div>
						  		</div>

						  		<div class="form-group row"><label for="manequim" class="col-4 col-form-label" style="font-size: 14px; font-weight: 400;">Manequim</label>
						  			<div class="col-8"><input type="text" class="form-control" name="manequim" id="manequim" value="" placeholder="" maxlength="20" maxlength="3" /></div>
						  		</div>

						  		<div class="form-group row"><label for="calcado" class="col-4 col-form-label" style="font-size: 14px; font-weight: 400;">Calçado</label>
						  			<div class="col-8"><input type="text" class="form-control" name="calcado" id="calcado" value="" placeholder="" maxlength="20" maxlength="3" /></div>
						  		</div>


						  		<div class="form-group form-check"><input type="checkbox" class="form-check-input" name="ator" id="ator" value="Yes" /><label for="ator" class="form-check-label" style="font-size: 14px; font-weight: 400;">Atriz/Ator</label></div>
						  		<div class="form-group form-check"><input type="checkbox" class="form-check-input" name="exclusivo" id="exclusivo" value="Yes" /><label for="exclusivo" class="form-check-label" style="font-size: 14px; font-weight: 400;">Exclusivo</label></div>
					      	<hr/>';

					  echo '<p id="info-contrato">Escolha a Agência</p>

							<div class="row form-check">
								<input ="form-check-input" type="radio" name="tipo" id="tipo" value="1" required >
								<label class="form-check-label" for="tipo" style="font-size: 14px; padding-left: 10px;">Agência Kids</label>
							</div>
							
							<div class="row form-check">
								<input ="form-check-input" type="radio" name="tipo" id="tipo" value="2" required >
								<label class="form-check-label" for="tipo" style="font-size: 14px; padding-left: 10px;">Max Fama</label>
							</div>
							
							<div class="row form-check">
								<input ="form-check-input" type="radio" name="tipo" id="tipo" value="3" required >
								<label class="form-check-label" for="tipo" style="font-size: 14px; padding-left: 10px;">Y Model</label>
							</div>

							<div class="row form-check">
								<input ="form-check-input" type="radio" name="tipo" id="tipo" value="4" required >
								<label class="form-check-label" for="tipo" style="font-size: 14px; padding-left: 10px;">Y Model Kids</label>
							</div>

							<div class="row form-check">
								<input ="form-check-input" type="radio" name="tipo" id="tipo" value="5" required >
								<label class="form-check-label" for="tipo" style="font-size: 14px; padding-left: 10px;">Tess Models</label>
							</div>

							<div class="row form-check">
								<input ="form-check-input" type="radio" name="tipo" id="tipo" value="6" required >
								<label class="form-check-label" for="tipo" style="font-size: 14px; padding-left: 10px;">Tess Models Kids</label>
							</div>

							<div class="row form-check">
								<input ="form-check-input" type="radio" name="tipo" id="tipo" value="7" required >
								<label class="form-check-label" for="tipo" style="font-size: 14px; padding-left: 10px;">Models Black</label>
							</div>

						<hr/>
						<div style="text-align: center;">
							<button type="submit" name="button" id="button" class="btn btn-success" value="  CRIAR COMPOSITE  " style="height: 40px; color: #fff;" />CRIAR COMPOSITE</button>
						</div>

					</div>';

				}

				endforeach;

					$url2 = 'https://maxsystem.azurewebsites.net/api/Model?$filter=Contract/Number+eq+'.$_POST['contrato'].'&$expand=Photos';

					//echo $url2.'<br/>';

					//Pega as Photos
					$ch2 = curl_init();
					$timeout2 = 5; // set to zero for no timeout

					//echo $timeout2.'<br/>';

					curl_setopt ($ch2, CURLOPT_URL, $url2);
					curl_setopt ($ch2, CURLOPT_RETURNTRANSFER, 1);
					curl_setopt ($ch2, CURLOPT_CONNECTTIMEOUT, $timeout2);
					$file_contents2 = curl_exec($ch2);
					curl_close($ch2);

					//echo $file_contents2.'<br/>';

					$obj2 = json_decode($file_contents2);

					//echo $obj2->Items->Photos[0]->UriReduced.'<br/>';

					echo '<div class="col-md-8">
							<div class="row justify-content-left">';

					$ig = 0; foreach ($obj2->Items[0]->Photos as $key => $fotos): $ig++;

							echo '<div class="col-md-3">
									<img alt="" src="https://maxsystem.blob.core.windows.net'.$fotos->UriReduced.'" onerror="if (this.src != https://maxsystem.blob.core.windows.net"'.$fotos->UriReduced.') this.src =https://maxsystem.blob.core.windows.net"'.$fotos->UriReduced.'" class="img-responsive img-fluid" style="padding-bottom: 10px; padding-top:30px;" >
									<select class="custom-select mr-sm-2" name="ordem[]" id="ordem">
										<option value="">Ordem</option>
										<option value="1_https://maxsystem.blob.core.windows.net'.$fotos->UriReduced.'">1</option>
										<option value="2_https://maxsystem.blob.core.windows.net'.$fotos->UriReduced.'">2</option>
										<option value="3_https://maxsystem.blob.core.windows.net'.$fotos->UriReduced.'">3</option>
									</select>
								  </div>';
							if($ig == 0){ echo '<div class="clearfix"></div>'; }

					endforeach;

					echo '</div></div>';

		}

		 ?>
		 	</div>
		</form>
	</div>  
</div>  
<footer style="height:160px; background-color: #000;">
	<div class="footer"><p>Copyright© <?php echo date("Y");?> - Todos os direitos reservados</p></div>
</footer>
</div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>