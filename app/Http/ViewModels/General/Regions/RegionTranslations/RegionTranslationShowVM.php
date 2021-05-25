<?php


namespace App\Http\ViewModels\General\Regions\RegionTranslations;

use App\Domain\General\Regions\RegionTranslations\Model\RegionTranslation;
use Illuminate\Contracts\Support\Arrayable;


class RegionTranslationShowVM implements Arrayable
{

    private $regionTranslationId;

    public function __construct($regionTranslationId)
    {
        $this->regionTranslationId = $regionTranslationId ;
    }

    private function get_RegionTranslation(){
        return RegionTranslation::find($this->regionTranslationId);
    }
    public function toArray(): array
    {
        return [
            'RegionTranslation' => $this->get_RegionTranslation()
        ];
    }
}
