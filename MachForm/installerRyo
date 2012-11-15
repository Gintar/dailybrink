<?php
/******************************************************************************
 MachForm
  
 Copyright 2007 Appnitro Software. This code cannot be redistributed without
 permission from http://www.appnitro.com/
 
 More info at: http://www.appnitro.com/
 ******************************************************************************/
	ini_set("display_errors","1");

	if(!file_exists("config.php")){
		$state = 'show_error_no_config';
	}else{
		///check is machform already installed or not?
		@include("config.php");
		@mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
		$mysql_connect_error = mysql_error();
		
		@mysql_select_db(DB_NAME);
		$mysql_select_db_error = mysql_error();
		
		if(!empty($mysql_connect_error)){
			$mysql_select_db_error = "Unable to connect to MySQL";
		}
		
		@mysql_query("select count(*) from `ap_forms`");
		$error = mysql_error();
		
				
		if(empty($error)){ //MachForm already installed, display a warning instead
			$state = 'show_error_already_installed';	
		}else{ //do an install or pre-installation check
			
			if(!empty($_REQUEST['run_install'])){ //do installation
				//create the tables (ap_forms, ap_form_elements, ap_element_options
				$query = "CREATE TABLE `ap_forms` (
												  `form_id` int(11) NOT NULL auto_increment,
												  `form_name` text,
												  `form_description` text default NULL,
												  `form_email` varchar(255) default NULL,
												  `form_redirect` text default NULL,
												  `form_success_message` text default NULL,
												  `form_password` varchar(100) default NULL,
												  `form_unique_ip` int(1) NOT NULL default '0',
												  `form_frame_height` int(11) default NULL,
												  `form_has_css` int(11) NOT NULL default '0',
												  `form_captcha` int(11) NOT NULL default '0',
												  `form_active` int(11) NOT NULL default '1',
												  `form_review` int(11) NOT NULL default '0',
												  `esl_from_name` text default NULL,
												  `esl_from_email_address` varchar(255) default NULL,
												  `esl_subject` text,
												  `esl_content` mediumtext,
												  `esl_plain_text` int(11) NOT NULL default '0',
												  `esr_email_address` varchar(255) default NULL,
												  `esr_from_name` text default NULL,
												  `esr_from_email_address` varchar(255) default NULL,
												  `esr_subject` text,
												  `esr_content` mediumtext,
												  `esr_plain_text` int(11) NOT NULL default '0',
												  PRIMARY KEY  (`form_id`)
												) DEFAULT CHARACTER SET utf8;";

				mysql_query($query);
				$error_1 = mysql_error();
				if(!empty($error_1)){
					$create_table_error[] = $error_1;
				}
				
				
				$query = "CREATE TABLE `ap_form_elements` (
												  `form_id` int(11) NOT NULL default '0',
												  `element_id` int(11) NOT NULL default '0',
												  `element_title` text default NULL,
												  `element_guidelines` text default NULL,
												  `element_size` varchar(6) NOT NULL default 'medium',
												  `element_is_required` int(11) NOT NULL default '0',
												  `element_is_unique` int(11) NOT NULL default '0',
												  `element_is_private` int(11) NOT NULL default '0',
												  `element_type` varchar(50) default NULL,
												  `element_position` int(11) NOT NULL default '0',
												  `element_default_value` text default NULL,
												  `element_constraint` varchar(50) default NULL,
												  `element_total_child` int(11) NOT NULL default '0',
												  PRIMARY KEY  (`form_id`,`element_id`)
												) DEFAULT CHARACTER SET utf8;";
				mysql_query($query);
				$error_2 = mysql_error();
				if(!empty($error_2)){
					$create_table_error[] = $error_2;
				}
				 
				$query = "CREATE TABLE `ap_element_options` (
												  `aeo_id` int(11) NOT NULL auto_increment,
												  `form_id` int(11) NOT NULL default '0',
												  `element_id` int(11) NOT NULL default '0',
												  `option_id` int(11) NOT NULL default '0',
												  `position` int(11) NOT NULL default '0',
												  `option` text default NULL,
												  `option_is_default` int(11) NOT NULL default '0',
												  `live` int(11) NOT NULL default '1',
												  PRIMARY KEY  (`aeo_id`)
												) DEFAULT CHARACTER SET utf8;";
				mysql_query($query);
				$error_3 = mysql_error();
				if(!empty($error_3)){
					$create_table_error[] = $error_3;
				}
				
				$query = "CREATE TABLE `ap_column_preferences` (
							  `acp_id` int(11) NOT NULL auto_increment,
							  `form_id` int(11) default NULL,
							  `element_name` varchar(255) NOT NULL default '',
							  `position` int(11) NOT NULL default '0',
							  PRIMARY KEY  (`acp_id`),
							  KEY `acp_position` (`form_id`,`position`)
							) DEFAULT CHARACTER SET utf8;";
				
				mysql_query($query);
				$error_4 = mysql_error();
				if(!empty($error_4)){
					$create_table_error[] = $error_4;
				}
								
				if(empty($create_table_error)){
					$install_message = "<b>Congratulations!</b> You have completed the installation. MachForm is now installed.";
				}else{
					$install_message = "An error has occured during installation.";
				}
											
				$state = 'install_report';
			}else{
					
				//do a pre installation check
				$state = 'show_preinstall_check';
							
				//check for PHP version
				if(version_compare(PHP_VERSION,"4.3.0",">=")){
					$is_php_version_passed = true;
				}else{
					$is_php_version_passed = false;
					$pre_install_has_error = true;
				}
				
				//check for MySQL version
				if(version_compare(mysql_get_server_info(),"4.1.0",">=")){
					$is_mysql_version_passed = true;
				}else{
					$is_mysql_version_passed = false;
					$pre_install_has_error = true;
				}
							
				//check for MySQL user,password and database existance
				if(empty($mysql_connect_error)){
					$is_mysql_connect_passed = true;
				}else{
					$is_mysql_connect_passed = false;
					$pre_install_has_error = true;
				}
				
				if(empty($mysql_select_db_error)){
					$is_mysql_select_db_passed = true;
				}else{
					$is_mysql_select_db_passed = false;
					$pre_install_has_error = true;
				}
				
				//check for data folder permission
				if(is_writable(DATA_DIR)){
					$is_data_dir_writable = true;
				}else {
					$is_data_dir_writable = false;
					$pre_install_has_error = true;
					$data_dir_writable_error = "MachForm require <b>read</b> and <b>write</b> access to this folder. Please set the correct permission.";
				}
				
				if($pre_install_has_error){
					$pre_install_message = "Your system does not match the minimum requirements necessary. Please take the appropriate actions to correct the errors.";
				}else{
					$pre_install_message = "Your system passed the minimum requirements necessary. You can now start the installation process.";
				}
			}
		}
		
	}
		
	$hide_nav = true;
