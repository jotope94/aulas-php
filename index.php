<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="assets\css\estilo.css">
    <title>Curso PHP</title>
</head>
<body>
   <header class="cabecalho">
        <h1>Curso PHP</h1> 
        <h2>Índice de Exercícios</h2>  
 
   </header>
   
   <main class="principal">
       <div class="conteudo">
          <nav class="modulos">
              <div class="modulo verde">
                  <h3>Modulo 01</h3>
                  <ul>
                      <li><a href="exercicios.php?dir=basico&file=ola">Olá PHP</a></li>
                      <li><a href="exercicios.php?dir=basico&file=html">Integração HTML</a></li>
                      <li><a href="exercicios.php?dir=basico&file=css">Integração CSS</a></li>
                      <li><a href="exercicios.php?dir=basico&file=comentarios">Comentarios PHP</a></li>
                      <li><a href="exercicios.php?dir=basico&file=desafio">Desafio</a></li>
                  </ul>
              </div>

              <div class="modulo vermelho">
                  <h3>Modulo 02</h3>
                  <ul>
                      <li><a href="exercicios.php?dir=tipos&file=int">Tipo Inteiro</a></li>
                      <li><a href="exercicios.php?dir=tipos&file=float">Tipo float</a></li>
                      <li><a href="exercicios.php?dir=tipos&file=aritmeticas">Aritmeticas</a></li>
                      <li><a href="exercicios.php?dir=tipos&file=desafio_precedencia">Desafio Precedencia</a></li>
                      <li><a href="exercicios.php?dir=tipos&file=string">Tipo String</a></li>
                      <li><a href="exercicios.php?dir=tipos&file=desafio_string">Desafio string</a></li>
                      <li><a href="exercicios.php?dir=tipos&file=booleano">Tipo booleano</a></li>
                      <li><a href="exercicios.php?dir=tipos&file=conversoes">Conversoes</a></li>

                  </ul>
              </div>
          </nav>
        </div>
   </main>
   
   
    <footer class="rodape">
        Joao @ <?=date('Y');?>
   </footer>
   
</body>
</html>