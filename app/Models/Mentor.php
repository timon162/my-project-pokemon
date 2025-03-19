<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pokemon;
/**
 * Class Mentor
 *
 * Represents the Mentor entity in the database.
 *
 * @property int $id The unique identifier for the Mentor.
 * @property string $name The name of the Mentor.
 * @property-read \Illuminate\Database\Eloquent\Collection|Pokemon[] $pokemon The related Pokémon.
 */
class Mentor extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mentor';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * Define a one-to-many relationship with the Pokemon model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Pokemon()
    {
        return $this->hasMany(Pokemon::class, 'mentor_id');
    }

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
