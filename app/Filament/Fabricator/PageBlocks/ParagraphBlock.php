<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Textarea;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class ParagraphBlock extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('paragraph')
            ->schema([
                Textarea::make('content')
                    ->label('Paragraph')
                    ->required(),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
