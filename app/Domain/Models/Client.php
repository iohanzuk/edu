<?php

namespace App\Domain\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Client extends Model
{
    use SoftDeletes;
    use Notifiable;

    public function clientType()
    {
        return $this->belongsTo(ClientType::class);
    }

    public function responsible()
    {
        return $this->belongsTo(Client::class, 'responsible_id');
    }
}
