<?php
$clientCache['Calls']['base']['layout'] = array (
  'record-dashboard' => 
  array (
    'meta' => 
    array (
      'metadata' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'rows' => 
            array (
              0 => 
              array (
                0 => 
                array (
                  'view' => 
                  array (
                    'type' => 'dashablelist',
                    'label' => 'LBL_MY_SCHEDULED_CALLS',
                    'display_columns' => 
                    array (
                      0 => 'date_start',
                      1 => 'name',
                      2 => 'parent_name',
                    ),
                    'orderBy' => 
                    array (
                      'field' => 'date_start',
                      'direction' => 'asc',
                    ),
                    'filter_id' => 'my_scheduled_calls',
                  ),
                  'context' => 
                  array (
                    'module' => 'Calls',
                  ),
                  'width' => 12,
                ),
              ),
            ),
            'width' => 12,
          ),
        ),
      ),
      'name' => 'LBL_DEFAULT_DASHBOARD_TITLE',
    ),
  ),
  'subpanels' => 
  array (
    'meta' => 
    array (
      'components' => 
      array (
        0 => 
        array (
          'layout' => 'subpanel',
          'label' => 'LBL_NOTES_SUBPANEL_TITLE',
          'context' => 
          array (
            'link' => 'notes',
          ),
        ),
      ),
    ),
  ),
  'list-dashboard' => 
  array (
    'meta' => 
    array (
      'metadata' => 
      array (
        'components' => 
        array (
          0 => 
          array (
            'rows' => 
            array (
              0 => 
              array (
                0 => 
                array (
                  'view' => 
                  array (
                    'type' => 'dashablelist',
                    'label' => 'LBL_MY_SCHEDULED_CALLS',
                    'display_columns' => 
                    array (
                      0 => 'date_start',
                      1 => 'name',
                      2 => 'parent_name',
                    ),
                    'orderBy' => 
                    array (
                      'field' => 'date_start',
                      'direction' => 'asc',
                    ),
                    'filter_id' => 'my_scheduled_calls',
                  ),
                  'context' => 
                  array (
                    'module' => 'Calls',
                  ),
                  'width' => 12,
                ),
              ),
            ),
            'width' => 12,
          ),
        ),
      ),
      'name' => 'LBL_DEFAULT_DASHBOARD_TITLE',
    ),
  ),
  '_hash' => '8e9761e50e7818784c284e23fc8dbda8',
);

