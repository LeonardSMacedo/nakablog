<h1>{{ $artigo->titulo }}</h1>
<p>{{ $artigo->conteudo }}</p>
<img src="{{ asset('storage/' . $artigo->imagem) }}" alt="{{ $artigo->titulo }}" width="300">
<a href="{{ route('artigos.index') }}">Voltar</a>
