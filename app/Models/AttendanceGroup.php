<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceGroup extends Model
{
    use HasFactory;
    public function attendanceGroupSchool() {
        return $this->belongsTo(Schoolnew::class, 'school_id', 'id');

    }
    public function attendanceGroupStudents() {
        return $this->hasMany(Student::class, 'group_id', 'id');
    }
}
