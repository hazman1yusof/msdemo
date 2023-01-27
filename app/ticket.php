<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\message;

class ticket extends Model
{
    //

    public function messages(){
	    return $this->hasMany(message::class, 'ticket_id');
	}
}
