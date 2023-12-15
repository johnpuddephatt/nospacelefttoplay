<?php

namespace App\Livewire;

use App\Models\Memory;
use App\Models\User;
use App\Notifications\MemoryCreated;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class CreateMemory extends Component
{
    use WithFileUploads;

    #[Validate('required')]
    public $name = '';

    #[Validate('required|email')]
    public $email = '';

    #[Validate('required:max:500')]
    public $text = '';

    public $image = null;

    public function save()
    {


        $user = User::firstOrCreate(
            [
                'email' => $this->email,
            ],
            [
                'name' => $this->name,
                'password' => Str::random(16)
            ]
        );

        $memory = $user->memories()->create(
            [
                'text' => $this->text,
                'image' => $this->image ? $this->image->store('memories', 'public') : null,
            ]
        );

        $user->notify(new MemoryCreated($memory));

        return redirect('/')
            ->with('status', 'Memory successfully created.');
    }

    public function render()
    {
        return view('livewire.create-memory');
    }
}
