<?php

namespace App\Http\Middleware;

use Closure;

class AuthorizeUserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {

        /**
         * use , treated as [array(0=>role1,1=>role2)];
         * use : treated as [array(0=>rol1:role2)];
         * use | treated as [array(0=>role1|role2)];
         */

        $testarray = array();
        $merge_array = array();

        foreach ($roles as $value) {
            if (!preg_match("/[@#%$|:;\s,]+/", $value)) {
                array_push($merge_array, $value);

            } else {
                $testarray = preg_split("/[@#%$|:;\s,]+/", $value);
            }

            $merge_array = array_merge($merge_array, $testarray);
        }
        $merge_array = array_unique($merge_array);
        // print_r($merge_array);

        //   dd($merge_array);

        $roles = $merge_array;
        //    dd($roles);

        if ($request->user() == null) {
            return response("Insufficient Permission", 401);
        }

        if ($request->user()->hasAnyRole($roles) || !$roles) {
            return $next($request);
        }
        return response('Insufficient Permission', 401);

        return $next($request);

        # regex tips...
        /*
    "/[\s,]+/"

    / = start or end of pattern string
    [ ... ] = grouping of characters
    + = one or more of the preceeding character or group
    \s = Any whitespace character (space, tab).
    , = the literal comma character

    =======================================================
    . = any single character
     * = any number of the preceeding character or group
    ^ (at start of pattern) = The start of the string
    $ (at end of pattern) = The end of the string
    ^ (inside [...]) = "NOT" the following character
     */
    }
}
