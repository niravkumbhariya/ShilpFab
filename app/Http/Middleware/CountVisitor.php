<?php

namespace App\Http\Middleware;

use App\Models\Visitor;
use Closure;
use Illuminate\Http\Request;

class CountVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Skip counting for admin routes
        if ($request->is('admin/*') || $request->is('admin')) {
            return $next($request);
        }

        $ip = $request->ip();
        $today = now()->toDateString();

        $exists = Visitor::where('ip', $ip)->where('date', $today)->exists();

        if (!$exists) {
            Visitor::create([
                'ip' => $ip,
                'date' => $today,
            ]);
        }

        return $next($request);
    }
}
