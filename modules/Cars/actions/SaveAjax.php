<?php

/**
 * @copyright YetiForce S.A.
 * @license   YetiForce Public License 5.0 (licenses/LicenseEN.txt or yetiforce.com)
 */

class Cars_SaveAjax_Action extends Vtiger_SaveAjax_Action
{
    use \App\Controller\ExposeMethod;

    public function __construct()
    {
        parent::__construct();
        $this->exposeMethod('calculateOperatingCost');
    }

    public function calculateOperatingCost(App\Request $request): void
    {
        $moduleName = $request->getModule(false);
        $recordModel = new Cars_Record_Model();
        $response = new Vtiger_Response();

        $from = $request->getByType('from', 'Text');
        $to = $request->getByType('to', 'Text');

        try {
            $this->validate($moduleName, $from, $to);
            $recordModel->saveOperatingCost($from, $to);

            $response->setResult(['success' => true, 'message' => \App\Language::translate('OPERATING_COST_CALCULATED', $moduleName)]);
        } catch (Throwable $e) {
            $response->setError($e->getCode(), $e->getMessage());
        }
        $response->emit();
    }

    private function validate(string $moduleName, string $from, string $to): void
    {
        if (
            !preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $from) ||
            !preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $to)
        ) {
            throw new \App\Exceptions\IllegalValue(\App\Language::translate('ERR_DATE_INVALID', $moduleName), 202);
        }
    }
}