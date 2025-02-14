<?php
namespace App\models;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model {
    // Opcional: define la tabla si no sigue la convención (pluralización del nombre del modelo)
    protected $table = 'actor';

    // Opcional: define la clave primaria si es diferente a 'id'
    protected $primaryKey = 'actor_id';

    // Si tu tabla no tiene timestamps, indícalo:
    public $timestamps = false;

}
?>