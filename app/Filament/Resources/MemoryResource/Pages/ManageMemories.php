<?php

namespace App\Filament\Resources\MemoryResource\Pages;

use App\Filament\Resources\MemoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

class ManageMemories extends ManageRecords
{
    protected static string $resource = MemoryResource::class;

    public function getTabs(): array
    {
        return [
            'all' => Tab::make(),
            'unpublished' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('published', false)),
            'published' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('published', true)),
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
