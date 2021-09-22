<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function getTasks(){

        sleep(2);

        return response()->json([
            [
                'id' => 1,
                'title' => 'Play with cat'
            ],
            [
                'id' => 2,
                'title' => 'Shopping'
            ],
            [
                'id' => 3,
                'title' => 'Wash the kitchen'
            ],
        ], 200);
    }
}
