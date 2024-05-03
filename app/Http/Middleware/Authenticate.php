<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as IlluminateAuthenticate;

class Authenticate extends IlluminateAuthenticate
{
    public function handle($request, Closure $next, ...$guards)
    {
        // Your custom logic here
        return parent::handle($request, $next, ...$guards);
    }
}
