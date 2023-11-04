<?php

class Cars_ModalAjax_View extends Vtiger_BasicAjax_View
{
	public function process(App\Request $request): void
	{
		$viewer = $this->getViewer($request);
		$qualifiedModuleName = $request->getModule(false);

        $viewer->assign('FROM', date('Y-m-d'));
        $viewer->assign('TO', date('Y-m-d'));

		echo $viewer->view('Modals/OperatingCostModal.tpl', $qualifiedModuleName, true);
	}
}