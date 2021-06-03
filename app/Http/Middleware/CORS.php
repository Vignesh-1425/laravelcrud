<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CORS
{
    public function handle(Request $request, Closure $next)
    {
		return $next($request)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PATCH, PUT, DELETE')
			->header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization');
    }
}