?>

<?php require('includes/header.php'); ?>

<div id="form_manager" style="padding-left: 50px;padding-top: 50px;padding-bottom: 50px">

<?php
	if($state == 'show_error_no_config'){
?>
<div class="info" style="width: 80%">
	<h2><img src="images/icons/package_applications.gif" align="absmiddle" /> MachForm Installer Error</h2>
	<p>Please fix the following error before you can continue the installation process:</p>
</div>

<div id="form_container" style="align: center">
		<form id="form_login" class="appnitro"  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<ul style="width: 80%;">
			<li class="error" style="padding-left: 15px;padding-top: 15px;">
				<label class="desc"><img src="images/icons/stop.gif" align="absmiddle" style="padding-bottom: 5px"/> Missing configuration file</label>
				<br />
				<div><p>
				There doesn't seem to be a <b>config.php</b> file. We need this before we can get started.
				</p>
				<br /><br />
				<p> In the base directory of your installation you'll find a file  called <strong>config-empty.php</strong>. Open this file and fill in the required database information.</p><br /><br />
				<p> After the details are filled in you <strong> must rename the file config.php </strong> before continuing. </p><br />
				</div>
			</li>
    		<li class="buttons" style="padding-left:0px">
		    	<input id="login" class="button_text" type="submit" name="submit" value="RETRY" style="padding: 8px" />
			</li>
		</ul>
		</form>	
</div><br />

<?php }elseif ($state == 'show_preinstall_check'){ ?>

<div class="info" style="width: 80%">
	<h2><img src="images/icons/package_applications.gif" align="absmiddle" /> MachForm Pre-Installation Check</h2>
	<p><?php echo $pre_install_message; ?></p>
</div>

<div id="form_container" style="align: center">
		<form id="form_login" class="appnitro"  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<ul style="width: 80%;">
			<li class="<?php if($is_php_version_passed){ echo 'highlighted'; }else{ echo 'error'; }; ?>" style="padding-left: 15px;padding-top: 10px;">
				<label class="desc"><img src="images/icons/<?php if($is_php_version_passed){ echo 'checkbox'; }else{ echo 'cross'; }; ?>_16.gif" align="absmiddle" style="padding-bottom: 5px"/> &nbsp;PHP Version &gt;= 4.3.0</label>
			</li>
			
			<li class="<?php if($is_mysql_version_passed){ echo 'highlighted'; }else{ echo 'error'; }; ?>" style="padding-left: 15px;padding-top: 10px;">
				<label class="desc"><img src="images/icons/<?php if($is_mysql_version_passed){ echo 'checkbox'; }else{ echo 'cross'; }; ?>_16.gif" align="absmiddle" style="padding-bottom: 5px"/> &nbsp;MySQL Version &gt;= 4.1.0</label>
			</li>
			<li class="<?php if($is_mysql_connect_passed){ echo 'highlighted'; }else{ echo 'error'; }; ?>" style="padding-left: 15px;padding-top: 10px;">
				<label class="desc"><img src="images/icons/<?php if($is_mysql_connect_passed){ echo 'checkbox'; }else{ echo 'cross'; }; ?>_16.gif" align="absmiddle" style="padding-bottom: 5px"/> &nbsp;Correct User and Password for MySQL</label><?php echo $mysql_connect_error; ?>
			</li>
			<li class="<?php if($is_mysql_select_db_passed){ echo 'highlighted'; }else{ echo 'error'; }; ?>" style="padding-left: 15px;padding-top: 10px;">
				<label class="desc"><img src="images/icons/<?php if($is_mysql_select_db_passed){ echo 'checkbox'; }else{ echo 'cross'; }; ?>_16.gif" align="absmiddle" style="padding-bottom: 5px"/> &nbsp;Establishing a Connection to Database [<?php echo DB_NAME; ?>]</label><?php echo $mysql_select_db_error; ?>
			</li>
			<li class="<?php if($is_data_dir_writable){ echo 'highlighted'; }else{ echo 'error'; }; ?>" style="padding-left: 15px;padding-top: 10px;">
				<label class="desc"><img src="images/icons/<?php if($is_data_dir_writable){ echo 'checkbox'; }else{ echo 'cross'; }; ?>_16.gif" align="absmiddle" style="padding-bottom: 5px"/> &nbsp;Writable Data Folder [<?php echo DATA_DIR; ?>]</label><?php echo $data_dir_writable_error; ?>
			</li>
    		<li class="buttons" style="padding-left:0px">
		    	<?php if($pre_install_has_error){ ?>
    				<input id="login" class="button_text" type="submit" name="submit" value="Check Again" style="padding: 8px" />
    			<?php } else { ?>
    			    <input type="hidden" id="run_install" name="run_install" value="1" />
    				<input id="login" class="button_text" type="submit" name="submit" value="Run Installation" style="padding: 8px" />
    			<?php } ?>
			</li>
		</ul>
		</form>	
</div><br />

<?php }elseif ($state == 'show_error_already_installed'){ ?>

<div class="info" style="width: 80%">
	<h2><img src="images/icons/package_applications.gif" align="absmiddle" /> Remove Installer File</h2>
	<p>Please follow the step below to be able to continue:</p>
</div>

<div id="form_container" style="align: center">
		<form id="form_login" class="appnitro"  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<ul style="width: 80%;">
			<li class="error" style="padding-left: 15px;padding-top: 15px;">
				<label class="desc"><img src="images/icons/stop.gif" align="absmiddle" style="padding-bottom: 5px"/> &nbsp;Please remove this file</label>
				<br />
				<div><p>
				MachForm is currently installed and ready.
				</p>
				<br />
				<p> Please remove this file (<strong>installer.php</strong>) before you can start using MachForm.</p><br />
				<p> After you delete this file, you can <a href="index.php">login here</a>. </p><br />
				</div>
			</li>
    	</ul>
		</form>	
</div><br />

<?php }elseif ($state == 'install_report'){ ?>


<div class="info" style="width: 80%">
	<h2><img src="images/icons/package_applications.gif" align="absmiddle" /> MachForm Installation Report</h2>
	<p><?php echo $install_message; ?></p>
</div>

<div id="form_container" style="align: center">
		<form id="form_login" class="appnitro"  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<ul style="width: 80%;">
<?php if(empty($create_table_error)){ ?>			
			<li class="highlighted" style="padding-left: 15px;padding-top: 10px;">
				<label class="desc"><img src="images/icons/checkbox_16.gif" align="absmiddle" style="padding-bottom: 5px"/> &nbsp;Table <b>ap_forms</b> created</label>
			</li>
			<li class="highlighted" style="padding-left: 15px;padding-top: 10px;">
				<label class="desc"><img src="images/icons/checkbox_16.gif" align="absmiddle" style="padding-bottom: 5px"/> &nbsp;Table <b>ap_form_elements</b> created</label>
			</li>
			<li class="highlighted" style="padding-left: 15px;padding-top: 10px;">
				<label class="desc"><img src="images/icons/checkbox_16.gif" align="absmiddle" style="padding-bottom: 5px"/> &nbsp;Table <b>ap_element_options</b> created</label>
			</li>
			<li class="highlighted" style="padding-left: 15px;padding-top: 10px;">
				<label class="desc"><img src="images/icons/checkbox_16.gif" align="absmiddle" style="padding-bottom: 5px"/> &nbsp;Table <b>ap_column_preferences</b> created</label>
			</li>
			<li class="highlighted" style="padding-left: 15px;padding-top: 10px;">
				<label class="desc"><img src="images/icons/checkbox_16.gif" align="absmiddle" style="padding-bottom: 5px"/> &nbsp;<b>Installation completed!</b></label>
			</li>
			<li style="padding-left: 0px;padding-top: 10px; margin-top: 5px">
				<img src="images/icons/information.gif" align="absmiddle" /> <b>Important:</b> Please delete this installer file (<b>installer.php</b>) now. <br /><br />After deleting this file, you can login to <a href="index.php">MachForm admin panel</a> 
			</li>
<?php } else{ ?>
			<li class="error" style="padding-left: 15px;padding-top: 15px;">
				<label class="desc"><img src="images/icons/stop.gif" align="absmiddle" style="padding-bottom: 5px"/> An error has occured during installation</label>
			</li>
			
			<?php
					foreach ($create_table_error as $error_msg){ ?>
						<li class="highlighted" style="padding-left: 15px;padding-top: 10px;">
							<label class="desc"><img src="images/icons/cross_16.gif" align="absmiddle" style="padding-bottom: 5px"/> &nbsp;<?php echo $error_msg; ?></label>
			</li>
			<?php	}
			?>

<?php } ?>
		    <?php if(!empty($create_table_error)){ ?>
		    <li class="buttons" style="padding-left:0px">
    			<input type="hidden" id="run_install" name="run_install" value="1" />
    			<input id="login" class="button_text" type="submit" name="submit" value="Try Again" style="padding: 8px" />
    		</li>	
    		<?php } ?>	
			
		</ul>
		</form>	
</div><br />

<?php } ?>

</div>
<?php require('includes/footer.php'); ?>