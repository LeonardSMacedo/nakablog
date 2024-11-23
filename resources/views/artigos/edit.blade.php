<form action="{{ route('artigos.update', $artigo->id) }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <input type="text" name="titulo" value="{{ $artigo->titulo }}" required>
  <textarea name="conteudo" required>{{ $artigo->conteudo }}</textarea>
  <input type="file" name="imagem" accept="image/*">
  <button type="submit">Atualizar</button>
</form>
