<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PokemonConectaTipoPokemon Entity
 *
 * @property int $pokemon_idpokemon
 * @property int $tipo_pokemon_idtipo_pokemon
 */
class PokemonConectaTipoPokemon extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'pokemon_idpokemon' => false,
        'tipo_pokemon_idtipo_pokemon' => false
    ];
}
