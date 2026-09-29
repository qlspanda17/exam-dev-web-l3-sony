<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'event_date',
        'location'
        
    ];

    protected function casts(): array
    {
        return [
            'event_date' => 'date',
        ];
    }

    public function Tag()
    {
        return $this->belongsToMany(Tag::class);
    }
}
