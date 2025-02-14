<?php
namespace App\models;
use Illuminate\Database\Eloquent\Model;

class film extends Model {
    // Opcional: define la tabla si no sigue la convención (pluralización del nombre del modelo)
    protected $table = 'film';

    // Opcional: define la clave primaria si es diferente a 'id'
    protected $primaryKey = 'film_id';

    // Si tu tabla no tiene timestamps, indícalo:
    public $timestamps = false;

    public function actors()
    {
        return $this->belongsToMany(Actor::class, 'film_actor', 'film_id', 'actor_id');
    }
}
    
?>