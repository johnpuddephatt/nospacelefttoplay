<?php

namespace App\Http\Controllers;

use App\Models\Memory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use \Vinkla\Hashids\Facades\Hashids;

class MemoryController extends Controller
{



    public function verify(Memory $memory, $hash)
    {
        if (Hashids::decode($hash)[0] == $memory->id) {
            $memory->update(['verified' => true]);
            return redirect('/')
                ->with('status', 'Memory verified.');
        } else {
            return redirect('/')
                ->with('status', 'Memory could not be verified');
        }
    }
}
