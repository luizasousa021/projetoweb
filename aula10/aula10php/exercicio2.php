<?php

//PEÇA PARA O UNÚARIO DIGITAR O NOME E A NOTA FINAL DE 7 ALUNOS.
//EXIBA A MÉDIA DA TURMA E QUAIS ALUNOS POSSUEM NOTAS ACIMA DA MÉDIA
//E QUAIS ESTÃO ABAIXO DA MÉDIA.

$nome = array("andrea","andressa","anna","ariel","carina","elisangela","eulalia");
$nota = array(10,9,8,7,6,5,4);
$media =0;
$soma = 0;
$contador =0;

foreach ($nota as $n){
    //$soma = $soma +$n;
    $conatdor++;
    $soma += $n;

}
echo" <br/>  A soma das notas é ;" .$soma;
echo "<br/>A quanatidade de aluno ;" .$contador;
$media = $soma / $contador;
echo"<br/>  A média da turma é ;" .$media;

foreach ($nota as $chaves => $nota){
    if($nota >= $media){
        echo "br/> o aluno" .$nome($chave). "teve nota acima da média ".$nota."<br/>";

    }else{
        echo "br/> o aluno" .$nome($chave). "teve nota abaixo da média ".$nota."<br/>";

    }
}

?>