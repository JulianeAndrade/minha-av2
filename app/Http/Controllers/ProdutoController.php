<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::all();

        return view('produto.index', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $produto = new Produto;
            $produto->descricao = $request->input('descricao');
            $produto->preco = $request->input('preco');
            $produto->quantidade = $request->input('quantidade');
            $produto->save();

            return redirect()->action('ProdutoController@index');
        } catch (\Throwable $th) {
            echo "$th";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = Produto::findOrfail($id);

        return view('produto.edit', compact('produto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        try {
            $produto = Produto::find($id);

            $produto->descricao = $request->input('descricao');
            $produto->preco = $request->input('preco');
            $produto->quantidade = $request->input('quantidade');

            $produto->save();

            return redirect()->action('ProdutoController@index');

           } catch (\Throwable $th) {
               echo $th;
           }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = Produto::find($id); // return Model;

        $produto->delete();

        return redirect()->action('ProdutoController@index');
    }
}
