<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Secretario;
use App\Models\UsuarioTipo;

class cadastroController extends Controller  {

    public function cadastroAluno(Request $request){
        //controle de qual nav será usada
        $dados['nav'] = Controller::nav();

        return view('cadastro/aluno', $dados);
    }

    /**
     * Função do cadastro de secretario
     *
     * @param Request $request
     * @return view
     */
    public function cadastroSecretario(Request $request){
        //cptura os dados da request e salva na variavel dados
        $dados = $request->all();
        
        //valida se veio algum dados via post
        if($dados){
            //chama o modelo do usuario
            $usuarioModel = new Usuario();
            $secretarioModel = new Secretario();
            $usuarioTipoModel = new UsuarioTipo();
            
            //faz as validações de dados

            //verifica se a senha é igual ao confirma senha
            if($dados['senha'] != $dados['confirmaSenha']){
                $dados['msg']['erro'] = 'senha';
            }

            //verifica se o email já existe
            $usuario = $usuarioModel::where('email', $dados['email'])->get();
            if(count($usuario) != 0){
                $dados['msg']['erro'] = 'email';
            }

            //caso não haja erro cadastra no banco
            if(!isset($dados['msg']['erro'])){
                //cadastro o usuario na base de dados
                //do usuario
                $usuarioModel->nome = $dados['nome'];
                $usuarioModel->email = $dados['email'];
                $usuarioModel->senha = $dados['senha'];
                $usuarioModel->cpf = $dados['cpf'];
                $usuarioModel->telefone = $dados['telefone'];
                $usuarioModel->nascimento = $dados['nascimento'];
                $usuarioModel->save();
                
                //do secretario
                $secretarioModel->turno = $dados['turno'];
                $secretarioModel->save();

                //usuario tipo
                $usuarioTipoModel->usuario_id = $usuarioModel->id;
                $usuarioTipoModel->relacionamento_id = $secretarioModel->id;
                $usuarioTipoModel->tipo = "Secretario";
                $usuarioTipoModel->save();
 
                //define o erro como sucesso
                $dados['msg']['erro'] = 'sucesso';
                $dados['msg']['secretario'] = $dados['nome'];
            }

        }else{
            //seta os dados para a view
            $dados['msg']['erro'] = '';
            $dados['msg']['secretario'] = '';
            //do usuario
            $dados['nome'] = '';
            $dados['email'] = '';
            $dados['cpf'] = '';
            $dados['telefone'] = '';
            $dados['nascimento'] = '';
            //do secretario
            $dados['turno'] = '';
        }

        //controle de qual nav será usada
        $dados['nav'] = Controller::nav();

        //retorna  a view
        return view('cadastro/secretario', $dados);
    }
} 