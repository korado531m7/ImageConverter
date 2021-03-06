<?php
namespace korado531m7\ImageConverter\task;

use korado531m7\ImageConverter\BlockPlace;
use korado531m7\ImageConverter\ImageConverter;
use korado531m7\ImageConverter\Image;
use korado531m7\ImageConverter\utils\ImageTool;

use pocketmine\block\Block;
use pocketmine\math\Vector3;
use pocketmine\scheduler\AsyncTask;
use pocketmine\Server;

class ExtractImageTask extends AsyncTask{
    private $image, $task = 0;
    
    public function __construct(Image $image){
        $image->setTask($this);
        $image->setStatus(Image::STATUS_CONVERTING);
        $this->image = $image;
    }
    
    public function onRun(){
        $result = ImageTool::convertImage($this->image, $this);
        $this->setResult($result);
    }
    
    public function onCompletion(Server $server){
        $base = ImageConverter::getImage($this->image->getId());
        $base->setStatus(Image::STATUS_COMPLETE);
        (new BlockPlace($this->image, $this->getResult()))->doPlace();
    }
    
    public function getProgress() : float{
        return round($this->task,2);
    }
    
    public function setProgress(float $value){
        $this->task = $value;
    }
}