<?php

namespace App\Filament\Resources\CollegeResource\Pages;

use Filament\Actions;
use App\Models\College;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\CollegeResource;

class ListColleges extends ListRecords
{
    protected static string $resource = CollegeResource::class;

    protected function getHeaderActions(): array
    {


        if(College::count() == 0) {
            return [
                Actions\CreateAction::make(),
            ];
        } else {
            return [];
        }
    }
}
