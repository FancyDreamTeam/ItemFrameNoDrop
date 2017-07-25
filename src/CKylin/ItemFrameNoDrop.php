<?php


namespace CKylin;

//COMMON Uses
use pocketmine\plugin\Plugin;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Server;
use pocketmine\event\block\ItemFrameDropItemEvent;

class ItemFrameNoDrop extends PluginBase implements Listener
{

    public function onEnable() {
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}

    public function onDrop(ItemFrameDropItemEvent $e){
        $e->setCancelled(true);
    }
}
