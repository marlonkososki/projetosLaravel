<?php

namespace App\Http\Middleware;

use Closure;
use App\FrenteCaixa;
use App\User;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next)
    {
        session_start();
        if (isset($_SESSION['email']) && $_SESSION['email'] != '') {
            //print_r( $_SESSION );
            $ldate = date('Y-m-d H:i:s');

            $users = User::where('email', $_SESSION['email'])->pluck('id')->all();

            $caixas = FrenteCaixa::orderBy('updated_at',  'DESC')->first();

            if ($caixas == null) {

                print_r($users);
                $caixa = new FrenteCaixa();
                $caixa->user_id = $users[0];
                $caixa->valor_inicial = 0.00;
                $caixa->valor_final = 0.00;
                $caixa->abertura = $ldate;

                $caixa->save();

            } else if(isset($caixas->fechamento) && $caixas->fechamento != ''){
               
                print_r($users);
                $caixa = new FrenteCaixa();
                $caixa->user_id = $users[0];
                $caixa->valor_inicial = 0.00;
                $caixa->valor_final = 0.00;
                $caixa->abertura = $ldate;

                $caixa->save();
            }

            return $next($request);
        } else {
            return redirect()->route('sistema.login', ['erro' => 2]);
        }
    }
}
