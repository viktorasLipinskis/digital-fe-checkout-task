<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatchAllController extends Controller
{
    public function __invoke(Request $request)
    {
        $currentRoute = $request->url();
        $routeName = $request->route()->getName() ?? 'Fallback Route';
        $routeParams = $request->route()->parameters();
        $backRoute = url('');
        return view('catch-all', compact('currentRoute', 'backRoute', 'routeName', 'routeParams'));
    }
}
