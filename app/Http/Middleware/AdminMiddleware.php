<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();

        if (! $user || ! ($user->is_admin ?? false)) {
            abort(403, 'Unauthorized - admin only');
        }

        return $next($request);
    }
}

