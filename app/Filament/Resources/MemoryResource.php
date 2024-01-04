<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MemoryResource\Pages;
use App\Filament\Resources\MemoryResource\RelationManagers;
use App\Models\Memory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms\Components;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MemoryResource extends Resource
{
    protected static ?string $recordTitleAttribute = 'user.name';

    protected static ?string $model = Memory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Components\Toggle::make('verified'),
                Components\Toggle::make('published'),
                Components\Textarea::make('text')->columnSpan(2),



                Components\FileUpload::make('image')->columnSpan(2),
                Components\DateTimePicker::make('created_at')->columnSpan(2),

                Components\Section::make('User')
                    ->compact()
                    ->schema([
                        Components\Select::make('client_id')->label('Name')
                            ->relationship('user', 'name'),
                        Components\Select::make('client_id')->label('Email')
                            ->relationship('user', 'email'),
                    ]),





            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('user.name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('user.email')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('text')
                    ->searchable()
                    ->sortable()->limit(10),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\ToggleColumn::make('verified')
                    ->sortable(),
                Tables\Columns\ToggleColumn::make('published')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->date('F j, Y')
                    ->searchable()
                    ->sortable(),

            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageMemories::route('/'),

        ];
    }
}
