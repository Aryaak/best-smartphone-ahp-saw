<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class AlternativeCriteria extends Model
{
    use HasUuids;

    public $incrementing = false;
    public $timestamps = false;

    protected $table = 'alternative_criteria',
              $primaryKey = 'uuid',
              $guarded = [];

    public function alternative()
    {
        return $this->belongsTo(Alternative::class, 'alternative_uuid', 'uuid');
    }

    public function criteria()
    {
        return $this->belongsTo(Criteria::class, 'criteria_uuid', 'uuid');
    }
}
