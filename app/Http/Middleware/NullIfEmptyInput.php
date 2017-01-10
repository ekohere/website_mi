<?php
/**
 * Created by PhpStorm.
 * User: Eko
 * Date: 07/12/2016
 * Time: 09.37
 */

namespace App\Http\Middleware;

use Closure;
class NullIfEmptyInput
{
    public function handle($request, Closure $next)
    {
        $input = $request->all();

        if($input)
        {
            array_walk_recursive($input, function (&$item)
            {
                $item = trim($item);
                $item = ($item == "")? null : $item;
            });

            $request->merge($input);
        }

        return $next($request);
    }
}