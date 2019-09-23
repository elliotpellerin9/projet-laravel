<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cour extends Model
{
    protected $fillable = [
        "matiere_id",
        "titre",
        "sousTitre",
        "contenu",
    ];
    public static $faker;
    public static function fake($matiere_id)
    {
        if (!self::$faker) {
            self::$faker = \Faker\Factory::create("fr_CA");
        }
        $f = self::$faker;
        $resultat = new self();
        $resultat->matiere_id = $matiere_id;
        $resultat->titre = $f->realText(pow($f->numberBetween(5, 8), 2));
        $resultat->sousTitre = $f->realText(pow($f->numberBetween(5, 8), 2));

        $contenu = '';
        $nb = $f->numberBetween(1, 8);
        for ($i = 0; $i < $nb; $i += 1) {
            $contenu .= '<p>' . $f->realText(pow($f->numberBetween(10, 30), 2)) . '</p>';
        }
        $resultat->contenu = $contenu;
        return $resultat;
    }
    public function matiere()
    {
        return $this->belongsTo('App\Matiere');
    }
    public function user()
    {
        return $this->hasOneThrough('App\User', 'App\Matiere');
    }
}
