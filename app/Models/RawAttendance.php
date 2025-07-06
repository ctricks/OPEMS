<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RawAttendance extends Model
{
    use HasFactory;

    // protected $guarded = [];
    protected $fillable = [
        'name',
        'employee_id',
        'select_date',
        'month',
        'check_in',
        'check_out',
        'DataSource',
    ];

    protected $table = 'raw_attendances';

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
