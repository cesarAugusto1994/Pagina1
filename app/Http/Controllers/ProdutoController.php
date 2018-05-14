<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Okipa\LaravelBootstrapTableList\TableList;
use App\Models\Produto;
use Illuminate\Support\Facades\Validator;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table = app(TableList::class)
          ->setModel(Produto::class)
          ->setRoutes([
             'index'      => ['alias' => 'produto.index', 'parameters' => []],
             'create'     => ['alias' => 'produto.create', 'parameters' => []],
             'edit'       => ['alias' => 'produto.edit', 'parameters' => []],
             'destroy'    => ['alias' => 'produto.destroy', 'parameters' => []],
          ]);
        // we add some columns to the table list
        $table->addColumn('nome')
          ->setTitle('Nome')
          ->isSortable()
          ->isSearchable()
          ->sortByDefault()
          ->useForDestroyConfirmation();
        $table->addColumn('descricao')
          ->setTitle('Descrição')
          ->setStringLimit(30);
          $table->addColumn('valor')
            ->setTitle('Valor');
        $table->addColumn('created_at')
          ->setTitle('Creation date')
          ->isSortable()
          ->setColumnDateFormat('d/m/Y H:i:s');
        $table->addColumn('updated_at')
          ->setTitle('Update date')
          ->isSortable()
          ->setColumnDateFormat('d/m/Y H:i:s');

        return view('admin.produto.index', compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.produto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->request->all();

        $data['valor'] = (float)$data['valor'];

        $validator =  Validator::make($data, [
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'valor' => 'required|numeric',
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $produto = Produto::create($data);

        return redirect()->route('produto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = Produto::findOrFail($id);

        return view('admin.produto.edit', compact('produto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->request->all();

        $data['valor'] = (float)$data['valor'];

        $validator =  Validator::make($data, [
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'valor' => 'required|numeric',
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $produto = Produto::findOrFail($id);
        $produto->nome = $data['nome'];
        $produto->descricao = $data['descricao'];
        $produto->valor = $data['valor'];
        $produto->save();

        return redirect()->route('produto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
