<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    protected $fillable = [
        "id",
        "user_id",
        "titre",
        "icone",
        "contenu",
    ];

    public static $faker;
    public static function fake($user_id)
    {
        if (!self::$faker) {
            self::$faker = \Faker\Factory::create("fr_CA");
        }
        $f = self::$faker;
        $resultat = new self();
        $resultat->user_id = $user_id;
        $resultat->titre = $f->realText(pow($f->numberBetween(5, 8), 2));
        $contenu = '';
        $nb = $f->numberBetween(1, 8);

        $contenu .= $f->realText(pow($f->numberBetween(5, 8), 2));

        $resultat->icone = $f->realText(pow($f->numberBetween(5, 8), 2));

        $resultat->contenu = $contenu;
        return $resultat;
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function cour()
    {
        return $this->hasMany('App\Cour');
    }
}
