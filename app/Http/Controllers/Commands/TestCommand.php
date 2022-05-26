<?php

namespace App\Http\Controllers\Commands;

class TestCommand {

    public function test($interaction)
    {
        dd($interaction);
    }

}
