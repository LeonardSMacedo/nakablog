<form action="{{ route('artigos.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <input type="text" name="titulo" placeholder="Título" required>
  <textarea name="conteudo" placeholder="Conteúdo" required></textarea>
  <input type="file" name="imagem" accept="image/*">
  <button type="submit">Salvar</button>
</form>
