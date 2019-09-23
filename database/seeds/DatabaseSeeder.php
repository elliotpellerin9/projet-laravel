<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Matiere;
use App\Cour;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i += 1) {
            $user = User::fake();
            $user->save();
           
            $nb = ($user->id && $user->statut==1);
            for ($j = 0; $j < $nb; $j += 1) {
                $matiere = Matiere::fake($user->id);
                $matiere->save();
				$nbCours = rand(5, 12);
				for ($k = 0; $k < $nbCours; $k += 1) {
					$cour = Cour::fake($matiere->id);
					$cour->save();
				}
            }
            
        }
        // $this->call(UsersTableSeeder::class);
    }
}
