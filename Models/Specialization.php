<?php namespace Larapage\Modules\ReferenceLists\Models;

use Larapage\System\Models\BaseModel;

class Specialization extends BaseModel
{
    protected $table = "specializations";
    protected $fillable = ['name', 'department_id'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

}
