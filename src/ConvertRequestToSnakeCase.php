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
        $request->replace(
            resolve(CaseConverter::class)->convert(
                CaseConverter::CASE_SNAKE,
                $request->all()
            )
        );

        return $next($request);
    }
}
