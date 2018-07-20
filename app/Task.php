<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
// 追加
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    //クラス作成
    use SoftDeletes;
    
    protected $fillable = [
      'name',
      'done',
    ];
}
?>
