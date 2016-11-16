<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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

/**
 * Adds visibility for owner only.
 */
class OwnerVisibility extends SugarVisibility
{
    /**
     * (non-PHPdoc)
     * @see SugarVisibility::addVisibilityWhere()
     */
    public function addVisibilityWhere(&$query)
    {
        $owner_where = $this->bean->getOwnerWhere($GLOBALS['current_user']->id, $this->getOption('table_alias'));
        
        if(!empty($query)) {
            $query .= " AND $owner_where";
        } else {
            $query = $owner_where;
        }
            
        return $query;
    }

    /**
     * (non-PHPdoc)
     * @see SugarVisibility::addVisibilityWhereQuery()
     */
    public function addVisibilityWhereQuery(SugarQuery $sugarQuery, $options = array()) 
    {
        $where = null;
        $this->addVisibilityWhere($where, $options);
        
        if(!empty($where)) {
            $sugarQuery->where()->queryAnd()->addRaw($where);
        }
        
        return $sugarQuery;
    }
}
