<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $table = "categoria";

    protected $primaryKey = 'id';

    public $incrementing = true; 
    protected $keyType = 'int';

    protected $fillable = [
        'categoria_nombre', 
       
    ];
    
    

    public function productos(){
        $this->hasMany('producto');
    }
}
