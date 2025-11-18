<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
    use HasUuids;

    protected $primaryKey = 'uuid',
              $guarded = [];
}
