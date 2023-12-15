<?php

namespace App\Livewire;

use App\Models\Memory;
use App\Models\User;
use App\Notifications\MemoryCreated;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Spatie\Image\Manipulations;

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

        if ($this->image) {
            $image = $this->image->store('memories', 'public');
            $resized_image_path = $image . '-800.jpg';
            $resized_image = \Spatie\Image\Image::load(Storage::disk('public')->path($image))->format(Manipulations::FORMAT_JPG)
                ->width(800)
                ->save(Storage::disk('public')->path($resized_image_path));
        }

        $memory = $user->memories()->create(
            [
                'text' => $this->text,
                'image' => $resized_image_path ?? null,
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
