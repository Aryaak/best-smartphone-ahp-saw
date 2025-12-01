<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Alternative extends Model
{
    use HasUuids;

    protected $primaryKey = 'uuid',
              $guarded = [];

    public function criterias()
    {
        return $this->hasMany(AlternativeCriteria::class, 'alternative_uuid', 'uuid');
    }

      public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->translatedFormat('d F Y H:i');
    }

    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->translatedFormat('d F Y H:i');
    }
}
