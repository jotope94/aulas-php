<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="assets\css\estilo.css">
   <link rel="stylesheet" href="assets\css\exercicios.css">
    <title>Exercícios</title>
</head>
<body class="exercicios">
   <header class="cabecalho">
        <h1>Curso PHP</h1> 
        <h2>Visualização do Exercícios</h2>  
 
   </header>
  
   <main class="principal"> <nav class="navegacao">
     <a href=<?="/{$_GET['dir']}/{$_GET['file']}.php"?> class="verde">Sem formatação</a>
     <a href="index.php" class="vermelho">Voltar</a>
   </nav>
       <div class="conteudo">
      <?php
         // include($_GET['dir']."/".$_GET['file'].".php");
         include("{$_GET['dir']}/{$_GET['file']}.php");
      ?>

        </div>
   </main>
   
   
    <footer class="rodape">
        Joao @ <?=date('Y');?>
   </footer>
   
</body>
</html>