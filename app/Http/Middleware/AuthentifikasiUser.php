<?php 
namespace App\Http\Middleware;

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
 		if($this->auth->check()){
 			return $next($request);
 		}
 		// if($this->auth->check()){
 		// 	return $next($request);
 		// }
 		return redirect('login')->withErrors('silahkan login terlebih dahulu');
 	}
 } 

 ?>