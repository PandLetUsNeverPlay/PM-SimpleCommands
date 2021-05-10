<?php

namespace LePandiLP;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\Config;
use pocketmine\Player;

class Main extends PluginBase{

	public function onEnable(){
		$this->getLogger()->info("PM-SimpleCommands loaded!");
		
		@mkdir($this->getDataFolder());
		
		$this->saveResource("config.yml");
		$this->saveDefaultConfig();
	}
		
	public function onDisable(){
		$this->getLogger()->info("PM-SimpleCommands unloaded!");
	}
	
	public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool{
	
		switch($cmd->getName()){
		
		case "feed":
			if($sender instanceof Player){ 
			if($sender->hasPermission("feed.cmd")){
				$sender->setFood(20);
				$sender->sendMessage($this->getConfig()->get("feed-message"));
			}else{
				$sender->sendMessage($this->getConfig()->get("no-permission"));
			}
		}
		break;
		
		case "heal":
			if($sender instanceof Player){ 
			if($sender->hasPermission("heal.cmd")){
				$sender->setHealth(20);
				$sender->sendMessage($this->getConfig()->get("heal-message"));
			}else{
				$sender->sendMessage($this->getConfig()->get("no-permission"));
				return true;
			}
		}
		break;
		
		case "day":
			if($sender instanceof Player){
			if($sender->hasPermission("day.cmd")){
				$sender->getLevel()->setTime(6000);
				$sender->sendMessage($this->getConfig()->get("day-message"));
			}else{
				$sender->sendMessage($this->getConfig()->get("no-permission"));
				return true;
			}
		}
		break;
		
		case "night":
			if($sender instanceof Player){
			if($sender->hasPermission("night.cmd")){
				$sender->getLevel()->setTime(16000);
				$sender->sendMessage($this->getConfig()->get("night-message"));
			}else{
				$sender->sendMessage($this->getConfig()->get("no-permission"));
				return true;
			}
		}
		break;
		
		case "gm0":
			if($sender instanceof Player){
			if($sender->hasPermission("gm.cmd")){
				$sender->setGamemode(0);
				$sender->sendMessage($this->getConfig()->get("gm0-message"));
			}else{
				$sender->sendMessage($this->getConfig()->get("no-permission"));
				return true;
			}
		}
		break;
		
		case "gm1":
			if($sender instanceof Player){
			if($sender->hasPermission("gm.cmd")){
				$sender->setGamemode(1);
				$sender->sendMessage($this->getConfig()->get("gm1-message"));
			}else{
				$sender->sendMessage($this->getConfig()->get("no-permission"));
				return true;
			}
		}
		break;
		
		case "gm2":
			if($sender instanceof Player){
			if($sender->hasPermission("gm.cmd")){
				$sender->setGamemode(2);
				$sender->sendMessage($this->getConfig()->get("gm2-message"));
			}else{
				$sender->sendMessage($this->getConfig()->get("no-permission"));
				return true;
			}
		}
		break;
		
		case "gm3":
			if($sender instanceof Player){
			if($sender->hasPermission("gm.cmd")){
				$sender->setGamemode(3);
				$sender->sendMessage($this->getConfig()->get("gm3-message"));
			}else{
				$sender->sendMessage($this->getConfig()->get("no-permission"));
				return true;
			}
		}
		break;
	}
	return true;
}
}