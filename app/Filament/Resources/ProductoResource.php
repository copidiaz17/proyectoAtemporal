<?php

namespace App\Filament\Resources;

use Filament\Forms\Components\ImageInput;
use App\Filament\Resources\ProductoResource\Pages;
use App\Filament\Resources\ProductoResource\RelationManagers;
use App\Models\Producto;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductoResource extends Resource
{
    protected static ?string $model = Producto::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('producto_nombre')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('producto_descripcion')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('producto_imagen')
                    ->label('Imagen del Producto')
                    ->required()
                    ->image()
                    ->directory('images/productos')
                    ->disk('public'),
                Forms\Components\TextInput::make('producto_precio')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('categoria_id')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('producto_nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('producto_descripcion')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('producto_imagen')
                    ->label('Imagen')
                    ->circular(),
                    //->disk('public')
                    //->url(fn ($record) => $record->producto_imagen ? url('storage/images/productos/' . $record->producto_imagen) : url('images/productos/default-image.jpg')),
                Tables\Columns\TextColumn::make('producto_precio')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('categoria_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListProductos::route('/'),
            'create' => Pages\CreateProducto::route('/create'),
            'edit' => Pages\EditProducto::route('/{record}/edit'),
        ];
    }
}
