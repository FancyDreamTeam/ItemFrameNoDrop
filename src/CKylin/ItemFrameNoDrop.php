<?php


namespace CKylin;

//COMMON Uses
use pocketmine\plugin\Plugin;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Server;
use pocketmine\item\ItemBlock;
use pocketmine\item\Item;
use pocketmine\math\Vector3;
use pocketmine\event\block\ItemFrameDropItemEvent;

class ItemFrameNoDrop extends PluginBase implements Listener
{

    public function onEnable() {
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}

    public function onDrop(ItemFrameDropItemEvent $e){
        $itemframe = $e->getItemFrame()->getBlock();
        $e->setCancelled(true);
        $level = $itemframe->level;
        $x = $itemframe->x;
        $y = $itemframe->y;
        $z = $itemframe->z;
        $pos = new Vector3($x, $y, $z);
        $airBlock = Item::fromString('0')->getBlock();
        $level->setBlock($pos, $airBlock);
    }
}
