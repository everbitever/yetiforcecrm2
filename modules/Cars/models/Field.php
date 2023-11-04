<?php
/* +***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * *********************************************************************************** */

class Cars_Field_Model extends Vtiger_Field_Model
{
    public function isEditable(): bool
    {
        if ('car_operating_cost' === $this->getFieldName()) {
            return false;
        }

        return parent::isEditable();
    }
}