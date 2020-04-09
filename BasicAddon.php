<?php
declare(strict_types = 1);

/**
 * @name BasicAddon
 * @version 1.1.0
 * @main    JackMD\ScoreHud\Addons\BasicAddon
 */

namespace JackMD\ScoreHud\Addons
{

	use JackMD\ScoreHud\addon\AddonBase;
	use pocketmine\Player;

	class BasicAddon extends AddonBase{

		/**
		 * @param Player $player
		 * @return array
		 */
		public function getProcessedTags(Player $player): array{
			return [
				"{name}"	       => $player->getName(),
                                "{money}".              => $payer ->getMoney(),
				"{x}"                  => intval($player->getX()),
				"{y}"                  => intval($player->getY()),
				"{z}"                  => intval($player->getZ()),
				"{time}"               => date($this->getScoreHud()->getConfig()->get("time-format"))	
			];
		}
	}
}
