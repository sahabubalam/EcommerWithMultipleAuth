<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Order extends Model
{
    protected $guarded=[];
    public function sendtNotification($token)
    {
        $this->notify(new SendEmail($token));
    }
}
