<a href="{{ route('artigos.create') }}">Criar Artigo</a>
<table>
    @foreach($artigos as $artigo)
        <tr>
            <td>{{ $artigo->titulo }}</td>
            <td><img src="{{ asset('storage/' . $artigo->imagem) }}" alt="{{ $artigo->titulo }}" width="300"></td>
            <td>
                <a href="{{ route('artigos.show', $artigo->id) }}">Ver</a>
                <a href="{{ route('artigos.edit', $artigo->id) }}">Editar</a>
                <form action="{{ route('artigos.destroy', $artigo->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
