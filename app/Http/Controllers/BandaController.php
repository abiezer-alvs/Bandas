<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banda;
use Storage;

class BandaController extends Controller
{
    public function registros(){
        $bandas = Banda::paginate(5);
        return view('registros', compact('bandas'));
    }
    public function card_bandas() {
            return view('bandas');
        }

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function aviso(){
        return view('aviso');
    }

    public function edita($id){
        $bandas = Banda::find($id);
        return view('editaDados', compact('bandas'));
    }

    public function dados(){
        return view('dados');
    }

    public function recebe_dados(Request $request){
        $dados = $request->except('_token', 'submit');
        $banda = new Banda();
        $this->validate($request, $banda->rules, $banda->messages);
        if ($request->hasFile('imagem')){ 
            $novoNome = $request->file('imagem')->store('imagens', 'public');
            $dados['imagem'] = $novoNome;
        }
        $insert = Banda::create($dados);
        if($insert)
            return redirect()->route('registros') ->with('success', 'Sugestão inserida com sucesso!');
        else 
            return redirect()->route('dados') ->with('error', 'Falha ao inserir sugestão');       
    }

    public function atualiza(Request $request, $id){
        $dados = $request->except('_token', 'submit');
        $bandas = Banda::find($id);
        $this->validate($request, $bandas->rules, $bandas->messages);
        if ($request->hasFile('imagem')){
            $novoNome = $request->file('imagem')->store('imagens', 'public');
            $dados['imagem'] = $novoNome;
        }
        $update = $bandas->update($dados);
        if($update)
            return redirect()->route('registros')->with('success', 'Sugestão atualizada com sucesso!');
        else
            return redirect()->route('edita', $id)->with('error', 'Falha ao editar sugestão');
    }
    
    public function apaga($id){
        $banda = Banda::find($id);
        if($banda->getAttributes()['imagem'] != NULL) 
            Storage::disk('public')->delete($banda->getAttributes()['imagem']);
            $delete = $banda->delete();
        if($delete)
            return redirect()->route('registros')->with('success', 'Sugestão removida com sucesso!');
        else
            return redirect()->route('registros')->with('error', 'Falha ao remover sugestão');
        }
   
        
}
