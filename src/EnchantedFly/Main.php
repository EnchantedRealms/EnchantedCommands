<?php

namespace EnchantedFly;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\permission\Permission;

class Main extends PluginBase implements Listener{

    public function onEnable(){
          $this->getServer()->getPluginManager()->registerEvents($this,$this);
          $this->getLogger()->info("EnchantedFly ENABLED!");
          }
    public function onCommand(CommandSender $sender, Command $command, $label, array $args){
         switch($command->getName()){
               case "fly":
                    if(!($sender instanceof player)){
                         $sender->sendMessage("/fly is a ingame only command!");
                    }else{
                         if(!isset($args[0])){
                              if($sender->hasPermission("enchantedfly.cmd.fly")){
                                 if($sender->getAllowFlight()){
                                   $sender->sendMessage("§e§lFLY§r§8 »§c Flying Disabled!");
                                   $sender->setAllowFlight(false);
                                }else{
                                   $sender->sendMessage("§e§lFLY§r§8 »§a Flying Enabled!");
                                   $sender->setAllowFlight(true);
                                break;
                                }
                           }
                       }
                   }
               }
           }
       }
