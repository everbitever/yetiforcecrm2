<?php
/* +***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * *********************************************************************************** */

class Cars_ListView_Model extends Vtiger_ListView_Model
{
	public function getListViewLinks($linkParams)
	{
		$links = parent::getListViewLinks($linkParams);

		$basicLinks = [
			[
				'linktype' => 'LISTVIEWBASIC',
				'linklabel' => 'LBL_OPERATING_COST',
				'showLabel' => true,
				'linkicon' => 'fas fa-dollar-sign',
				'linkclass' => 'btn-light calculateOperatingCost',
                'linkdata' => ['url' => '?module=Cars&view=ModalAjax']
			],
		];

        foreach ($basicLinks as $basicLink) {
			$links['LISTVIEWBASIC'][] = Vtiger_Link_Model::getInstanceFromValues($basicLink);
		}

		return $links;
	}
}