<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Agência de modelo infantil MAXFAMA - A melhor agência de modelos Infantis do Brasil</title>
	<meta charset="UTF-8">

	<link rel="stylesheet" href="../_css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../_css/maxfama.css?cache=<?php echo time(); ?>" />
	<style>
		body{background:none !important;}
	</style>

	<link href="https://fonts.googleapis.com/css2?family=Assistant:wght@700&family=Open+Sans:wght@300;400;500;700;800;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

</head>
<body>
<div style="width: 1436px; height: 780px; margin-left: 15px;">
	<div class="row" id="row">
	<?php

		error_reporting(E_ALL);

		if(isset($_POST['ordem'])){
			sort($_POST['ordem'], SORT_NUMERIC);

				switch ($_POST['tipo']) {
					case 1:
						$tipo = 'molduras/m-01.png';
						$nomediv = 'width: 530px; height: 150px; font-family: '."Open Sans".', sans-serif; font-size: 36px; color: #000; font-weight: 900; letter-spacing: -1px; line-height: 30px;';
						$contratostyle = 'color: #000; font-size: 14px; font-family: '."Open Sans".', sans-serif; font-weight: 400;';
						$datastyle = 'color: #000; font-size: 18px; font-family: '."Open Sans".', sans-serif; font-weight: 500;';
						$margin1 = 'margin: 25px 25px 25px 40px;';
						$margin2 = 'margin: 25px 25px 25px 0;';
						$margin3 = 'margin: 25px 25px 25px 0;';
						$labelstyle = $contratostyle;
						$labelbr = '&nbsp;';

						$nomeagencia = 'Agencia Kids';

						break;

					case 2:
						$tipo = 'molduras/m-02.png';
						$nomediv = 'width: 480px; height: 150px; font-family: '."Open Sans".', sans-serif; font-size: 26px; color: #921a5d; font-weight: 900; letter-spacing: -1px; line-height: 30px;';
						$contratostyle = 'color: #921a5d; font-size: 14px; font-family: '."Open Sans".', sans-serif; font-weight: 400;';
						$datastyle = 'color: #921a5d; font-size: 22px; font-family: '."Open Sans".', sans-serif; font-weight: 500;';
						$margin1 = 'margin: 25px 25px 25px 40px;';
						$margin2 = 'margin: 25px 25px 25px 0;';
						$margin3 = 'margin: 25px 25px 25px 0;';
						$labelstyle = $contratostyle;
						$labelbr = '&nbsp;';

						$nomeagencia = 'Max Fama';

						break;

					case 3:
						$tipo = 'molduras/m-03.png?';
						$nomediv = 'width: 800px; height: 150px; font-family: '."Times New Roman".', serif; font-size: 42px; color: #000; font-weight: 900; letter-spacing: -1px; font-style: italic; line-height: 28px;';
						$contratostyle = 'color: #000; font-size: 14px; font-family: '."Times New Roman".', serif; font-weight: 400;';
						$datastyle = 'color: #000; font-size: 16px; font-family: '."Times New Roman".', serif; font-weight: 300; line-height: 22px; font-style: normal;';
						$margin1 = 'margin: 25px 25px 25px 40px;';
						$margin2 = 'margin: 25px 25px 25px 0;';
						$margin3 = 'margin: 25px 25px 25px 0;';
						$labelstyle = $contratostyle;
						$labelbr = '&nbsp;';

						$nomeagencia = 'Y Model';

						break;

					case 4:
						$tipo = 'molduras/m-04.png';
						$nomediv = 'width: 410px; height: 150px; font-family: '."Open Sans".', sans-serif; font-size: 36px; color: #000; font-weight: 700; letter-spacing: -1px; line-height: 28px;';
						$contratostyle = 'color: #000; font-size: 14px; font-family: '."Open Sans".', sans-serif; font-weight: 300;';
						$datastyle = 'color: #000; font-size: 22px; font-family: '."Open Sans".', sans-serif; font-weight: 400;';
						$margin1 = 'margin: 25px 25px 25px 40px;';
						$margin2 = 'margin: 25px 25px 25px 0;';
						$margin3 = 'margin: 25px 25px 25px 0;';
						$labelstyle = $contratostyle;
						$labelbr = '&nbsp;';

						$nomeagencia = 'Y Model Kids';

						break;

					case 5:
						$tipo = 'molduras/m-05.png';
						$nomediv = 'width: 480px; height: 150px; font-family: '."Open Sans".', sans-serif; font-size: 26px; color: #0873ab; font-weight: 900; letter-spacing: -1px; line-height: 30px;';
						$contratostyle = 'color: #0873ab; font-size: 14px; font-family: '."Open Sans".', sans-serif; font-weight: 400;';
						$datastyle = 'color: #0873ab; font-size: 16px; font-family: '."Open Sans".', sans-serif; font-weight: 500;';
						$margin1 = 'margin: 25px 25px 25px 40px;';
						$margin2 = 'margin: 25px 25px 25px 0;';
						$margin3 = 'margin: 25px 25px 25px 0;';
						$labelstyle = $contratostyle;
						$labelbr = '&nbsp;';

						$nomeagencia = 'Tess Models';

						break;

					case 6:
						$tipo = 'molduras/m-06.png';
						$nomediv = 'width: 480px; height: 150px; font-family: '."Open Sans".', sans-serif; font-size: 26px; color: #1fadb5; font-weight: 900; letter-spacing: -1px; line-height: 30px;';
						$contratostyle = 'color: #1fadb5; font-size: 14px; font-family: '."Open Sans".', sans-serif; font-weight: 400;';
						$datastyle = 'color: #1fadb5; font-size: 22px; font-family: '."Open Sans".', sans-serif; font-weight: 500;';
						$margin1 = 'margin: 25px 25px 25px 40px;';
						$margin2 = 'margin: 25px 25px 25px 0;';
						$margin3 = 'margin: 25px 25px 25px 0;';
						$labelstyle = $contratostyle;
						$labelbr = '&nbsp;';

						$nomeagencia = 'Tess Models Kids';

						break;

					case 7:
						$tipo = 'molduras/m-07.png';
						$nomediv = 'width: 800px; height: 50px; font-size: 30px; color: #fff; font-weight: 900; letter-spacing: -1px; line-height: 30px; margin-left: -430px; margin-top: 72px;';
						$contratostyle = 'color: #fff; font-size: 20px; font-family: '."Arial".', sans-serif; font-weight: 700;';
						$nomestyle = 'color: #fff; font-size: 30px; font-family: '."Arial".', sans-serif; font-weight: 900;';
						$datastyle = 'color: #1fadb5; font-size: 22px; font-family: '."Arial".', sans-serif; font-weight: 500;';
						$margin1 = 'margin: 25px 25px 25px 40px;';
						$margin2 = 'margin: 105px 25px 25px 0;';
						$margin3 = 'margin: 105px 25px 25px 0;';
						$labelstyle = 'color: #fff; font-size: 12px; font-family: '."Arial".', sans-serif; font-weight: 300; line-height: 15px;';
						$labelbr = '<br/>';

						$nomeagencia = 'Models Black';

						break;


				}

				// arquivo logo-agencia.png deve ser diferente em cada URL, mas precisamos ter 4 logos e 4 molduras. Fazer moldura Kids e Maxfama. Ymodel e Model Kids já existem...


			foreach ($_POST['ordem'] as $key => $ordem):
				if($ordem){

					$ordem = explode('_', $ordem);
					$img = str_replace('https://maxsystem.blob.core.windows.net/pictures/'.$_POST['contrato'].'/', '', $ordem[1]);
					
//   echo "<script>console.log('Debug Objects: " . $ordem[1] . "' );</script>";
//     echo "<script>console.log('Debug Objects: " . 	$ordem . "' );</script>";
  
					copy( $ordem[1], 'img/'.$img );
					$imgNome = 'img/'.$_POST['contrato'].$ordem[0].time().'.jpg';

					rename ('img/'.$img, $imgNome);

					$img2 = $_POST['contrato'].$ordem[0].time().'.jpg';

					$img3[] = $img2;

					switch ($ordem[0]) {
						case 1:
						echo '<div style="float: left; background: url('.$ordem[1].'); background-size: cover; width: 516px; height: 730px;'.$margin1.'"></div>';
							
							break;
						case 2:
						echo '<div style="float: left; background: url('.$ordem[1].'); background-size: cover; width: 410px; height: 580px;'.$margin2.'"></div>';
							
							break;
						case 3:
						echo '<div style="float: left; background: url('.$ordem[1].'); background-size: cover; width: 410px; height: 580px;'.$margin3.'"></div>';
							
							break;
					}
					
				}

			endforeach;

				if(isset($_POST['exclusivo'])){ echo '<div style="width: 120px; height: 120px; margin-left: 15px; background: url(molduras/exclusivo.png); background-size: cover; z-index: 15; position: absolute;"></div>';}

				echo '<div style="width: 1436px; height: 780px; margin-left: 15px; background: url('.$tipo.'); background-size: cover; z-index: 5; position: absolute; border-color: #eee; border-width: 1px; border-style: solid;"></div>';
				echo '<div class="row" style="z-index: 10; float: left; text-align: center; margin-left: 566px; margin-top: 605px; position: absolute;">';
				

				if($_POST['tipo'] == 7){

					echo '<div style="z-index: 15; position: absolute; '.$nomediv.'">';
					echo '<span style="'.$nomestyle.'">'.$_POST['nomeartistico'].'</span>';
					echo '<div style="margin-left: 450px; margin-top: 0px; line-height: 18px; text-align: left;"><span style="'.$labelstyle.'">Contrato nº '.$labelbr.'</span><span style="'.$contratostyle.'">'.$_POST['contrato'].'</span></div>';

					echo '<div style=" z-index: 20; position: absolute; margin-left: 600px; margin-top: -30px;"><span style="'.$labelstyle.'">';

					if ($_POST['altura'] != ""){echo 'altura '.$_POST['altura'].'&nbsp;&nbsp;&nbsp;';}
					if ($_POST['manequim'] != ""){echo '|&nbsp;&nbsp;&nbsp;manequim '.$_POST['manequim'].'&nbsp;&nbsp;&nbsp;';}
					if ($_POST['calcado'] != ""){echo '|&nbsp;&nbsp;&nbsp;sapato '.$_POST['calcado'];}

					echo '</span></div>';



				}else{

					echo '<div style="padding-top:20px; '.$nomediv.'">';
					echo '<span style="'.$labelstyle.'">Contrato nº '.$labelbr.'</span><span style="'.$contratostyle.'">'.$_POST['contrato'].'</span><br/>'.$_POST['nomeartistico'].'<br/><span style="'.$datastyle.'">'.$_POST['nascimento'].'</span><br/><span style="'.$contratostyle.'">';

					if ($_POST['altura'] != ""){echo 'altura '.$_POST['altura'].'&nbsp;&nbsp;&nbsp;';}
					if ($_POST['manequim'] != ""){echo '|&nbsp;&nbsp;&nbsp;manequim '.$_POST['manequim'].'&nbsp;&nbsp;&nbsp;';}
					if ($_POST['calcado'] != ""){echo '|&nbsp;&nbsp;&nbsp;sapato '.$_POST['calcado'];}

					echo '</span>';
				}
							

				 ?>

					</div>	
				</div>

				<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
				<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/html2canvas@1.4.1/dist/html2canvas.min.js"></script>
				<script>
				html2canvas(document.body, {
				  width: 1436,
				  height: 780
				}).then(function(canvas) {
				   saveAs(canvas.toDataURL("image/jpeg"),"<?php echo $_POST['contrato']." - ".$_POST['nomeartistico']." - ".$nomeagencia; ?>");
				});

				function saveAs(uri, filename) {
				    var link = document.createElement('a');
				    if (typeof link.download === 'string') {
				      link.href = uri;
				      link.download = filename;

				      //Firefox requires the link to be in the body
				      document.body.appendChild(link);

				      //simulate click
				      link.click();

				      //remove the link when done
				      document.body.removeChild(link);

				    } else {
				      window.open(uri);

				    }
				  };

				</script>

				<?php

		} else {
			echo 'Você não escolheu ordenadamente as 3 Fotos do Modelo!</div></div>';
		}
	?>

</body>
</html>