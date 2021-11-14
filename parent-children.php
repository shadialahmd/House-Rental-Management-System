<?php
// This script and data application were generated by AppGini 5.71
// Download AppGini for free from https://bigprof.com/appgini/download/

	/* Configuration */
	/*************************************/

		$pcConfig = array(
			'houses' => array(    
			),
			'tenants' => array(   
				'house' => array(   
					'parent-table' => 'houses',
					'parent-primary-key' => 'id',
					'child-primary-key' => 'id',
					'child-primary-key-index' => 0,
					'tab-label' => 'Tenants',
					'auto-close' => true,
					'table-icon' => 'resources/table_icons/group_add.png',
					'display-refresh' => true,
					'display-add-new' => true,
					'forced-where' => '',
					'display-fields' => array(1 => 'Fullname', 2 => 'Gender', 3 => 'National ID', 4 => 'Phone number', 5 => 'Email', 6 => 'Registration date', 7 => 'House', 8 => 'Agreement document', 9 => 'Status', 10 => 'Exit date'),
					'display-field-names' => array(1 => 'fullname', 2 => 'gender', 3 => 'national_id', 4 => 'phone_number', 5 => 'email', 6 => 'registration_date', 7 => 'house', 8 => 'agreement_document', 9 => 'status', 10 => 'exit_date'),
					'sortable-fields' => array(0 => '`tenants`.`id`', 1 => 2, 2 => 3, 3 => 4, 4 => 5, 5 => 6, 6 => '`tenants`.`registration_date`', 7 => '`houses1`.`house_number`', 8 => 9, 9 => 10, 10 => '`tenants`.`exit_date`'),
					'records-per-page' => 10,
					'default-sort-by' => false,
					'default-sort-direction' => 'asc',
					'open-detail-view-on-click' => true,
					'display-page-selector' => true,
					'show-page-progress' => true,
					'template' => 'children-tenants',
					'template-printable' => 'children-tenants-printable',
					'query' => "SELECT `tenants`.`id` as 'id', `tenants`.`fullname` as 'fullname', `tenants`.`gender` as 'gender', `tenants`.`national_id` as 'national_id', `tenants`.`phone_number` as 'phone_number', `tenants`.`email` as 'email', if(`tenants`.`registration_date`,date_format(`tenants`.`registration_date`,'%m/%d/%Y'),'') as 'registration_date', IF(    CHAR_LENGTH(`houses1`.`house_number`), CONCAT_WS('',   `houses1`.`house_number`), '') as 'house', `tenants`.`agreement_document` as 'agreement_document', `tenants`.`status` as 'status', if(`tenants`.`exit_date`,date_format(`tenants`.`exit_date`,'%m/%d/%Y'),'') as 'exit_date' FROM `tenants` LEFT JOIN `houses` as houses1 ON `houses1`.`id`=`tenants`.`house` "
				)
			),
			'invoices' => array(   
				'tenant' => array(   
					'parent-table' => 'tenants',
					'parent-primary-key' => 'id',
					'child-primary-key' => 'id',
					'child-primary-key-index' => 0,
					'tab-label' => 'Invoices',
					'auto-close' => true,
					'table-icon' => 'resources/table_icons/card_money.png',
					'display-refresh' => true,
					'display-add-new' => true,
					'forced-where' => '',
					'display-fields' => array(1 => 'Tenant', 2 => 'Phone', 3 => 'House', 4 => 'Year', 5 => 'Month', 6 => 'Particulars', 7 => 'Total (Ksh)', 8 => 'Status', 9 => 'Comments'),
					'display-field-names' => array(1 => 'tenant', 2 => 'phone', 3 => 'house', 4 => 'year', 5 => 'month', 6 => 'particulars', 7 => 'total', 8 => 'status', 9 => 'comments'),
					'sortable-fields' => array(0 => '`invoices`.`id`', 1 => 2, 2 => '`tenants1`.`phone_number`', 3 => 4, 4 => 5, 5 => 6, 6 => 7, 7 => 8, 8 => 9, 9 => 10),
					'records-per-page' => 10,
					'default-sort-by' => false,
					'default-sort-direction' => 'asc',
					'open-detail-view-on-click' => true,
					'display-page-selector' => true,
					'show-page-progress' => true,
					'template' => 'children-invoices',
					'template-printable' => 'children-invoices-printable',
					'query' => "SELECT `invoices`.`id` as 'id', IF(    CHAR_LENGTH(`tenants1`.`fullname`) || CHAR_LENGTH(`tenants1`.`national_id`), CONCAT_WS('',   `tenants1`.`fullname`, ' ID: ', `tenants1`.`national_id`), '') as 'tenant', IF(    CHAR_LENGTH(`tenants1`.`phone_number`), CONCAT_WS('',   `tenants1`.`phone_number`), '') as 'phone', IF(    CHAR_LENGTH(`houses1`.`house_number`), CONCAT_WS('',   `houses1`.`house_number`), '') as 'house', `invoices`.`year` as 'year', `invoices`.`month` as 'month', `invoices`.`particulars` as 'particulars', `invoices`.`total` as 'total', `invoices`.`status` as 'status', `invoices`.`comments` as 'comments' FROM `invoices` LEFT JOIN `tenants` as tenants1 ON `tenants1`.`id`=`invoices`.`tenant` LEFT JOIN `houses` as houses1 ON `houses1`.`id`=`tenants1`.`house` "
				)
			),
			'payments' => array(   
				'tenant' => array(   
					'parent-table' => 'invoices',
					'parent-primary-key' => 'id',
					'child-primary-key' => 'id',
					'child-primary-key-index' => 0,
					'tab-label' => 'Payments',
					'auto-close' => true,
					'table-icon' => 'resources/table_icons/account_balances.png',
					'display-refresh' => true,
					'display-add-new' => true,
					'forced-where' => '',
					'display-fields' => array(1 => 'Tenant', 2 => 'House', 3 => 'Year', 4 => 'Month', 5 => 'Expected amount (Ksh)', 6 => 'Paid amount (Ksh)', 7 => 'Balance (Ksh)', 8 => 'Date', 9 => 'Comments'),
					'display-field-names' => array(1 => 'tenant', 2 => 'house', 3 => 'year', 4 => 'month', 5 => 'expected_amount', 6 => 'paid_amount', 7 => 'balance', 8 => 'date', 9 => 'comments'),
					'sortable-fields' => array(0 => '`payments`.`id`', 1 => 2, 2 => 3, 3 => '`invoices1`.`year`', 4 => '`invoices1`.`month`', 5 => '`invoices1`.`total`', 6 => 7, 7 => 8, 8 => '`payments`.`date`', 9 => 10),
					'records-per-page' => 10,
					'default-sort-by' => false,
					'default-sort-direction' => 'asc',
					'open-detail-view-on-click' => true,
					'display-page-selector' => true,
					'show-page-progress' => true,
					'template' => 'children-payments',
					'template-printable' => 'children-payments-printable',
					'query' => "SELECT `payments`.`id` as 'id', IF(    CHAR_LENGTH(`tenants1`.`fullname`) || CHAR_LENGTH(`tenants1`.`national_id`) || CHAR_LENGTH(`invoices1`.`id`), CONCAT_WS('',   `tenants1`.`fullname`, ' ID: ', `tenants1`.`national_id`, ' INV ID: ', `invoices1`.`id`), '') as 'tenant', IF(    CHAR_LENGTH(`houses1`.`house_number`), CONCAT_WS('',   `houses1`.`house_number`), '') as 'house', IF(    CHAR_LENGTH(`invoices1`.`year`), CONCAT_WS('',   `invoices1`.`year`), '') as 'year', IF(    CHAR_LENGTH(`invoices1`.`month`), CONCAT_WS('',   `invoices1`.`month`), '') as 'month', IF(    CHAR_LENGTH(`invoices1`.`total`), CONCAT_WS('',   `invoices1`.`total`), '') as 'expected_amount', `payments`.`paid_amount` as 'paid_amount', `payments`.`balance` as 'balance', if(`payments`.`date`,date_format(`payments`.`date`,'%m/%d/%Y'),'') as 'date', `payments`.`comments` as 'comments' FROM `payments` LEFT JOIN `invoices` as invoices1 ON `invoices1`.`id`=`payments`.`tenant` LEFT JOIN `tenants` as tenants1 ON `tenants1`.`id`=`invoices1`.`tenant` LEFT JOIN `houses` as houses1 ON `houses1`.`id`=`tenants1`.`house` "
				)
			)
		);

	/*************************************/
	/* End of configuration */


	$currDir = dirname(__FILE__);
	include("{$currDir}/defaultLang.php");
	include("{$currDir}/language.php");
	include("{$currDir}/lib.php");
	@header('Content-Type: text/html; charset=' . datalist_db_encoding);

	handle_maintenance();

	/**
	* dynamic configuration based on current user's permissions
	* $userPCConfig array is populated only with parent tables where the user has access to
	* at least one child table
	*/
	$userPCConfig = array();
	foreach($pcConfig as $pcChildTable => $ChildrenLookups){
		$permChild = getTablePermissions($pcChildTable);
		if($permChild[2]){ // user can view records of the child table, so proceed to check children lookups
			foreach($ChildrenLookups as $ChildLookupField => $ChildConfig){
				$permParent = getTablePermissions($ChildConfig['parent-table']);
				if($permParent[2]){ // user can view records of parent table
					$userPCConfig[$pcChildTable][$ChildLookupField] = $pcConfig[$pcChildTable][$ChildLookupField];
					// show add new only if configured above AND the user has insert permission
					if($permChild[1] && $pcConfig[$pcChildTable][$ChildLookupField]['display-add-new']){
						$userPCConfig[$pcChildTable][$ChildLookupField]['display-add-new'] = true;
					}else{
						$userPCConfig[$pcChildTable][$ChildLookupField]['display-add-new'] = false;
					}
				}
			}
		}
	}

	/* Receive, UTF-convert, and validate parameters */
	$ParentTable = $_REQUEST['ParentTable']; // needed only with operation=show-children, will be validated in the processing code
	$ChildTable = $_REQUEST['ChildTable'];
		if(!in_array($ChildTable, array_keys($userPCConfig))){
			/* defaults to first child table in config array if not provided */
			$ChildTable = current(array_keys($userPCConfig));
		}
		if(!$ChildTable){ die('<!-- No tables accessible to current user -->'); }
	$SelectedID = strip_tags($_REQUEST['SelectedID']);
	$ChildLookupField = $_REQUEST['ChildLookupField'];
		if(!in_array($ChildLookupField, array_keys($userPCConfig[$ChildTable]))){
			/* defaults to first lookup in current child config array if not provided */
			$ChildLookupField = current(array_keys($userPCConfig[$ChildTable]));
		}
	$Page = intval($_REQUEST['Page']);
		if($Page < 1){
			$Page = 1;
		}
	$SortBy = ($_REQUEST['SortBy'] != '' ? abs(intval($_REQUEST['SortBy'])) : false);
		if(!in_array($SortBy, array_keys($userPCConfig[$ChildTable][$ChildLookupField]['sortable-fields']), true)){
			$SortBy = $userPCConfig[$ChildTable][$ChildLookupField]['default-sort-by'];
		}
	$SortDirection = strtolower($_REQUEST['SortDirection']);
		if(!in_array($SortDirection, array('asc', 'desc'))){
			$SortDirection = $userPCConfig[$ChildTable][$ChildLookupField]['default-sort-direction'];
		}
	$Operation = strtolower($_REQUEST['Operation']);
		if(!in_array($Operation, array('get-records', 'show-children', 'get-records-printable', 'show-children-printable'))){
			$Operation = 'get-records';
		}

	/* process requested operation */
	switch($Operation){
		/************************************************/
		case 'show-children':
			/* populate HTML and JS content with children tabs */
			$tabLabels = $tabPanels = $tabLoaders = '';
			foreach($userPCConfig as $ChildTable => $childLookups){
				foreach($childLookups as $ChildLookupField => $childConfig){
					if($childConfig['parent-table'] == $ParentTable){
						$TableIcon = ($childConfig['table-icon'] ? "<img src=\"{$childConfig['table-icon']}\" border=\"0\" />" : '');
						$tabLabels .= sprintf('<li%s><a href="#panel_%s-%s" id="tab_%s-%s" data-toggle="tab">%s%s</a></li>' . "\n\t\t\t\t\t",($tabLabels ? '' : ' class="active"'), $ChildTable, $ChildLookupField, $ChildTable, $ChildLookupField, $TableIcon, $childConfig['tab-label']);
						$tabPanels .= sprintf('<div id="panel_%s-%s" class="tab-pane%s"><img src="loading.gif" align="top" />%s</div>' . "\n\t\t\t\t", $ChildTable, $ChildLookupField, ($tabPanels ? '' : ' active'), $Translation['Loading ...']);
						$tabLoaders .= sprintf('post("parent-children.php", { ChildTable: "%s", ChildLookupField: "%s", SelectedID: "%s", Page: 1, SortBy: "", SortDirection: "", Operation: "get-records" }, "panel_%s-%s");' . "\n\t\t\t\t", $ChildTable, $ChildLookupField, addslashes($SelectedID), $ChildTable, $ChildLookupField);
					}
				}
			}

			if(!$tabLabels){ die('<!-- no children of current parent table are accessible to current user -->'); }
			?>
			<div id="children-tabs">
				<ul class="nav nav-tabs">
					<?php echo $tabLabels; ?>
				</ul>
				<span id="pc-loading"></span>
			</div>
			<div class="tab-content"><?php echo $tabPanels; ?></div>

			<script>
				$j(function(){
					/* for iOS, avoid loading child tabs in modals */
					var iOS = /(iPad|iPhone|iPod)/g.test(navigator.userAgent);
					var embedded = ($j('.navbar').length == 0);
					if(iOS && embedded){
						$j('#children-tabs').next('.tab-content').remove();
						$j('#children-tabs').remove();
						return;
					}

					/* ajax loading of each tab's contents */
					<?php echo $tabLoaders; ?>
				})
			</script>
			<?php
			break;

		/************************************************/
		case 'show-children-printable':
			/* populate HTML and JS content with children buttons */
			$tabLabels = $tabPanels = $tabLoaders = '';
			foreach($userPCConfig as $ChildTable => $childLookups){
				foreach($childLookups as $ChildLookupField => $childConfig){
					if($childConfig['parent-table'] == $ParentTable){
						$TableIcon = ($childConfig['table-icon'] ? "<img src=\"{$childConfig['table-icon']}\" border=\"0\" />" : '');
						$tabLabels .= sprintf('<button type="button" class="btn btn-default" data-target="#panel_%s-%s" id="tab_%s-%s" data-toggle="collapse">%s %s</button>' . "\n\t\t\t\t\t", $ChildTable, $ChildLookupField, $ChildTable, $ChildLookupField, $TableIcon, $childConfig['tab-label']);
						$tabPanels .= sprintf('<div id="panel_%s-%s" class="collapse"><img src="loading.gif" align="top" />%s</div>' . "\n\t\t\t\t", $ChildTable, $ChildLookupField, $Translation['Loading ...']);
						$tabLoaders .= sprintf('post("parent-children.php", { ChildTable: "%s", ChildLookupField: "%s", SelectedID: "%s", Page: 1, SortBy: "", SortDirection: "", Operation: "get-records-printable" }, "panel_%s-%s");' . "\n\t\t\t\t", $ChildTable, $ChildLookupField, addslashes($SelectedID), $ChildTable, $ChildLookupField);
					}
				}
			}

			if(!$tabLabels){ die('<!-- no children of current parent table are accessible to current user -->'); }
			?>
			<div id="children-tabs" class="hidden-print">
				<div class="btn-group btn-group-lg">
					<?php echo $tabLabels; ?>
				</div>
				<span id="pc-loading"></span>
			</div>
			<div class="vspacer-lg"><?php echo $tabPanels; ?></div>

			<script>
				$j(function(){
					/* for iOS, avoid loading child tabs in modals */
					var iOS = /(iPad|iPhone|iPod)/g.test(navigator.userAgent);
					var embedded = ($j('.navbar').length == 0);
					if(iOS && embedded){
						$j('#children-tabs').next('.tab-content').remove();
						$j('#children-tabs').remove();
						return;
					}

					/* ajax loading of each tab's contents */
					<?php echo $tabLoaders; ?>
				})
			</script>
			<?php
			break;

		/************************************************/
		case 'get-records-printable':
		default: /* default is 'get-records' */

			if($Operation == 'get-records-printable'){
				$userPCConfig[$ChildTable][$ChildLookupField]['records-per-page'] = 2000;
			}

			// build the user permissions limiter
			$permissionsWhere = $permissionsJoin = '';
			$permChild = getTablePermissions($ChildTable);
			if($permChild[2] == 1){ // user can view only his own records
				$permissionsWhere = "`$ChildTable`.`{$userPCConfig[$ChildTable][$ChildLookupField]['child-primary-key']}`=`membership_userrecords`.`pkValue` AND `membership_userrecords`.`tableName`='$ChildTable' AND LCASE(`membership_userrecords`.`memberID`)='".getLoggedMemberID()."'";
			}elseif($permChild[2] == 2){ // user can view only his group's records
				$permissionsWhere = "`$ChildTable`.`{$userPCConfig[$ChildTable][$ChildLookupField]['child-primary-key']}`=`membership_userrecords`.`pkValue` AND `membership_userrecords`.`tableName`='$ChildTable' AND `membership_userrecords`.`groupID`='".getLoggedGroupID()."'";
			}elseif($permChild[2] == 3){ // user can view all records
				/* that's the only case remaining ... no need to modify the query in this case */
			}
			$permissionsJoin = ($permissionsWhere ? ", `membership_userrecords`" : '');

			// build the count query
			$forcedWhere = $userPCConfig[$ChildTable][$ChildLookupField]['forced-where'];
			$query = 
				preg_replace('/^select .* from /i', 'SELECT count(1) FROM ', $userPCConfig[$ChildTable][$ChildLookupField]['query']) .
				$permissionsJoin . " WHERE " .
				($permissionsWhere ? "( $permissionsWhere )" : "( 1=1 )") . " AND " .
				($forcedWhere ? "( $forcedWhere )" : "( 2=2 )") . " AND " .
				"`$ChildTable`.`$ChildLookupField`='" . makeSafe($SelectedID) . "'";
			$totalMatches = sqlValue($query);

			// make sure $Page is <= max pages
			$maxPage = ceil($totalMatches / $userPCConfig[$ChildTable][$ChildLookupField]['records-per-page']);
			if($Page > $maxPage){ $Page = $maxPage; }

			// initiate output data array
			$data = array(
				'config' => $userPCConfig[$ChildTable][$ChildLookupField],
				'parameters' => array(
					'ChildTable' => $ChildTable,
					'ChildLookupField' => $ChildLookupField,
					'SelectedID' => $SelectedID,
					'Page' => $Page,
					'SortBy' => $SortBy,
					'SortDirection' => $SortDirection,
					'Operation' => $Operation
				),
				'records' => array(),
				'totalMatches' => $totalMatches
			);

			// build the data query
			if($totalMatches){ // if we have at least one record, proceed with fetching data
				$startRecord = $userPCConfig[$ChildTable][$ChildLookupField]['records-per-page'] * ($Page - 1);
				$data['query'] = 
					$userPCConfig[$ChildTable][$ChildLookupField]['query'] .
					$permissionsJoin . " WHERE " .
					($permissionsWhere ? "( $permissionsWhere )" : "( 1=1 )") . " AND " .
					($forcedWhere ? "( $forcedWhere )" : "( 2=2 )") . " AND " .
					"`$ChildTable`.`$ChildLookupField`='" . makeSafe($SelectedID) . "'" . 
					($SortBy !== false && $userPCConfig[$ChildTable][$ChildLookupField]['sortable-fields'][$SortBy] ? " ORDER BY {$userPCConfig[$ChildTable][$ChildLookupField]['sortable-fields'][$SortBy]} $SortDirection" : '') .
					" LIMIT $startRecord, {$userPCConfig[$ChildTable][$ChildLookupField]['records-per-page']}";
				$res = sql($data['query'], $eo);
				while($row = db_fetch_row($res)){
					$data['records'][$row[$userPCConfig[$ChildTable][$ChildLookupField]['child-primary-key-index']]] = $row;
				}
			}else{ // if no matching records
				$startRecord = 0;
			}

			if($Operation == 'get-records-printable'){
				$response = loadView($userPCConfig[$ChildTable][$ChildLookupField]['template-printable'], $data);
			}else{
				$response = loadView($userPCConfig[$ChildTable][$ChildLookupField]['template'], $data);
			}

			// change name space to ensure uniqueness
			$uniqueNameSpace = $ChildTable.ucfirst($ChildLookupField).'GetRecords';
			echo str_replace("{$ChildTable}GetChildrenRecordsList", $uniqueNameSpace, $response);
		/************************************************/
	}
