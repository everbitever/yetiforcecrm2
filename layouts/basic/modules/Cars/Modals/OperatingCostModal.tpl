<div class="modelContainer modal fade" id="OperatingCostModal" tabindex="-1">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <form id="formOperatingCostCalculator" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title">{\App\Language::translate('OPERATING_COST', $MODULE_NAME)}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert"></div>
                    <div class="form-group form-row">
                        <label class="col-md-5 col-form-label u-text-small-bold text-md-right">
                            {\App\Language::translate('LBL_FROM', $MODULE_NAME)}
                        </label>
                        <div class="col-md-7 controls">
                            <input type="text" name="from" value="{$FROM}" class="dateField datepicker form-control" data-validation-engine='validate[required]' />
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label class="col-md-5 col-form-label u-text-small-bold text-md-right">
                            {\App\Language::translate('LBL_TO', $MODULE_NAME)}
                        </label>
                        <div class="col-md-7 controls">
                            <input type="text" name="to" value="{$TO}" class="dateField datepicker form-control" data-validation-engine='validate[required]' />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success saveButton">
                        <span class="fas fa-check mr-1"></span>
                        {\App\Language::translate('LBL_CALCULATE', $MODULE_NAME)}
                    </button>
                    <button type="button" class="btn btn-danger dismiss" data-dismiss="modal">
                        <span class="fas fa-times mr-1"></span>
                        {\App\Language::translate('LBL_CLOSE', $MODULE_NAME)}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>