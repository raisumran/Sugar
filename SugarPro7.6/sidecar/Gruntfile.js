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

var os = require('os');

module.exports = function(grunt) {
    grunt.loadTasks('grunt/tasks');
    grunt.loadNpmTasks('grunt-jsduck');

    var path = grunt.option('path');
    path = path && path.replace(/\/+$/, '') + '/' || os.tmpdir();

    grunt.initConfig({
        karma: {
            options: {
                assetsDir: 'grunt/assets',
                autoWatch: false,
                browsers: ['PhantomJS'],
                configFile: 'grunt/karma.conf.js',
                singleRun: true
            },
            dev: {
                autoWatch: true,
                browsers: ['Chrome'],
                singleRun: false
            },
            coverage: {
                coverageReporter: {
                    reporters: [
                        {type: 'html', dir: path + 'karma/sidecar/coverage-html'},
                        // TODO: dir should not be needed if we want the output
                        // on screen only - though if we don't specify it is
                        // created. This is probably an issue and we should
                        // report it.
                        {type: 'text', dir: path + 'karma/sidecar/coverage'}
                    ]
                },
                reporters: [
                    'coverage',
                    'dots'
                ]
            },
            ci: {
                junitReporter: {
                    outputFile: path + 'karma/test-results.xml'
                },
                reporters: [
                    'dots',
                    'junit'
                ]
            },
            'ci-coverage': {
                coverageReporter: {
                    reporters: [
                        {type: 'cobertura', dir: path + 'karma/sidecar/coverage-xml', file: 'cobertura-coverage.xml'},
                        {type: 'html', dir: path + 'karma/sidecar/coverage-html'}
                    ]
                },
                junitReporter: {
                    outputFile: path + 'karma/sidecar/test-results.xml'
                },
                reporters: [
                    'coverage',
                    'dots',
                    'junit'
                ]
            }
        },
        jsduck: {
            sidecar: {
                src: [
                    'src/**/*.js',
                    'lib/sugaraccessibility/*.js',
                    'lib/sugaranalytics/*.js',
                    'lib/sugarapi/sugarapi.js',
                    'lib/sugarlogic/*.js'
                ],

                dest: 'docs',

                options: {
                    'title': 'Sidecar Javascript Documentation',
                    'color': true,
                    'head-html': '<link rel="stylesheet" href="../../styleguide/assets/css/jsduck.css" type="text/css">',
                    'builtin-classes': true,
                    'external': 'jQuery'
                }
            }
        }
    });
};
