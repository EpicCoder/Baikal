<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2012 Jérôme Schneider <mail@jeromeschneider.fr>
*  All rights reserved
*
*  http://baikal.codr.fr
*
*  This script is part of the Baïkal Server project. The Baïkal
*  Server project is free software; you can redistribute it
*  and/or modify it under the terms of the GNU General Public
*  License as published by the Free Software Foundation; either
*  version 2 of the License, or (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

namespace BaikalAdmin\Controller;

class Dashboard extends \Flake\Core\Controller {
	
	public function execute() {
	}
	
	public function render() {
		$sLinkUsers = \BaikalAdmin\Controller\Users::link();
		
		$sMessage =<<<MESSAGE
Ici, infos sur:<br />
* Nombre d'utilisateurs<br />
* Nombre de calendriers<br />
* Nombre d'évènements<br />
* Version + Mise à jour de baikal<br />
* <a href='{$sLinkUsers}'>Lien vers liste des utilisateurs</a><br />
* Lien vers paramétrage<br />
MESSAGE;
		return $sMessage;
	}
}