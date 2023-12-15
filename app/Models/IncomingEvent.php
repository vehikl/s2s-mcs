<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class IncomingEvent extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function outgoingRequests(): HasMany
    {
        return $this->hasMany(OutgoingRequest::class, 'event_id');
    }
}
