<?php
namespace korado531m7\ImageConverter;

use korado531m7\ImageConverter\form\ConverterTop;

use pocketmine\Player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\math\Vector3;
use pocketmine\plugin\PluginBase;

class ImageConverter extends PluginBase{
    const SUPPORTED_EXTENSION = ['jpg','jpeg','png'];
    
    private static $img = [];
    public static $count = 0;
    public static $path;
    
    public function onEnable(){
        self::$path = $this->getDataFolder();
    }
    
    public static function getPath() : string{
        return self::$path;
    }
    
    public static function addImage(Image $img){
        self::$img[] = $img;
    }
    
    public static function getImages() : array{
        return self::$img;
    }
    
    public static function getImage(int $id) : ?Image{
        foreach(self::getImages() as $img){
            if($img->getId() === $id){
                return $img;
            }
        }
        return null;
    }
    
    public static function removeImage(Image $rawImage){
        foreach(self::getImages() as $key => $image){
            if($image->getId() === $rawImage->getId()){
                unset(self::$img[$key]);
            }
        }
    }
    
    public function onCommand(CommandSender $sender, Command $command, $label, array $params) : bool{
        if($sender instanceof Player && $sender->hasPermission('imageconverter.convert.command')){
            $sender->sendForm(new ConverterTop());
        }
        return true;
    }
}