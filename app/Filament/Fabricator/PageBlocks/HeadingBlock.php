<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class HeadingBlock extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('heading')
            ->schema([
                TextInput::make('text')->placeholder('Default heading'),
            ])->columns(2);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }

}
