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

    public function handle( $request, Closure $next )
 {
        session_start();
        if ( isset( $_SESSION['email'] ) && $_SESSION['email'] != '' ) {
          //  print_r($_SESSION);
            
            return $next( $request );
        } else {
            return redirect()->route( 'sistema.login', ['erro' => 2] );
        }
    }
}
