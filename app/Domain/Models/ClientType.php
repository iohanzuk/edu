<?php

namespace App\Domain\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClientType extends Model
{
    use SoftDeletes;

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
