/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

module.exports = function(config) {
    config.set({
        basePath: '../',
        frameworks: [
            'jasmine'
        ],
        plugins: [
            'karma-chrome-launcher',
            'karma-coverage',
            'karma-firefox-launcher',
            'karma-jasmine',
            'karma-junit-reporter',
            'karma-phantomjs-launcher'
        ],
        proxies: {
            // FIXME we need a better way to load fixtures that is stable
            // it should be:
            // '/tests': '/base/tests',
            // so that we can provide all test requests in the correct /base/ path
            '/fixtures': '/base/tests/fixtures',
            '/sidecar/tests/fixtures': '/base/tests/fixtures',
            '/sidecar/lib': '/base/lib',
            '/src': '/base/src'
        },
        reportSlowerThan: 500,
        browserDisconnectTimeout: 5000,
        browserDisconnectTolerance: 5
    });
};
