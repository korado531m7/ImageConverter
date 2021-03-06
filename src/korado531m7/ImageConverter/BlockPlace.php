<?php
namespace korado531m7\ImageConverter;

use korado531m7\ImageConverter\ImageConverter;
use korado531m7\ImageConverter\utils\ImageTool;
use korado531m7\ImageConverter\utils\ImageUtility;

use pocketmine\Player;
use pocketmine\block\Block;
use pocketmine\math\Vector3;
use pocketmine\Server;

class BlockPlace{
    public function __construct(Image $image, array $data){
        $this->image = $image;
        $this->data = $data;
    }
    
    public function getPlayer() : ?Player{
        return Server::getInstance()->getPlayer($this->image->getPlacer());
    }
    
    public function doPlace(){
        $player = $this->getPlayer();
        $image = $this->data;
        $name = $this->image->getFilename();
        $type = $this->image->getType();
        $extension = ImageUtility::getExtension($name);
        
        if($player instanceof Player){
            $player->sendMessage('Image Extracted. Blocks are being placed...');
        }
        $count = 0;
        $level = $player->getLevel();
        $img = ImageTool::getResource($this->image);
        $pos = $this->image->getPosition();
        switch($type){
            case 'Stair':
            case 'Parallelogram':
            case 'Horizontal':
                $baseX = (int) ($pos->x - imagesx($img) / 2);
                $baseK = (int) $pos->y - 1;
                $baseY = (int) ($pos->z - imagesy($img) / 2);
                $countY = count($image);
                foreach($image as $y => $ally){
                    foreach($ally as $x => $allx){
                        $block = $image[$y][$x];
                        if(!$level->isChunkLoaded($baseX + $x,$baseK,$baseY + $y)) $level->loadChunk($baseX + $x,$baseK,$baseY + $y);
                        $level->setBlock(new Vector3($baseX + $x,$baseK,$baseY + $y),Block::get($block[0],$block[1]),true,false);
                        ++$count;
                        if($count % $countY === 0){
                            switch($type){
                                case 'Parallelogram':
                                    switch($this->image->getPlace()){
                                        case 1:
                                            $baseX += 1;
                                        break;
                                        
                                        case 2:
                                            $baseX -= 1;
                                        break;
                                        
                                        case 3:
                                            $baseY += 1;
                                        break;
                                        
                                        case 4:
                                            $baseY -= 1;
                                        break;
                                    }
                                break;
                                
                                case 'Stair':
                                    switch($this->image->getPlace()){
                                        case 1:
                                        case 2:
                                            $baseK += 1;
                                        break;
                                        
                                        case 3:
                                        case 4:
                                            $baseK -= 1;
                                        break;
                                    }
                                break;
                            }
                        }
                    }
                }
                break;
                
            case 'Vertical':
                $baseX = (int) ($pos->x - imagesx($img) / 2);
                $baseY = (int) ($pos->y + imagesy($img) / 2);
                $baseZ = (int) $pos->z + 5;
                foreach($image as $y => $ally){
                    foreach($ally as $x => $allx){
                        $block = $image[$y][$x];
                        if(!$level->isChunkLoaded($baseX + $x, $baseZ + $y)) $level->loadChunk($baseX + $x, $baseZ + $y);
                        $level->setBlock(new Vector3($baseX + $x,$baseY - $y,$baseZ),Block::get($block[0],$block[1]),true,false);
                        ++$count;
                    }
                }
                break;
        }
        ImageConverter::getImage($this->image->getId())->setCount($count);
        if($player instanceof Player){
            $player->sendMessage("Placed {$count} Blocks");
        }
        @imagedestroy($img);
    }
}
