<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mentor;

/**
 * Class Pokemon
 *
 * Represents the Pokémon entity in the database.
 *
 * @property int $id The unique identifier for the Pokémon.
 * @property int $mentor_id The ID of the associated Mentor.
 * @property string $name The name of the Pokémon.
 * @property string $type The type/category of the Pokémon.
 * @property int $level The level of the Pokémon.
 * @property-read Mentor|null $mentor The related Mentor.
 */
class Pokemon extends Model
{
    // use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pokemon';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mentor_id',
        'name',
        'type',
        'level',
    ];

    /**
     * Define a many-to-one relationship with the Mentor model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mentor()
    {
        return $this->belongsTo(Mentor::class, 'id');
    }

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
