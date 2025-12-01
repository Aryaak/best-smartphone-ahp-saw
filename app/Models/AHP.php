<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class AHP extends Model
{
    use HasUuids;

    protected $table = 'ahp',
              $primaryKey = 'uuid',
              $guarded = [];
    
    public $incrementing = false;
    public $timestamps = false;

    public function criteriaA()
    {
        return $this->belongsTo(Criteria::class, 'criteria_a_uuid', 'uuid');
    }

    public function criteriaB()
    {
        return $this->belongsTo(Criteria::class, 'criteria_b_uuid', 'uuid');
    }
}
