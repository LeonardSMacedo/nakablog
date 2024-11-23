<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Artigo;
use Illuminate\Http\Request;

class ArtigoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artigos = Artigo::all();
        return view('artigos.index', compact('artigos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artigos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|max:255',
            'conteudo' => 'required',
            'imagem' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $dados = $request->all();

        // Processar a imagem
        if ($request->hasFile('imagem')) {
            $path = $request->file('imagem')->store('imagens/artigos', 'public');
            $dados['imagem'] = $path;
        }

        Artigo::create($dados);
        return redirect()->route('artigos.index')->with('success', 'Artigo criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Artigo $artigo)
    {
        return view('artigos.show', compact('artigo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artigo $artigo)
    {
        return view('artigos.edit', compact('artigo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artigo $artigo)
    {
        $request->validate([
            'titulo' => 'required|max:255',
            'conteudo' => 'required',
            'imagem' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $dados = $request->all();

        if ($request->hasFile('imagem')) {
            // Remover imagem antiga (se existir)
            if ($artigo->imagem && Storage::disk('public')->exists($artigo->imagem)) {
                Storage::disk('public')->delete($artigo->imagem);
            }

            $path = $request->file('imagem')->store('imagens/artigos', 'public');
            $dados['imagem'] = $path;
        }

        $artigo->update($dados);
        return redirect()->route('artigos.index')->with('success', 'Artigo atualizado com sucesso!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artigo $artigo)
    {
        if ($artigo->imagem && Storage::disk('public')->exists($artigo->imagem)) {
            Storage::disk('public')->delete($artigo->imagem);
        }

        $artigo->delete();
        return redirect()->route('artigos.index')->with('success', 'Artigo excluído com sucesso!');
    }

}
