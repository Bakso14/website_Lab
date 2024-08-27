<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Filament\Resources\NewsResource\RelationManagers;
use App\Models\News;
use App\Models\NewsCategory;
use Closure;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Set;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $navigationIcon = "heroicon-o-rectangle-stack";

    public static function form(Form $form): Form
    {
        return $form->schema([
            Select::make("news_categories_id")->label("Category")->relationship("newsCategory", "name")->required(),
            TextInput::make("author")->required(),
            TextInput::make('title')
                ->required()
                ->live(debounce: 1000) // Method 1: Pass a debounce value here
                ->debounce(1000)
                ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),

            TextInput::make('slug')->unique(ignoreRecord: true)->required(),

            FileUpload::make("image")->required(),
            RichEditor::make("content")->placeholder("Write something")->required(),
            Hidden::make("user_id")->default(Auth::id()),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("newsCategory.name")->label("Category")->sortable()->searchable(),
                ImageColumn::make("image"),
                TextColumn::make("title")->limit(50)->sortable()->searchable(),
                TextColumn::make("author"),
            ])
            ->filters([])
            ->actions([Tables\Actions\EditAction::make()]);
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where("user_id", Auth::id());
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
            "index" => Pages\ListNews::route("/"),
            "create" => Pages\CreateNews::route("/create"),
            "edit" => Pages\EditNews::route("/{record}/edit"),
        ];
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data["user_id"] = Auth::id();

        if (isset($data["image"])) {
            $data["image"] = Storage::put("uploads", $data["image"]);
        }

        return $data;
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $data["user_id"] = Auth::id();

        if (isset($data["image"])) {
            $data["image"] = Storage::put("uploads", $data["image"]);
        }

        return $data;
    }
}
