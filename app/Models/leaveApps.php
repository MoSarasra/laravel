<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leaveApps extends Model
{
    use HasFactory;
    protected $table = 'leave_apps';
    protected $primaryKey = 'id';
    protected $fillable = ['name','Description','emp_id','Dep_id','leave_id','startDate','endDate'];
}
