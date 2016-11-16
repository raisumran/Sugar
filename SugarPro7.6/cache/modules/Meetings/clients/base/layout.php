<?php
$clientCache['Meetings']['base']['layout'] = array (
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
                    'label' => 'LBL_MY_SCHEDULED_MEETINGS',
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
                    'filter_id' => 'my_scheduled_meetings',
                  ),
                  'context' => 
                  array (
                    'module' => 'Meetings',
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
                    'label' => 'LBL_MY_SCHEDULED_MEETINGS',
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
                    'filter_id' => 'my_scheduled_meetings',
                  ),
                  'context' => 
                  array (
                    'module' => 'Meetings',
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
  '_hash' => 'f388087f8f1c7a52a45b5b85d5a04871',
);

