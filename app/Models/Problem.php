<?php

namespace app\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Models\Position;

class Problem extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Problems';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'problemID';

    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'problem_name',
        'positions_list',
        'departments_list',
        'lp'
    ];

    public $timestamps = null;

}
