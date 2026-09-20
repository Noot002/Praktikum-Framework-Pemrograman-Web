<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    public function handle(Request $request, Closure $next, string ...$roles): Response
    {
        if (! $request->user() || ! in_array($request->user()->role, $roles)) {
            return response()->view('errors.403', [
                'message' => 'Akses Ditolak! Anda tidak memiliki izin untuk membuka halaman ini.'
            ], 403);
        }
        
        return $next($request);
    }
}
