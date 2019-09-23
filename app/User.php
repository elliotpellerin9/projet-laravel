<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom',
        'prenom',
        'name',
        'password',
        'email',
        'statut',
        'tel',
        'adresse',
        'ville',
        'province',
        'codepostal',
        'description',
        'imageUrl',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public static $faker;
    public static function fake()
    {
        if (!self::$faker) {
            self::$faker = \Faker\Factory::create("fr_CA");
        }
        $f = self::$faker;
        $resultat = new self();
        $resultat->prenom = $f->firstName();
        $resultat->nom = $f->lastName();
        $resultat->name = str_slug($resultat->prenom . $resultat->nom, '');
        //début de l'authentification mais j'ai laisser faire finalement
        $resultat->password = \Hash::make(str_slug($resultat->prenom . $resultat->nom, ''));
        $resultat->email = str_slug($resultat->prenom . $resultat->nom, '') . '@' . $f->domainName();
        $resultat->statut = $f->numberBetween(0, 1);
        $resultat->tel = $f->phoneNumber();
        $resultat->adresse = $f->streetAddress();
        $resultat->ville = $f->city();
        $resultat->province = $f->state();
        $resultat->codepostal = $f->postcode();
        $resultat->description = $f->realText(pow($f->numberBetween(5, 10), 2));
        $resultat->imageUrl = $f->imageUrl();

        return $resultat;
    }

    public function matieres()
    {
        return $this->hasMany("App\Matiere");
    }

}
