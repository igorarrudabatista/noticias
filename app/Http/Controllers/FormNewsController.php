<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\FormNews;

class FormNewsController extends Controller
{
    public function produtos() {

        
        $produtos = Produto::all();
       // $produtos = Produto::paginate(10);

        $search = request('search');

        if($search) {
            $produtos = Produto::where ([['Nome_Produto', 'like', '%'.$search. '%' ]])->get();

             } else {
                $produtos = Produto::all();
            }
        

        return view('produtos.produtos', ['produtos'=> $produtos, 'search' => $search]);

    }
    
    public function store (Request $request) {
        
        
        $criar_produto =  new Produto;
        
        $criar_produto -> Nome_Produto       = $request->Nome_Produto;
        $criar_produto -> Categoria_Produto  = $request->Categoria_Produto;
        $criar_produto -> Status_Produto     = $request->Status_Produto;
        $criar_produto -> Preco_Produto      = $request->Preco_Produto;
        $criar_produto -> Estoque_Produto    = $request->Estoque_Produto;
        $criar_produto -> Quantidade_Produto = $request->Quantidade_Produto;
        
        
        // Imagem do produto upload
        if ($request->hasFile('image')&& $request->file('image')->isValid()){
            
            $requestImage = $request -> image;
            
            $extension = $requestImage-> extension();
            
            $imageName = md5($requestImage -> getClientOriginalName() . strtotime("now")) . "." . $extension;
            
            $request -> image->move(public_path('img/produtos'), $imageName);
            
            $criar_produto -> image = $imageName;
            
        }
        
        $criar_produto ->save();
        
        $criar_produto = Produto::all();
        
        toast('Produto criado com sucesso!','success');

       return redirect('/produtos/produtos');

         

    }


    public function create (){

        return view ('formsNews.create');
        }



    public function edit ($id){

        $editar_produto = Produto::findOrFail($id);

        return view ('produtos.edit', ['editar_produto'=> $editar_produto]);


    }

    public function update (Request $request){
        
        $data = $request->all();
        
        
        // Imagem do produto upload
        if ($request->hasFile('image')&& $request->file('image')->isValid()){
            
            $requestImage = $request -> image;
            
            $extension = $requestImage-> extension();
            
            $imageName = md5($requestImage -> getClientOriginalName() . strtotime("now")) . "." . $extension;
            
            $request -> image->move(public_path('img/produtos'), $imageName);
            
            $data['image'] = $imageName;
            
        }
        toast('Produto editado com sucesso!','success');

        Produto::findOrFail($request->id) -> update ($data);
        return redirect('/produtos/produtos');



    }

    public function destroy($id){
   
       Produto::findOrFail($id) -> delete();
       toast('Produto deletado com sucesso!','error');
        return redirect('/produtos/produtos');
    }
}
