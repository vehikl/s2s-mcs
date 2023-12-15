<?php

namespace App\Http\Controllers;

use App\Http\Requests\IncomingEventRequest;
use Illuminate\Http\Request;

class IncomingEventController extends Controller
{
    public function store(IncomingEventRequest $request)
    {
        IncomingEventRequest::create($request->validated());
    }
}
