/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/
'use strict';

jQuery.Class(
    'Cars_List_Js',
    {},
    {
        show: function (url, currentTrElement) {
            let thisInstance = this;

            AppConnector.request(url)
                .done(function (data) {
                    let callBackFunction = function (container) {
                        let form = container.find('#formOperatingCostCalculator');
                        let params = app.validationEngineOptions;
                        let alert = form.find('.alert');

                        alert.hide();

                        params.onValidationComplete = function (formData, valid) {
                            if (valid) {
                                thisInstance.saveDetails(formData, currentTrElement);
                                return valid;
                            }
                        };

                        form.validationEngine(params);
                        form.on('submit', function (e) {
                            e.preventDefault();
                        });
                    };

                    app.showModalWindow(
                        data,
                        function (modalContainer) {
                            if (typeof callBackFunction == 'function') {
                                callBackFunction(modalContainer);
                            }
                        },
                        {}
                    );
                })
                .fail(function (error) {
                    app.showNotify({
                        text: app.vtranslate('JS_ERROR'),
                        type: 'error'
                    });
                })
            ;
        },
        saveDetails: function (form, currentTrElement) {
            const thisInstance = this;
            let params = form.serializeFormData();
            const saveButton = form.find('[type="submit"]');
            let alert = form.find('.alert');

            saveButton.prop('disabled', true);

            if (typeof params === 'undefined') {
                params = {};
            }

            const progressIndicatorElement = $.progressIndicator({
                position: 'html',
                blockInfo: {
                    enabled: true
                }
            });

            params.module = app.getModuleName();
            params.action = 'SaveAjax';
            params.mode = 'calculateOperatingCost';

            AppConnector.request(params)
                .done(function (data) {
                    progressIndicatorElement.progressIndicator({ mode: 'hide' });

                    if (typeof data === 'string') {
                        data = JSON.parse(data);
                    }

                    alert.show();

                    if (data.success === false) {
                        saveButton.prop('disabled', false);
                        alert.addClass('alert-danger');
                        alert.html(data.error.message);
                    } else {
                        alert.addClass('alert-success');
                        alert.html(data.result.message);
                    }
                })
                .fail(function (error) {
                    progressIndicatorElement.progressIndicator({ mode: 'hide' });

                    app.showNotify({
                        text: app.vtranslate('JS_ERROR'),
                        type: 'error'
                    });
                })
            ;
        },
        registerActions: function () {
            let thisInstance = this;

            jQuery('.calculateOperatingCost').on('click', function (e) {
                let calculateOperatingCostButton = jQuery(e.currentTarget);
                let createUrl = calculateOperatingCostButton.data('url');
                thisInstance.show(createUrl);
            });
        },
        registerEvents: function () {
            this.registerActions();
        }
    }
);