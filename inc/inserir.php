<?php
	include ("functions.php");
        session_start();

	$_SESSION['RECADASTRO']=$_POST;
	extract ($_POST);
	
	if(!isset($Info_word)){
		$Info_word=0;
		$_SESSION['RECADASTRO']['Info_word']=0;
	}
	if(!isset($Info_excel)){
		$Info_excel=0;
		$_SESSION['RECADASTRO']['Info_excel']=0;
	}
	if(!isset($Info_internet)){
		$Info_internet=0;
		$_SESSION['RECADASTRO']['Info_internet']=0;
	}
	if(!isset($Pensao_Paga)){
		$Pensao_Paga=0;
		$Pensao_Paga_Val=NULL;
		$_SESSION['RECADASTRO']['Pensao_Paga']=0;
		$_SESSION['RECADASTRO']['Pensao_Paga_Val']=NULL;
	}
	if(!isset($Pensao_Recebe)){
		$Pensao_Recebe=0;
		$Pensao_Recebe_Val=NULL;
		$_SESSION['RECADASTRO']['Pensao_Recebe']=0;
		$_SESSION['RECADASTRO']['Pensao_Recebe_Val']=NULL;
	}
	if(!isset($Deficiente)){
		$Deficiente=0;
		$_SESSION['RECADASTRO']['Deficiente']=0;
	}else{
		if($Deficiente_Qual=="Outra"){
			$Deficiente_Qual=$Def_Outra;
			$_SESSION['RECADASTRO']['Deficiente_Qual']=$Def_Outra;
		}	
	}
	if(!isset($Idoso)){
		$Idoso=0;
		$_SESSION['RECADASTRO']['Idoso']=0;
	}
	if(!isset($PlanoDeSaude)){
		$PlanoDeSaude=0;
		$_SESSION['RECADASTRO']['PlanoDeSaude']=0;
	}
	if(!isset($Transferencia)){
		$Transferencia=0;
		$_SESSION['RECADASTRO']['Transferencia']=0;
		$_SESSION['RECADASTRO']['Transferencia_Qual']=NULL;
	}
	if(!isset($CadUnico)){
		$CadUnico=0;
		$_SESSION['RECADASTRO']['CadUnico']=0;
		$_SESSION['RECADASTRO']['NIS']=NULL;
	}

	$TemEmCasa=$TemEmCasa1.$TemEmCasa2.$TemEmCasa3.$TemEmCasa4.$TemEmCasa5.$TemEmCasa6.$TemEmCasa7.$TemEmCasa8.$TemEmCasa9.$TemEmCasa10.$TemEmCasa11.$TemEmCasa12.$TemEmCasa13;
	$_SESSION['RECADASTRO']['TemEmCasa']=$TemEmCasa;

	$SQL="UPDATE funcionarios SET ";
	$SQL.="\n 	Mae='".@utf8_encode(strtoupper($Mae))."',";
	$SQL.="\n 	Pai='".@utf8_encode(strtoupper($Pai))."',";
	$SQL.="\n 	Naturalidade='".@utf8_encode(strtoupper($Naturalidade))."',";
	$SQL.="\n 	UF='".@utf8_encode($UF)."',";
	$SQL.="\n 	RG_NUM='".@utf8_encode(strtoupper($RG_NUM))."',";
	$SQL.="\n 	RG_ORG='".@utf8_encode(strtoupper($RG_ORG))."',";
	$SQL.="\n 	RG_UF='".@utf8_encode($RG_UF)."',";
	$SQL.="\n 	Deficiente='".@utf8_encode($Deficiente)."',";
	$SQL.="\n 	Deficiente_Qual='".@utf8_encode($Deficiente_Qual)."',";
	$SQL.="\n 	Grau_escolar='".@utf8_encode($Grau_escolar)."',";
	$SQL.="\n 	Status_escolar='".@utf8_encode($Status_escolar)."',";
	$SQL.="\n 	Formacao='".@utf8_encode(strtoupper($Formacao))."',";
	$SQL.="\n       Lotado='".@utf8_encode(strtoupper($Lotado))."',";
	$SQL.="\n       Sup_Imediato='".@utf8_encode(strtoupper($Sup_Imediato))."',";
	$SQL.="\n 	End_Rua='".@utf8_encode(strtoupper($End_Rua))."',";
	$SQL.="\n 	End_Num='".@utf8_encode(strtoupper($End_Num))."',";
	$SQL.="\n 	End_Comp='".@utf8_encode(strtoupper($End_Comp))."',";
	$SQL.="\n 	End_Bairro='".@utf8_encode(strtoupper($End_Bairro))."',";
	$SQL.="\n 	End_CEP='".@utf8_encode(strtoupper($End_CEP))."',";
	$SQL.="\n 	End_Cidade='".@utf8_encode(strtoupper($End_Cidade))."',";
	$SQL.="\n 	End_UF='".@utf8_encode($End_UF)."',";
	$SQL.="\n 	Fone_Fixo='".@utf8_encode($Fone_Fixo)."',";
	$SQL.="\n 	Fone_Tipo='".@utf8_encode($Fone_Tipo)."',";
	$SQL.="\n	Fone_Cel='".@utf8_encode($Fone_Cel)."',";
	$SQL.="\n	Email='".@utf8_encode(strtoupper($Email))."',";
	$SQL.="\n	Cor='".@utf8_encode($Cor)."',";
	$SQL.="\n	EstCivil='".@utf8_encode($EstCivil)."',";
	$SQL.="\n	CadUnico='".@utf8_encode($CadUnico)."',";
	$SQL.="\n	NIS='".@utf8_encode($NIS)."',";
	$SQL.="\n	TimeRes='".@utf8_encode($TimeRes)."',";
	$SQL.="\n	Hab_Tipo='".@utf8_encode($Hab_Tipo)."',";
	$SQL.="\n	Hab_Modo='".@utf8_encode($Hab_Modo)."',";
	$SQL.="\n	Hab_Quit='".@utf8_encode($Hab_Quit)."',";
	$SQL.="\n	Hab_Valor='".@utf8_encode($Hab_Valor)."',";
	$SQL.="\n	Trans_Forma='".@utf8_encode($Trans_Forma)."',";
	$SQL.="\n	Trans_Tipo='".@utf8_encode($Trans_Tipo)."',";
	$SQL.="\n	Ling_Ingles='".@utf8_encode($Ling_Ingles)."',";
	$SQL.="\n	Ling_Espanhol='".@utf8_encode($Ling_Espanhol)."',";
	$SQL.="\n	Ling_Outros='".@utf8_encode(strtoupper($Ling_Outros))."',";
	$SQL.="\n	Ling_extra='".@utf8_encode(strtoupper($Ling_extra))."',";
	$SQL.="\n	Info_word=".@utf8_encode($Info_word).",";
	$SQL.="\n	Info_excel=".@utf8_encode($Info_excel).",";
	$SQL.="\n	Info_internet=".@utf8_encode($Info_internet).",";
	$SQL.="\n	Info_Outros='".@utf8_encode(strtoupper($Info_Outros))."',";
	$SQL.="\n	Pensao_Paga=".@utf8_encode($Pensao_Paga).",";
	$SQL.="\n	Pensao_Paga_Val='".@utf8_encode($Pensao_Paga_Val)."',";
	$SQL.="\n	Pensao_Recebe_Val='".@utf8_encode($Pensao_Recebe_Valor)."',";
	$SQL.="\n	Transferencia='".@utf8_encode($Transferencia)."',";
	$SQL.="\n	Transferencia_Qual='".@utf8_encode($Transferencia_Qual)."',";
	$SQL.="\n	Pensao_Recebe='".@utf8_encode($Pensao_Recebe)."',";
	$SQL.="\n	Renda_Mensal_Individual=".@utf8_encode($Renda_Mensal_Individual).",";
	$SQL.="\n	Renda_Mensal_Capita=".@utf8_encode($Renda_Mensal_Capita).",";
	$SQL.="\n	Deficiente=".@utf8_encode($Deficiente).",";
	$SQL.="\n	Deficiente_Grau='".@utf8_encode($Deficiente_Grau)."',";
	$SQL.="\n	Deficiente_Qual='".@utf8_encode($Deficiente_Qual)."',";
	$SQL.="\n	Idoso=".@utf8_encode($Idoso).",";
	$SQL.="\n	TemEmCasa='".@utf8_encode($TemEmCasa)."',";
	$SQL.="\n	PlanoDeSaude=".@utf8_encode($PlanoDeSaude).",";
	$SQL.="\n	PlanoDeSaude_Qual='".@utf8_encode($PlanoDeSaude_Qual)."',";
	$SQL.="\n	Observacoes='".@utf8_encode($Observacoes)."',";
	$SQL.="\n	Preenchido=1, ";
	$SQL.="\n	Quando=NOW() ";
	$SQL.="\nWHERE CPF='".@utf8_encode($CPF)."';";

	$PDO=conecta();
	$SQLDelete="DELETE FROM familiares WHERE CPF = '".$CPF."'"; 
	$RES1=$PDO->query($SQLDelete);
	if($result = $PDO->query($SQL)){
		if($familiatotal>0){
			for ($i=0;$i<$familiatotal;$i++){
				$tmpNome='FamiliarNome'.$i;
				$tmpNascto="FamiliarDataNasc".$i;
				$tmpParentesco="FamiliarParentesco".$i;
				$tmpEscolaridade="FamiliarEscolaridade".$i;
				$tmpOcupacao="FamiliarOcupacao".$i;
				$tmpRemuneracao="FamiliarRemuneracao".$i;

				if(!empty($$tmpNome)){
	
					$SQLInsert="INSERT INTO familiares (
							CPF,
							Nome,
							DataNasc,
							Parentesco,
							Escolaridade,
							Ocupacao,
							Remuneracao)
							VALUES(
								'".$CPF."',
								'".$$tmpNome."',	
								'".$$tmpNascto."',	
								'".$$tmpParentesco."',	
								'".$$tmpEscolaridade."',	
								'".$$tmpOcupacao."',	
								'".$$tmpRemuneracao."');";

					$RES2=$PDO->query($SQLInsert);
				}
			}
		}
		header('location: '.getURL().'/views/imprime.php');
		exit;
	}else{
		header('location: '.getURL().'/?MSG=Erro ao Inserir, Entre em contato com o CPD');
		exit;
	}
?>
