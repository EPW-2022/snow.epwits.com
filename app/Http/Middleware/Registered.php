<?php

namespace App\Http\Middleware;

use Closure;
use phpDocumentor\Reflection\Types\Null_;

class Registered
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
    if (auth()->user()->is_verified == false) {
      return redirect('/verifakun');
    } else {
      return $next($request);
    }
  }
}
