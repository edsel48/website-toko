<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');


Artisan::command("prepare", function() {

    Artisan::call("migrate:fresh --seed");
    $this->comment("Successfully Seeded and Ready To Use");

})->purpose("Making Sure Everything is ready");

Artisan::command("run-fresh", function() {
    // clearing the database and migrating
    Artisan::call("migrate:fresh --seed");
    $this->comment("Successfully Seeded and Ready To Use");
    $this->comment("Now Running on port 8000");

    // calling serve
    Artisan::call("serve");
});
