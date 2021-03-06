<?php

namespace App\Models;
use App\Http\controllers\CatagoryController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name'
        ];
    public function products(){
        return $this->hasMany(product::class);
    }
}
