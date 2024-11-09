<?php
namespace App\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin{
    public function handle(Request $request, Closure $next): Response {
        if (auth()->check() || !auth()->user()->is_admin) {
        abort(Response::HTTP_FORBIDDEN);
    }
        return $next($request);
    }
}
