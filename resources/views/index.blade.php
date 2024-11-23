<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <title>Naka Blog</title>
</head>
<body>
  <header>
    <img class="logo" src="{{ asset('/images/nakablog.png') }}" alt="Logo Naka">
  </header>
  <main>
    <div class="content">
      <div class="continho">
        <h1 class="title">Artigos <span class="nameNaka">Naka Blog</span></h1>
        <p class="text">Seu Espaço para Artigos Relevantes, Informações Atualizadas e Insights Interessantes sobre Diversos Temas</p>
        <div class="botoes">
          <button class="btn btnLeia">Ler Artigos</button>
          <button class="btn btnCria">Criar meu Artigo</button>
        </div>
      </div>
    </div>
  </main>
</body>
</html>