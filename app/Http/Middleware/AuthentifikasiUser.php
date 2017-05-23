<?php 
namespace App\Http\Middleware;
use Auth;
use Closure;

/**
 * 
 */
 class AuthentifikasiUser
 {
 	private $auth;
 	public function __construct()
 	{
 		# code...
 		$this->auth = app('auth');
 	}
 	public function handle($request, Closure $next)
 	{
 		# code...
 		if(Auth::check() &&  Auth::user()->level == 1){
 			return $next($request);
 		}
 		// if($this->auth->check()){
 		// 	return $next($request);
 		// }
 		return redirect('login')->withErrors('silahkan login terlebih dahulu');
 	}
 } 

 ?>