<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Student;

class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';

    protected $fillable = [
        'id', 'name','category_id'
      ];

    public function student()
    {
        return $this->belongsToMany(Student::class);
    }

    static function category($category_id)
    {
        $courses = self::where('category_id',$category_id)->get();
        return $courses;
       
    }
}
