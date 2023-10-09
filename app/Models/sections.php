<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class sections extends Model
{
    use HasFactory;
    protected $fillable = ['section_name', 'description', 'Created_by'];
    public function section()
    {
        return $this->belongsTo(sections::class,'sections');
    }
}
