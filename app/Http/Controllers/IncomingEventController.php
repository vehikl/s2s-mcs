<?php

namespace App\Http\Controllers;

use App\Http\Requests\IncomingEventRequest;
use App\Models\IncomingEvent;
use Illuminate\Http\Response;

class IncomingEventController extends Controller
{
    public function store(IncomingEventRequest $request)
    {
        IncomingEvent::query()->create($request->validated());

        return response([], Response::HTTP_CREATED);
    }
}
