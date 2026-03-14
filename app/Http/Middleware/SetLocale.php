<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use App\Enums\Locale;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->segment(1);

        if ($locale === Locale::ENGLISH->value) {
            app()->setLocale($locale);
            URL::defaults(['locale' => $locale]);
        } else {
            app()->setLocale(Locale::HUNGARIAN->value);
            URL::defaults(['locale' => null]);
        }

        return $next($request);
    }
}
