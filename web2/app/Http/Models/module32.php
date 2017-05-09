<?php
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class module32 extends Model
{
    protected $table = 'module32';
    protected $primaryKey = 'module32_id';
    public $timestamps = false;
    protected $fillable = [    
      'module32_icon',
        'module32_chitiet',
        'module32_ketnoi',       
    ];
    protected $guarded = ['module32_id'];   
    public function getData(){
        return self::paginate();
    }
}

