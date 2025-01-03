<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        $user = auth()->user(); // Lekérdezzük az aktuális bejelentkezett felhasználót

        // Ha a felhasználó nincs bejelentkezve
        if (!$user) {
            abort(403, 'Unauthorized');
        }

        // Admin jogosultság ellenőrzése (role === 0)
        if ($role === 'admin' && $user->role !== 0) {
            abort(403, 'Unauthorized');
        }

        // Dokumentumellenőrző jogosultság ellenőrzése (role <= 1, tehát admin és dokumentumellenőrző)
        if ($role === 'document_checker' && $user->role > 1) {
            abort(403, 'Unauthorized');
        }

        // Statisztikai lekérdező jogosultság ellenőrzése (role <= 2, tehát mindenki, aki statisztikai lekérdező vagy alacsonyabb)
        if ($role === 'statistic_viewer' && $user->role > 2) {
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}
