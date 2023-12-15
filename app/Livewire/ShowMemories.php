<?php

namespace App\Livewire;

use App\Models\Memory;
use Livewire\Component;
use Livewire\WithPagination;

class ShowMemories extends Component
{
    use WithPagination;

    public $paginationTheme = 'paginator';


    public function render()
    {
        return view('livewire.show-memories', [
            'memories' => Memory::verified()->published()->with('user')->latest()->simplePaginate(10)
        ]);
    }
}
