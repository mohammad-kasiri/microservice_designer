<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Functionalities extends Model
{
    protected $fillable=['name'];

    public function tables() : BelongsToMany
    {
        return $this->belongsToMany(Table::class, 'functionality_table', 'functionality_id', 'table_id');
    }
}
