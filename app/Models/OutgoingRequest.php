<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OutgoingRequest extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function incomingEvent(): BelongsTo
    {
        return $this->belongsTo(IncomingEvent::class, 'event_id');
    }
}
