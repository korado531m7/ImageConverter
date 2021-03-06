<?php
namespace korado531m7\ImageConverter\form;

use korado531m7\ImageConverter\Image;
use korado531m7\ImageConverter\ImageConverter as IC;
use korado531m7\ImageConverter\utils\ImageUtility;

use pocketmine\Player;
use pocketmine\form\Form;

class ConvertInfo implements Form{
    private $image;
    
    public function __construct(Image $image){
        $this->image = $image;
    }
    
    public function handleResponse(Player $player, $data) : void{
        
    }
    
    private function getInfo() : string{
        $path = IC::getPath() . $this->image->getFilename();
        $size = getimagesize($path);
        $text = '';
        $text .= 'Filename: '.basename($path).PHP_EOL;
        $text .= 'Filesize: '.ImageUtility::formatSizeUnits(filesize($path)).PHP_EOL;
        $text .= 'Size: '.$size[0].'x'.$size[1].PHP_EOL;
        $text .= 'Conversion Progress: '.$this->image->getTask()->getProgress().'%%'.PHP_EOL;
        $text .= 'Place Type: '.$this->image->getType().PHP_EOL;
        switch($this->image->getBlockType()){
            case Image::TYPE_BEDROCK_EDITION:
                $bt = 'Bedrock Edition';
            break;
            case Image::TYPE_JAVA_EDITION:
                $bt = 'Java Edition';
            break;
        }
        $text .= 'Block Type: '.$bt.PHP_EOL;
        $text .= 'Estimated time: '.'§7---'; //TODO
        $text .= PHP_EOL;
        return $text;
    }
    
    public function jsonSerialize(){
        return ['type' => 'form', 'title' => '§eImage Information', 'content' => $this->getInfo(), 'buttons' => []];
    }
}