<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;

    // Specify the table name explicitly (optional if it follows Laravel's naming convention)
    protected $table = 'blogs';

    // Specify the primary key (optional if it's 'id')
    protected $primaryKey = 'id';

    // Define which fields can be mass-assigned
    protected $fillable = [
        'title',
        'description',
        'image',
    ];

    // Optionally, define fields that should not be mass-assigned
    // protected $guarded = [];

    // Define any relationships if necessary
    // Example: One blog has many comments
    // public function comments()
    // {
    //     return $this->hasMany(Comment::class);
    // }

    // Optionally, define date fields if you have any specific date fields
    // protected $dates = ['created_at', 'updated_at'];

    // Optionally, add any casts if needed
    // protected $casts = [
    //     'is_published' => 'boolean',
    // ];
}
