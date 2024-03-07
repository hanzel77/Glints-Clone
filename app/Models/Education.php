<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $table = 'user_educations';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    public function user_desc(): BelongsTo
    {
        return $this->belongsTo(UserDesc::class, 'user_id');
    }
}
