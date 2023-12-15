<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SurveyResource\Pages;
use App\Filament\Resources\SurveyResource\RelationManagers;
use Faker\Core\Number;
use MattDaneshvar\Survey\Models\Survey;

use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Arr;

class SurveyResource extends Resource
{
    protected static ?string $model = Survey::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->autofocus(),
                Checkbox::make('settings.accept-guest-entries')
                    ->label('Accept guest entries'),
                TextInput::make('settings.max-entries-per-user')
                    ->type('number')
                    ->label('Max entries per user')

                    ->minValue(-1)
                    ->maxValue(100)

                    ->step(1)
                    ->default(1),

                Repeater::make('questions')
                    ->relationship()
                    ->schema([
                        TextInput::make('content'),
                        Select::make("type")->options([
                            'text' => 'Text',
                            'number' => 'Number',
                            'radio' => 'Radio',
                            'multiselect' => 'Checkbox',
                        ])->live(),
                        Repeater::make('options')
                            ->simple(TextInput::make('option'),)
                            ->dehydrateStateUsing(fn (array $state) => implode(Arr::pluck(array_values($state), 'option')), ',')
                            ->hidden(fn (Get $get): bool => in_array($get('type'), [null, 'text', 'number']))
                        // ->hidden(fn (Get $get): bool => dd($get('type')))
                    ]),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSurveys::route('/'),
            'create' => Pages\CreateSurvey::route('/create'),
            'edit' => Pages\EditSurvey::route('/{record}/edit'),
        ];
    }
}
