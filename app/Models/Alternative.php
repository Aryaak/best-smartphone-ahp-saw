<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Alternative extends Model
{
    use HasUuids;

    protected $primaryKey = 'uuid',
              $guarded = [];
}
