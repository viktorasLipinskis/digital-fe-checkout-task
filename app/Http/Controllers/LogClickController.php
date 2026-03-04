<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Http\Requests\LogClickRequest;

class LogClickController extends Controller
{
    public function __invoke(LogClickRequest $request)
    {
        Log::info('Click logged', $request->validated());

        return response(null, 204);
    }
}
