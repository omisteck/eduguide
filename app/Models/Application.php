<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Application extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $fillable = [
        'type_id','preferred_course','study_centre','status', 'type_id'
    ];

    protected static function boot(){
        parent::boot();

        static::creating(function ($instance){
            $instance->id = Str::uuid();
        });
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function type(){
        return $this->belongsTo(Type::class);
    }
}
