<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dependent extends Model
{
  protected $primaryKey = 'dependent_id';
public function employee() {
    return $this->belongsTo(Employee::class, 'employee_id', 'employee_id');
}
}
