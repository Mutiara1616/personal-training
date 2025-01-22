<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KatalogResource\Pages;
use App\Models\Katalog;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Forms\Components\FileUpload;
use Illuminate\Support\Facades\Storage;

class KatalogResource extends Resource
{
    protected static ?string $model = Katalog::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    
    protected static ?string $navigationLabel = 'Katalog Pelatihan';
    
    protected static ?string $modelLabel = 'Katalog';
    
    protected static ?string $pluralModelLabel = 'Katalog';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\TextInput::make('judul')
                            ->label('Judul Pelatihan')
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (string $state, Forms\Set $set) => $set('slug', Str::slug($state)))
                            ->maxLength(255),

                        Forms\Components\TextInput::make('slug')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->disabled(),

                        Forms\Components\DatePicker::make('tanggal_mulai')
                            ->label('Tanggal Mulai')
                            ->required(),

                        Forms\Components\DatePicker::make('tanggal_selesai')
                            ->label('Tanggal Selesai')
                            ->required(),

                        Forms\Components\TextInput::make('lokasi')
                            ->label('Lokasi')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\Textarea::make('deskripsi')
                            ->label('Deskripsi')
                            ->required()
                            ->rows(5),

                        Forms\Components\TextInput::make('harga')
                            ->label('Harga')
                            ->required()
                            ->numeric()
                            ->prefix('Rp'),

                        Forms\Components\TextInput::make('whatsapp')
                            ->label('Nomor WhatsApp Admin')
                            ->required()
                            ->prefix('+62')
                            ->helperText('85803228042')
                            ->maxLength(15)
                            ->rules(['required', 'regex:/^[1-9][0-9]{9,}$/'])
                            ->placeholder('85803228042'),

                        FileUpload::make('gambar')
                            ->label('Gambar')
                            ->image()
                            ->directory('katalog')
                            ->disk('public')
                            ->preserveFilenames()
                            ->maxSize(5120)
                    ])->columns(1)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul')
                    ->label('Judul Pelatihan')
                    ->searchable()
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('harga')
                    ->label('Harga')
                    ->money('IDR')
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('tanggal_mulai')
                    ->label('Tanggal Mulai')
                    ->date('d M Y')
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('tanggal_selesai')
                    ->label('Tanggal Selesai')
                    ->date('d M Y')
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('lokasi')
                    ->label('Lokasi')
                    ->searchable(),

                Tables\Columns\ImageColumn::make('gambar')
                    ->label('Gambar')
                    ->size(100),
                    
                Tables\Columns\TextColumn::make('whatsapp')
                    ->label('WhatsApp Admin')
                    ->searchable()
                    ->formatStateUsing(fn (string $state): string => '+62 ' . $state),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->label('Edit'),
                Tables\Actions\DeleteAction::make()
                    ->label('Hapus'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->label('Hapus Terpilih'),
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
            'index' => Pages\ListKatalogs::route('/'),
            'create' => Pages\CreateKatalog::route('/create'),
            'edit' => Pages\EditKatalog::route('/{record}/edit'),
        ];
    }
}