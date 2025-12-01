<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CriteriaValue extends Model
{
    protected $primaryKey = 'uuid',
              $guarded = [];

    public function criteria()
    {
        return $this->belongsTo(Criteria::class, 'criteria_uuid', 'uuid');
    }
}
