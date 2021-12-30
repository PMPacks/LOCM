<?php


namespace shock95x\auctionhouse\commands\subcommand;


use CortexPE\Commando\BaseSubCommand;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use shock95x\auctionhouse\menu\MainMenu;

class ShopCommand extends BaseSubCommand {

	protected function prepare(): void {}

	public function onRun(CommandSender $sender, string $aliasUsed, array $args): void {
		if(!$sender instanceof Player) {
			return;
		}
		new MainMenu($sender);
	}
}