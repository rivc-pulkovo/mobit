<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 *
 * @package App
 * @property string $title
*/
class Position extends Model
{
    protected $fillable = ['title'];
//    protected $dateFormat = 'Y-m-d H:i:s';

}
