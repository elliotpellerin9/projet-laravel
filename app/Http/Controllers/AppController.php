<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function installer () {
        $db = \DB::connection()->getDatabaseName();
        file_put_contents($db, '');
        \Artisan::call("migrate");
        \Artisan::call("db:seed");
        return "La base de donnée a été réinitialisée";
    }
}
