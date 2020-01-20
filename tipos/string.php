<div class="titulo">Tipo string</div>

<?php

echo'Eu sou uma string';
echo '<br>';
var_dump("eu também");
echo '<br>';

//concatenação

echo "Nós também".' somos';
echo '<br>',"Tambem aceito"," virgulas";

echo '<br>';
echo "'teste' ".' "teste" '.'\'teste\''."\"teste\""."\\";


print("<br>tambem existe a funcao print");
print "<br>tambem existe a funcao print sem parentes";

//algumas funções

echo'<br>'.strtoupper('maximizado');
echo'<br>'.strtolower('MINIMIZADO');
echo'<br>'.ucfirst('só a primeira letra maiscula');
echo'<br>'.ucwords('todas as primeiras letras');//deixa maiscula todas as primeiras letras
echo'<br>'.strlen('quantas letras?');//conta caracteres mas soma uma unidade quando tem assento
echo'<br>'.mb_strlen("eu também","utf-8");//contar caracteres sem o problema do assento
echo'<br>'.substr('Só uma parte mesmo',7,6);//selecionar uma parte da string // selecionou a palavra parte
echo'<br>'.str_replace('isso','aquilo',"trocar isso isso");//trocar strings