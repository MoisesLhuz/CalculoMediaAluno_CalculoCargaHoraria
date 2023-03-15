<?php 

	$nameAluno = $_POST['nameAluno'];
	$freqAluno = $_POST['freqAluno'];
	$nota1 = $_POST['nota1'];
	$nota2 = $_POST['nota2'];
	$nota3 = $_POST['nota3'];

	$media = ($nota1+$nota2+$nota3)/3;

	if ($freqAluno < 75) {
		echo "Aluno(a): ".$nameAluno. "<br>Status: Reprovado!! Frequência Inferior a 75%";		
	}else{
		if ($freqAluno > 75 && $media >= 7) {
			echo "Aluno(a): ".$nameAluno."<br>Frequência: ".$freqAluno."%<br>Status: Aprovado<br>Média: ".$media;
		}elseif ($media >=4 && $media < 7) {
			echo "Aluno(a): ".$nameAluno."<br>Frequência: ".$freqAluno."%<br>Status: Conselho<br>Média: ".$media;
		}else{
			echo "Aluno(a): ".$nameAluno. ".<br>Frequência: ".$freqAluno."%<br>Média: ".$media.".<br>Status: Reprovado!! Média Inferior a 4";
		}
	}
	
 ?>