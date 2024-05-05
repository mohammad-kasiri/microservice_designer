<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Table extends Model
{
    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function tables() : BelongsToMany
    {
        return $this->belongsToMany(Functionalities::class, 'functionality_table', 'table_id', 'functionality_id');
    }

}
