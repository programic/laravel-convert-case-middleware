<?php

namespace Programic\LaravelConvertCaseMiddleware;

use Closure;
use Illuminate\Http\Request;

class ConvertRequestToSnakeCase
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $converted = resolve(CaseConverter::class)->convert(
            CaseConverter::CASE_SNAKE,
            $request->all()
        );

        $request->replace($converted);

        return $next($request);
    }
}
