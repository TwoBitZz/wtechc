<!DOCTYPE HTML>
<html lang='en' dir='ltr' class='firefox firefox49'>
<head>
<meta charset="utf-8" />
<meta name="referrer" content="no-referrer" />
<meta name="robots" content="noindex,nofollow" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<style id="cfs-style">html{display: none;}</style>
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="./themes/pmahomme/jquery/jquery-ui-1.11.4.css" />
<link rel="stylesheet" type="text/css" href="js/codemirror/lib/codemirror.css?v=4.6.4" />
<link rel="stylesheet" type="text/css" href="js/codemirror/addon/hint/show-hint.css?v=4.6.4" />
<link rel="stylesheet" type="text/css" href="js/codemirror/addon/lint/lint.css?v=4.6.4" />
<link rel="stylesheet" type="text/css" href="phpmyadmin.css.php?nocache=5900173106ltr" />
<link rel="stylesheet" type="text/css" href="./themes/pmahomme/css/printview.css?v=4.6.4" media="print" id="printcss"/>
<title>localhost / Local Databases / exam | phpMyAdmin 4.6.4</title>
<script data-cfasync='false' type='text/javascript' src='js/whitelist.php?lang=en&amp;db=exam&amp;token=891a25bd2915539c6ae5849436f79e52&v=4.6.4'></script> 

<script data-cfasync="false" type="text/javascript" src="js/get_scripts.js.php?scripts%5B%5D=jquery/jquery-2.1.4.min.js&amp;scripts%5B%5D=sprintf.js&amp;scripts%5B%5D=ajax.js&amp;scripts%5B%5D=keyhandler.js&amp;scripts%5B%5D=jquery/jquery-ui-1.11.4.min.js&amp;scripts%5B%5D=jquery/jquery.cookie.js&amp;scripts%5B%5D=jquery/jquery.mousewheel.js&amp;scripts%5B%5D=jquery/jquery.event.drag-2.2.js&amp;scripts%5B%5D=jquery/jquery-ui-timepicker-addon.js&amp;scripts%5B%5D=jquery/jquery.ba-hashchange-1.3.js&amp;v=4.6.4">
</script>
<script data-cfasync="false" type="text/javascript" src="js/get_scripts.js.php?scripts%5B%5D=jquery/jquery.debounce-1.0.5.js&amp;scripts%5B%5D=menu-resizer.js&amp;scripts%5B%5D=cross_framing_protection.js&amp;scripts%5B%5D=rte.js&amp;scripts%5B%5D=tracekit/tracekit.js&amp;scripts%5B%5D=error_report.js&amp;scripts%5B%5D=config.js&amp;scripts%5B%5D=doclinks.js&amp;scripts%5B%5D=functions.js&amp;scripts%5B%5D=navigation.js&amp;v=4.6.4"></script>
<script data-cfasync="false" type="text/javascript" src="js/get_scripts.js.php?scripts%5B%5D=indexes.js&amp;scripts%5B%5D=common.js&amp;scripts%5B%5D=page_settings.js&amp;scripts%5B%5D=codemirror/lib/codemirror.js&amp;scripts%5B%5D=codemirror/mode/sql/sql.js&amp;scripts%5B%5D=codemirror/addon/runmode/runmode.js&amp;scripts%5B%5D=codemirror/addon/hint/show-hint.js&amp;scripts%5B%5D=codemirror/addon/hint/sql-hint.js&amp;scripts%5B%5D=codemirror/addon/lint/lint.js&amp;scripts%5B%5D=codemirror/addon/lint/sql-lint.js&amp;v=4.6.4"></script>
<script data-cfasync="false" type="text/javascript" src="js/get_scripts.js.php?scripts%5B%5D=console.js&amp;v=4.6.4"></script> 
<script data-cfasync='false' type='text/javascript' src='js/messages.php?lang=en&amp;db=exam&amp;token=891a25bd2915539c6ae5849436f79e52&v=4.6.4'></script>
<script data-cfasync='false' type='text/javascript' src='js/get_image.js.php?theme=pmahomme&v=4.6.4'></script>
<script data-cfasync="false" type="text/javascript">// 
	<![CDATA[PMA_commonParams.setAll({common_query:"?token=891a25bd2915539c6ae5849436f79e52",opendb_url:"db_structure.php",safari_browser:"0",collation_connection:"utf8mb4_unicode_ci",lang:"en",server:"1",table:"",db:"exam",token:"891a25bd2915539c6ae5849436f79e52",text_dir:"ltr",show_databases_navigation_as_tree:"1",pma_text_default_tab:"Browse",pma_text_left_default_tab:"Structure",pma_text_left_default_tab2:"",LimitChars:"50",pftext:"",confirm:"1",LoginCookieValidity:"1440",logged_in:"1",PMA_VERSION:"4.6.4",auth_type:"config"});
			 ConsoleEnterExecutes=false
			 AJAX.scriptHandler.add("jquery/jquery-2.1.4.min.js",0).add("whitelist.php?lang=en&amp;db=exam&amp;token=891a25bd2915539c6ae5849436f79e52",1).add("sprintf.js",1).add("ajax.js",0).add("keyhandler.js",1).add("jquery/jquery-ui-1.11.4.min.js",0).add("jquery/jquery.cookie.js",0).add("jquery/jquery.mousewheel.js",0).add("jquery/jquery.event.drag-2.2.js",0).add("jquery/jquery-ui-timepicker-addon.js",0).add("jquery/jquery.ba-hashchange-1.3.js",0).add("jquery/jquery.debounce-1.0.5.js",0).add("menu-resizer.js",1).add("cross_framing_protection.js",0).add("rte.js",1).add("tracekit/tracekit.js",1).add("error_report.js",1).add("messages.php?lang=en&amp;db=exam&amp;token=891a25bd2915539c6ae5849436f79e52",0).add("get_image.js.php?theme=pmahomme",0).add("config.js",1).add("doclinks.js",1).add("functions.js",1).add("navigation.js",1).add("indexes.js",1).add("common.js",1).add("page_settings.js",1).add("codemirror/lib/codemirror.js",0).add("codemirror/mode/sql/sql.js",0).add("codemirror/addon/runmode/runmode.js",0).add("codemirror/addon/hint/show-hint.js",0).add("codemirror/addon/hint/sql-hint.js",0).add("codemirror/addon/lint/lint.js",0).add("codemirror/addon/lint/sql-lint.js",0).add("console.js",1);
			 $(function() {AJAX.fireOnload("whitelist.php?lang=en&amp;db=exam&amp;token=891a25bd2915539c6ae5849436f79e52");AJAX.fireOnload("sprintf.js");AJAX.fireOnload("keyhandler.js");AJAX.fireOnload("menu-resizer.js");AJAX.fireOnload("rte.js");AJAX.fireOnload("tracekit/tracekit.js");AJAX.fireOnload("error_report.js");AJAX.fireOnload("config.js");AJAX.fireOnload("doclinks.js");AJAX.fireOnload("functions.js");AJAX.fireOnload("navigation.js");AJAX.fireOnload("indexes.js");AJAX.fireOnload("common.js");AJAX.fireOnload("page_settings.js");AJAX.fireOnload("console.js");});// ]]>
</script>
<noscript>
	<style>
		html
		{
			display:block;
		}
	</style>
</noscript>
</head>
<body>
	<div id="pma_navigation">
		<div id="pma_navigation_resizer"></div>
			<div id="pma_navigation_collapser"></div>
				<div id="pma_navigation_content">
					<div id="pma_navigation_header"><a class="hide navigation_url" href="navigation.php?ajax_request=1&amp;token=891a25bd2915539c6ae5849436f79e52"></a>
					  <!-- LOGO START -->
						<div id="pmalogo">
            				<a href="index.php?token=891a25bd2915539c6ae5849436f79e52">
        					<img src="./themes/pmahomme/img/logo_left.png" alt="phpMyAdmin" id="imgpmalogo" />            </a>
    					</div>
					  <!-- LOGO END -->
					  <!-- LINKS START -->
					  	<div id="navipanellinks">
								<a href="index.php?token=891a25bd2915539c6ae5849436f79e52" title="Home">
									<img src="themes/dot.gif" title="Home" alt="Home" class="icon ic_b_home" />
								</a>
								<a href="logout.php?token=891a25bd2915539c6ae5849436f79e52" class="disableAjax" title="Empty session data">
									<img src="themes/dot.gif" title="Empty session data" alt="Empty session data" class="icon ic_s_loggoff" />
								</a>
								<a href="./doc/html/index.html" target="documentation" title="phpMyAdmin documentation">
									<img src="themes/dot.gif" title="phpMyAdmin documentation" alt="phpMyAdmin documentation" class="icon ic_b_docs" />
								</a>
								<a href="./url.php?url=https%3A%2F%2Fdev.mysql.com%2Fdoc%2Frefman%2F5.7%2Fen%2Findex.html" target="mysql_doc" title="Documentation">
									<img src="themes/dot.gif" title="Documentation" alt="Documentation" class="icon ic_b_sqlhelp" />
								</a>
								<a href="#" id="pma_navigation_settings_icon" title="Navigation panel settings">
									<img src="themes/dot.gif" title="Navigation panel settings" alt="Navigation panel settings" class="icon ic_s_cog" />	
								</a>
								<a href="#" id="pma_navigation_reload" title="Reload navigation panel">
									<img src="themes/dot.gif" title="Reload navigation panel" alt="Reload navigation panel" class="icon ic_s_reload" />	
								</a>
						</div>
					 <!-- LINKS ENDS --><img src="./themes/pmahomme/img/ajax_clock_small.gif" title="Loading…" alt="Loading…" style="visibility: hidden; display:none" class="throbber" /></div><div id="pma_navigation_tree" class="list_container synced highlight"><div class="pma_quick_warp"><div class="drop_list"><span title="Recent tables" class="drop_button">Recent</span><ul id="pma_recent_list"><li class="warp_link">There are no recent tables.</li></ul></div><div class="drop_list"><span title="Favorite tables" class="drop_button">Favorites</span><ul id="pma_favorite_list"><li class="warp_link">There are no favorite tables.</li></ul></div><div class="clearfloat"></div></div><div class="clearfloat"></div><ul><!-- CONTROLS START --><li id="navigation_controls_outer"><div id="navigation_controls"><a href="#" id="pma_navigation_collapse" title="Collapse all"><img src="./themes/pmahomme/img/s_collapseall.png" title="Collapse all" alt="Collapse all" /></a><a href="#" id="pma_navigation_sync" title="Unlink from main panel"><img src="themes/dot.gif" title="Unlink from main panel" alt="Unlink from main panel" class="icon ic_s_link" /></a></div></li><!-- CONTROLS ENDS --></ul><div id='pma_navigation_tree_content'><ul><li class="first new_database italics"><div class='block'><i class='first'></i></div><div class='block '><a href='server_databases.php?server=1&amp;token=891a25bd2915539c6ae5849436f79e52'><img src="themes/dot.gif" title="" alt="" class="icon ic_b_newdb" /></a></div><a class='hover_show_full' href='server_databases.php?server=1&amp;token=891a25bd2915539c6ae5849436f79e52' title=''>New</a><div class="clearfloat"></div></li><li class="database"><div class='block'><i></i><b></b><a class="expander" href='#'><span class='hide aPath'>cm9vdA==.ZGJ0ZXN0</span><span class='hide vPath'>cm9vdA==.ZGJ0ZXN0</span><span class='hide pos'>0</span><img src="themes/dot.gif" title="Expand/Collapse" alt="Expand/Collapse" class="icon ic_b_plus" /></a></div><div class='block '><a href='db_operations.php?server=1&amp;db=dbtest&amp;token=891a25bd2915539c6ae5849436f79e52'><img src="themes/dot.gif" title="Database operations" alt="Database operations" class="icon ic_s_db" /></a></div><a class='hover_show_full' href='db_structure.php?server=1&amp;db=dbtest&amp;token=891a25bd2915539c6ae5849436f79e52' title='Structure'>dbtest</a><div class="clearfloat"></div></li><li class="database"><div class='block'><i></i><b></b><a class="expander" href='#'><span class='hide aPath'>cm9vdA==.ZXhhbQ==</span><span class='hide vPath'>cm9vdA==.ZXhhbQ==</span><span class='hide pos'>0</span><img src="themes/dot.gif" title="Expand/Collapse" alt="Expand/Collapse" class="icon ic_b_plus" /></a></div><div class='block '><a href='db_operations.php?server=1&amp;db=exam&amp;token=891a25bd2915539c6ae5849436f79e52'><img src="themes/dot.gif" title="Database operations" alt="Database operations" class="icon ic_s_db" /></a></div><a class='hover_show_full' href='db_structure.php?server=1&amp;db=exam&amp;token=891a25bd2915539c6ae5849436f79e52' title='Structure'>exam</a><div class="clearfloat"></div></li><li class="database"><div class='block'><i></i><b></b><a class="expander" href='#'><span class='hide aPath'>cm9vdA==.aW5mb3JtYXRpb25fc2NoZW1h</span><span class='hide vPath'>cm9vdA==.aW5mb3JtYXRpb25fc2NoZW1h</span><span class='hide pos'>0</span><img src="themes/dot.gif" title="Expand/Collapse" alt="Expand/Collapse" class="icon ic_b_plus" /></a></div><div class='block '><a href='db_operations.php?server=1&amp;db=information_schema&amp;token=891a25bd2915539c6ae5849436f79e52'><img src="themes/dot.gif" title="Database operations" alt="Database operations" class="icon ic_s_db" /></a></div><a class='hover_show_full' href='db_structure.php?server=1&amp;db=information_schema&amp;token=891a25bd2915539c6ae5849436f79e52' title='Structure'>information_schema</a><div class="clearfloat"></div></li><li class="database"><div class='block'><i></i><b></b><a class="expander" href='#'><span class='hide aPath'>cm9vdA==.bXlzcWw=</span><span class='hide vPath'>cm9vdA==.bXlzcWw=</span><span class='hide pos'>0</span><img src="themes/dot.gif" title="Expand/Collapse" alt="Expand/Collapse" class="icon ic_b_plus" /></a></div><div class='block '><a href='db_operations.php?server=1&amp;db=mysql&amp;token=891a25bd2915539c6ae5849436f79e52'><img src="themes/dot.gif" title="Database operations" alt="Database operations" class="icon ic_s_db" /></a></div><a class='hover_show_full' href='db_structure.php?server=1&amp;db=mysql&amp;token=891a25bd2915539c6ae5849436f79e52' title='Structure'>mysql</a><div class="clearfloat"></div></li><li class="database"><div class='block'><i></i><b></b><a class="expander" href='#'><span class='hide aPath'>cm9vdA==.cGVyZm9ybWFuY2Vfc2NoZW1h</span><span class='hide vPath'>cm9vdA==.cGVyZm9ybWFuY2Vfc2NoZW1h</span><span class='hide pos'>0</span><img src="themes/dot.gif" title="Expand/Collapse" alt="Expand/Collapse" class="icon ic_b_plus" /></a></div><div class='block '><a href='db_operations.php?server=1&amp;db=performance_schema&amp;token=891a25bd2915539c6ae5849436f79e52'><img src="themes/dot.gif" title="Database operations" alt="Database operations" class="icon ic_s_db" /></a></div><a class='hover_show_full' href='db_structure.php?server=1&amp;db=performance_schema&amp;token=891a25bd2915539c6ae5849436f79e52' title='Structure'>performance_schema</a><div class="clearfloat"></div></li><li class="database"><div class='block'><i></i><b></b><a class="expander" href='#'><span class='hide aPath'>cm9vdA==.cXVpel9uZXc=</span><span class='hide vPath'>cm9vdA==.cXVpel9uZXc=</span><span class='hide pos'>0</span><img src="themes/dot.gif" title="Expand/Collapse" alt="Expand/Collapse" class="icon ic_b_plus" /></a></div><div class='block '><a href='db_operations.php?server=1&amp;db=quiz_new&amp;token=891a25bd2915539c6ae5849436f79e52'><img src="themes/dot.gif" title="Database operations" alt="Database operations" class="icon ic_s_db" /></a></div><a class='hover_show_full' href='db_structure.php?server=1&amp;db=quiz_new&amp;token=891a25bd2915539c6ae5849436f79e52' title='Structure'>quiz_new</a><div class="clearfloat"></div></li><li class="last database"><div class='block'><i></i><a class="expander" href='#'><span class='hide aPath'>cm9vdA==.c3lz</span><span class='hide vPath'>cm9vdA==.c3lz</span><span class='hide pos'>0</span><img src="themes/dot.gif" title="Expand/Collapse" alt="Expand/Collapse" class="icon ic_b_plus" /></a></div><div class='block '><a href='db_operations.php?server=1&amp;db=sys&amp;token=891a25bd2915539c6ae5849436f79e52'><img src="themes/dot.gif" title="Database operations" alt="Database operations" class="icon ic_s_db" /></a></div><a class='hover_show_full' href='db_structure.php?server=1&amp;db=sys&amp;token=891a25bd2915539c6ae5849436f79e52' title='Structure'>sys</a><div class="clearfloat"></div></li></ul></div></div><div id="pma_navi_settings_container"><div id="pma_navigation_settings"><div class="page_settings"><form method="post" action="export.php?db=exam&amp;table=&amp;server=1&amp;target=&amp;token=891a25bd2915539c6ae5849436f79e52" class="config-form disableAjax"><input type="hidden" name="tab_hash" value="" /><input type="hidden" name="check_page_refresh"  id="check_page_refresh" value="" />
<input type="hidden" name="token" value="891a25bd2915539c6ae5849436f79e52" />
<input type="hidden" name="submit_save" value="Navi_panel" /><ul class="tabs"    >

                                    <li     >

            <a href="#Navi_panel"                                        >
            Navigation panel            </a>
        </li>
                                <li     >

            <a href="#Navi_tree"                                        >
            Navigation tree            </a>
        </li>
                                <li     >

            <a href="#Navi_databases"                                        >
            Databases            </a>
        </li>
                                <li     >

            <a href="#Navi_tables"                                        >
            Tables            </a>
        </li>
            </ul><br clear="right" /><div class="tabs_contents"><fieldset class="optbox" id="Navi_panel"><legend>Navigation panel</legend><p>Customize appearance of the navigation panel.</p><table width="100%" cellspacing="0"><tr><th><label for="ShowDatabasesNavigationAsTree">Show databases navigation as tree</label><span class="doc"><a href="./doc/html/config.html#cfg_ShowDatabasesNavigationAsTree" target="documentation"><img src="themes/dot.gif" title="Documentation" alt="Documentation" class="icon ic_b_help" /></a>
</span><small>In the navigation panel, replaces the database tree with a selector</small></th><td><span class="checkbox"><input type="checkbox" name="ShowDatabasesNavigationAsTree" id="ShowDatabasesNavigationAsTree" checked="checked" /></span><a class="restore-default" href="#ShowDatabasesNavigationAsTree" title="Restore default value" style="display:none"><img src="themes/dot.gif" title="" alt="" class="icon ic_s_reload" /></a></td></tr><tr><th><label for="NavigationLinkWithMainPanel">Link with main panel</label><span class="doc"><a href="./doc/html/config.html#cfg_NavigationLinkWithMainPanel" target="documentation"><img src="themes/dot.gif" title="Documentation" alt="Documentation" class="icon ic_b_help" /></a>
</span><small>Link with main panel by highlighting the current database or table.</small></th><td><span class="checkbox"><input type="checkbox" name="NavigationLinkWithMainPanel" id="NavigationLinkWithMainPanel" checked="checked" /></span><a class="restore-default" href="#NavigationLinkWithMainPanel" title="Restore default value" style="display:none"><img src="themes/dot.gif" title="" alt="" class="icon ic_s_reload" /></a></td></tr><tr><th><label for="NavigationDisplayLogo">Display logo</label><span class="doc"><a href="./doc/html/config.html#cfg_NavigationDisplayLogo" target="documentation"><img src="themes/dot.gif" title="Documentation" alt="Documentation" class="icon ic_b_help" /></a>
</span><small>Show logo in navigation panel.</small></th><td><span class="checkbox"><input type="checkbox" name="NavigationDisplayLogo" id="NavigationDisplayLogo" checked="checked" /></span><a class="restore-default" href="#NavigationDisplayLogo" title="Restore default value" style="display:none"><img src="themes/dot.gif" title="" alt="" class="icon ic_s_reload" /></a></td></tr><tr><th><label for="NavigationLogoLink">Logo link URL</label><span class="doc"><a href="./doc/html/config.html#cfg_NavigationLogoLink" target="documentation"><img src="themes/dot.gif" title="Documentation" alt="Documentation" class="icon ic_b_help" /></a>
</span><small>URL where logo in the navigation panel will point to.</small></th><td><input type="text" size="40" name="NavigationLogoLink" id="NavigationLogoLink" value="index.php" /><a class="restore-default" href="#NavigationLogoLink" title="Restore default value" style="display:none"><img src="themes/dot.gif" title="" alt="" class="icon ic_s_reload" /></a></td></tr><tr><th><label for="NavigationLogoLinkWindow">Logo link target</label><span class="doc"><a href="./doc/html/config.html#cfg_NavigationLogoLinkWindow" target="documentation"><img src="themes/dot.gif" title="Documentation" alt="Documentation" class="icon ic_b_help" /></a>
</span><small>Open the linked page in the main window (<kbd>main</kbd>) or in a new one (<kbd>new</kbd>).</small></th><td><select name="NavigationLogoLinkWindow" id="NavigationLogoLinkWindow"><option value="main" selected="selected">main</option><option value="new">new</option></select><a class="restore-default" href="#NavigationLogoLinkWindow" title="Restore default value" style="display:none"><img src="themes/dot.gif" title="" alt="" class="icon ic_s_reload" /></a></td></tr><tr><th><label for="NavigationTreePointerEnable">Enable highlighting</label><span class="doc"><a href="./doc/html/config.html#cfg_NavigationTreePointerEnable" target="documentation"><img src="themes/dot.gif" title="Documentation" alt="Documentation" class="icon ic_b_help" /></a>
</span><small>Highlight server under the mouse cursor.</small></th><td><span class="checkbox"><input type="checkbox" name="NavigationTreePointerEnable" id="NavigationTreePointerEnable" checked="checked" /></span><a class="restore-default" href="#NavigationTreePointerEnable" title="Restore default value" style="display:none"><img src="themes/dot.gif" title="" alt="" class="icon ic_s_reload" /></a></td></tr><tr><th><label for="FirstLevelNavigationItems">Maximum items on first level</label><span class="doc"><a href="./doc/html/config.html#cfg_FirstLevelNavigationItems" target="documentation"><img src="themes/dot.gif" title="Documentation" alt="Documentation" class="icon ic_b_help" /></a>
</span><small>The number of items that can be displayed on each page on the first level of the navigation tree.</small></th><td><input type="number" name="FirstLevelNavigationItems" id="FirstLevelNavigationItems" value="100" /><a class="restore-default" href="#FirstLevelNavigationItems" title="Restore default value" style="display:none"><img src="themes/dot.gif" title="" alt="" class="icon ic_s_reload" /></a></td></tr><tr><th><label for="NavigationTreeDisplayItemFilterMinimum">Minimum number of items to display the filter box</label><span class="doc"><a href="./doc/html/config.html#cfg_NavigationTreeDisplayItemFilterMinimum" target="documentation"><img src="themes/dot.gif" title="Documentation" alt="Documentation" class="icon ic_b_help" /></a>
</span><small>Defines the minimum number of items (tables, views, routines and events) to display a filter box.</small></th><td><input type="number" name="NavigationTreeDisplayItemFilterMinimum" id="NavigationTreeDisplayItemFilterMinimum" value="30" /><a class="restore-default" href="#NavigationTreeDisplayItemFilterMinimum" title="Restore default value" style="display:none"><img src="themes/dot.gif" title="" alt="" class="icon ic_s_reload" /></a></td></tr><tr><th><label for="NumRecentTables">Recently used tables</label><span class="doc"><a href="./doc/html/config.html#cfg_NumRecentTables" target="documentation"><img src="themes/dot.gif" title="Documentation" alt="Documentation" class="icon ic_b_help" /></a>
</span><small>Maximum number of recently used tables; set 0 to disable.</small></th><td><input type="number" name="NumRecentTables" id="NumRecentTables" value="10" /><a class="restore-default" href="#NumRecentTables" title="Restore default value" style="display:none"><img src="themes/dot.gif" title="" alt="" class="icon ic_s_reload" /></a></td></tr><tr><th><label for="NumFavoriteTables">Favorite tables</label><span class="doc"><a href="./doc/html/config.html#cfg_NumFavoriteTables" target="documentation"><img src="themes/dot.gif" title="Documentation" alt="Documentation" class="icon ic_b_help" /></a>
</span><small>Maximum number of favorite tables; set 0 to disable.</small></th><td><input type="number" name="NumFavoriteTables" id="NumFavoriteTables" value="10" /><a class="restore-default" href="#NumFavoriteTables" title="Restore default value" style="display:none"><img src="themes/dot.gif" title="" alt="" class="icon ic_s_reload" /></a></td></tr></table></fieldset><fieldset class="optbox" id="Navi_tree"><legend>Navigation tree</legend><p>Customize the navigation tree.</p><table width="100%" cellspacing="0"><tr><th><label for="MaxNavigationItems">Maximum items in branch</label><span class="doc"><a href="./doc/html/config.html#cfg_MaxNavigationItems" target="documentation"><img src="themes/dot.gif" title="Documentation" alt="Documentation" class="icon ic_b_help" /></a>
</span><small>The number of items that can be displayed on each page of the navigation tree.</small></th><td><input type="number" name="MaxNavigationItems" id="MaxNavigationItems" value="50" /><a class="restore-default" href="#MaxNavigationItems" title="Restore default value" style="display:none"><img src="themes/dot.gif" title="" alt="" class="icon ic_s_reload" /></a></td></tr><tr><th><label for="NavigationTreeEnableGrouping">Group items in the tree</label><span class="doc"><a href="./doc/html/config.html#cfg_NavigationTreeEnableGrouping" target="documentation"><img src="themes/dot.gif" title="Documentation" alt="Documentation" class="icon ic_b_help" /></a>
</span><small>Group items in the navigation tree (determined by the separator defined in the Databases and Tables tabs above).</small></th><td><span class="checkbox"><input type="checkbox" name="NavigationTreeEnableGrouping" id="NavigationTreeEnableGrouping" checked="checked" /></span><a class="restore-default" href="#NavigationTreeEnableGrouping" title="Restore default value" style="display:none"><img src="themes/dot.gif" title="" alt="" class="icon ic_s_reload" /></a></td></tr><tr><th><label for="NavigationTreeEnableExpansion">Enable navigation tree expansion</label><span class="doc"><a href="./doc/html/config.html#cfg_NavigationTreeEnableExpansion" target="documentation"><img src="themes/dot.gif" title="Documentation" alt="Documentation" class="icon ic_b_help" /></a>
</span><small>Whether to offer the possibility of tree expansion in the navigation panel.</small></th><td><span class="checkbox"><input type="checkbox" name="NavigationTreeEnableExpansion" id="NavigationTreeEnableExpansion" checked="checked" /></span><a class="restore-default" href="#NavigationTreeEnableExpansion" title="Restore default value" style="display:none"><img src="themes/dot.gif" title="" alt="" class="icon ic_s_reload" /></a></td></tr><tr><th><label for="NavigationTreeShowTables">Show tables in tree</label><span class="doc"><a href="./doc/html/config.html#cfg_NavigationTreeShowTables" target="documentation"><img src="themes/dot.gif" title="Documentation" alt="Documentation" class="icon ic_b_help" /></a>
</span><small>Whether to show tables under database in the navigation tree</small></th><td><span class="checkbox"><input type="checkbox" name="NavigationTreeShowTables" id="NavigationTreeShowTables" checked="checked" /></span><a class="restore-default" href="#NavigationTreeShowTables" title="Restore default value" style="display:none"><img src="themes/dot.gif" title="" alt="" class="icon ic_s_reload" /></a></td></tr><tr><th><label for="NavigationTreeShowViews">Show views in tree</label><span class="doc"><a href="./doc/html/config.html#cfg_NavigationTreeShowViews" target="documentation"><img src="themes/dot.gif" title="Documentation" alt="Documentation" class="icon ic_b_help" /></a>
</span><small>Whether to show views under database in the navigation tree</small></th><td><span class="checkbox"><input type="checkbox" name="NavigationTreeShowViews" id="NavigationTreeShowViews" checked="checked" /></span><a class="restore-default" href="#NavigationTreeShowViews" title="Restore default value" style="display:none"><img src="themes/dot.gif" title="" alt="" class="icon ic_s_reload" /></a></td></tr><tr><th><label for="NavigationTreeShowFunctions">Show functions in tree</label><span class="doc"><a href="./doc/html/config.html#cfg_NavigationTreeShowFunctions" target="documentation"><img src="themes/dot.gif" title="Documentation" alt="Documentation" class="icon ic_b_help" /></a>
</span><small>Whether to show functions under database in the navigation tree</small></th><td><span class="checkbox"><input type="checkbox" name="NavigationTreeShowFunctions" id="NavigationTreeShowFunctions" checked="checked" /></span><a class="restore-default" href="#NavigationTreeShowFunctions" title="Restore default value" style="display:none"><img src="themes/dot.gif" title="" alt="" class="icon ic_s_reload" /></a></td></tr><tr><th><label for="NavigationTreeShowProcedures">Show procedures in tree</label><span class="doc"><a href="./doc/html/config.html#cfg_NavigationTreeShowProcedures" target="documentation"><img src="themes/dot.gif" title="Documentation" alt="Documentation" class="icon ic_b_help" /></a>
</span><small>Whether to show procedures under database in the navigation tree</small></th><td><span class="checkbox"><input type="checkbox" name="NavigationTreeShowProcedures" id="NavigationTreeShowProcedures" checked="checked" /></span><a class="restore-default" href="#NavigationTreeShowProcedures" title="Restore default value" style="display:none"><img src="themes/dot.gif" title="" alt="" class="icon ic_s_reload" /></a></td></tr><tr><th><label for="NavigationTreeShowEvents">Show events in tree</label><span class="doc"><a href="./doc/html/config.html#cfg_NavigationTreeShowEvents" target="documentation"><img src="themes/dot.gif" title="Documentation" alt="Documentation" class="icon ic_b_help" /></a>
</span><small>Whether to show events under database in the navigation tree</small></th><td><span class="checkbox"><input type="checkbox" name="NavigationTreeShowEvents" id="NavigationTreeShowEvents" checked="checked" /></span><a class="restore-default" href="#NavigationTreeShowEvents" title="Restore default value" style="display:none"><img src="themes/dot.gif" title="" alt="" class="icon ic_s_reload" /></a></td></tr></table></fieldset><fieldset class="optbox" id="Navi_databases"><legend>Databases</legend><p>Databases display options.</p><table width="100%" cellspacing="0"><tr><th><label for="NavigationTreeDisplayDbFilterMinimum">Minimum number of databases to display the database filter box</label><span class="doc"><a href="./doc/html/config.html#cfg_NavigationTreeDisplayDbFilterMinimum" target="documentation"><img src="themes/dot.gif" title="Documentation" alt="Documentation" class="icon ic_b_help" /></a>
</span></th><td><input type="number" name="NavigationTreeDisplayDbFilterMinimum" id="NavigationTreeDisplayDbFilterMinimum" value="30" /><a class="restore-default" href="#NavigationTreeDisplayDbFilterMinimum" title="Restore default value" style="display:none"><img src="themes/dot.gif" title="" alt="" class="icon ic_s_reload" /></a></td></tr><tr><th><label for="NavigationTreeDbSeparator">Database tree separator</label><span class="doc"><a href="./doc/html/config.html#cfg_NavigationTreeDbSeparator" target="documentation"><img src="themes/dot.gif" title="Documentation" alt="Documentation" class="icon ic_b_help" /></a>
</span><small>String that separates databases into different tree levels.</small></th><td><input type="text" size="25" name="NavigationTreeDbSeparator" id="NavigationTreeDbSeparator" value="_" /><a class="restore-default" href="#NavigationTreeDbSeparator" title="Restore default value" style="display:none"><img src="themes/dot.gif" title="" alt="" class="icon ic_s_reload" /></a></td></tr></table></fieldset><fieldset class="optbox" id="Navi_tables"><legend>Tables</legend><p>Tables display options.</p><table width="100%" cellspacing="0"><tr><th><label for="NavigationTreeDefaultTabTable">Target for quick access icon</label><span class="doc"><a href="./doc/html/config.html#cfg_NavigationTreeDefaultTabTable" target="documentation"><img src="themes/dot.gif" title="Documentation" alt="Documentation" class="icon ic_b_help" /></a>
</span></th><td><select name="NavigationTreeDefaultTabTable" id="NavigationTreeDefaultTabTable"><option value="structure" selected="selected">Structure</option><option value="sql">SQL</option><option value="search">Search</option><option value="insert">Insert</option><option value="browse">Browse</option></select><a class="restore-default" href="#NavigationTreeDefaultTabTable" title="Restore default value" style="display:none"><img src="themes/dot.gif" title="" alt="" class="icon ic_s_reload" /></a></td></tr><tr><th><label for="NavigationTreeDefaultTabTable2">Target for second quick access icon</label><span class="doc"><a href="./doc/html/config.html#cfg_NavigationTreeDefaultTabTable2" target="documentation"><img src="themes/dot.gif" title="Documentation" alt="Documentation" class="icon ic_b_help" /></a>
</span></th><td><select name="NavigationTreeDefaultTabTable2" id="NavigationTreeDefaultTabTable2"><option value="" selected="selected"></option><option value="structure">Structure</option><option value="sql">SQL</option><option value="search">Search</option><option value="insert">Insert</option><option value="browse">Browse</option></select><a class="restore-default" href="#NavigationTreeDefaultTabTable2" title="Restore default value" style="display:none"><img src="themes/dot.gif" title="" alt="" class="icon ic_s_reload" /></a></td></tr><tr><th><label for="NavigationTreeTableSeparator">Table tree separator</label><span class="doc"><a href="./doc/html/config.html#cfg_NavigationTreeTableSeparator" target="documentation"><img src="themes/dot.gif" title="Documentation" alt="Documentation" class="icon ic_b_help" /></a>
</span><small>String that separates tables into different tree levels.</small></th><td><input type="text" size="25" name="NavigationTreeTableSeparator" id="NavigationTreeTableSeparator" value="__" /><a class="restore-default" href="#NavigationTreeTableSeparator" title="Restore default value" style="display:none"><img src="themes/dot.gif" title="" alt="" class="icon ic_s_reload" /></a></td></tr><tr><th><label for="NavigationTreeTableLevel">Maximum table tree depth</label><span class="doc"><a href="./doc/html/config.html#cfg_NavigationTreeTableLevel" target="documentation"><img src="themes/dot.gif" title="Documentation" alt="Documentation" class="icon ic_b_help" /></a>
</span></th><td><input type="number" name="NavigationTreeTableLevel" id="NavigationTreeTableLevel" value="1" /><a class="restore-default" href="#NavigationTreeTableLevel" title="Restore default value" style="display:none"><img src="themes/dot.gif" title="" alt="" class="icon ic_s_reload" /></a></td></tr></table></fieldset></div>
</form>
<script type="text/javascript">
if (typeof configInlineParams === "undefined" || !Array.isArray(configInlineParams)) configInlineParams = [];
configInlineParams.push(function() {
validateField('FirstLevelNavigationItems', 'PMA_validatePositiveNumber', true);
validateField('NumRecentTables', 'PMA_validateNonNegativeNumber', true);
validateField('NumFavoriteTables', 'PMA_validateNonNegativeNumber', true);
validateField('MaxNavigationItems', 'PMA_validatePositiveNumber', true);
validateField('NavigationTreeTableLevel', 'PMA_validatePositiveNumber', true);
$.extend(PMA_messages, {
	'error_nan_p': 'Not a positive number!',
	'error_nan_nneg': 'Not a non-negative number!',
	'error_incorrect_port': 'Not a valid port number!',
	'error_invalid_value': 'Incorrect value!',
	'error_value_lte': 'Value must be equal or lower than %s!'});
$.extend(defaultValues, {
	'ShowDatabasesNavigationAsTree': true,
	'NavigationLinkWithMainPanel': true,
	'NavigationDisplayLogo': true,
	'NavigationLogoLink': 'index.php',
	'NavigationLogoLinkWindow': ['main'],
	'NavigationTreePointerEnable': true,
	'FirstLevelNavigationItems': '100',
	'NavigationTreeDisplayItemFilterMinimum': '30',
	'NumRecentTables': '10',
	'NumFavoriteTables': '10',
	'MaxNavigationItems': '50',
	'NavigationTreeEnableGrouping': true,
	'NavigationTreeEnableExpansion': true,
	'NavigationTreeShowTables': true,
	'NavigationTreeShowViews': true,
	'NavigationTreeShowFunctions': true,
	'NavigationTreeShowProcedures': true,
	'NavigationTreeShowEvents': true,
	'NavigationTreeDisplayDbFilterMinimum': '30',
	'NavigationTreeDbSeparator': '_',
	'NavigationTreeDefaultTabTable': ['structure'],
	'NavigationTreeDefaultTabTable2': [''],
	'NavigationTreeTableSeparator': '__',
	'NavigationTreeTableLevel': '1'});
});
if (typeof configScriptLoaded !== "undefined" && configInlineParams) loadInlineConfig();
</script></div></div></div></div><div class="pma_drop_handler">Drop files here</div>
    <div class="pma_sql_import_status">
     <h2>SQL upload ( <span class="pma_import_count">0</span> ) 
      <span class="close">x</span><span class="minimize">-</span>
     </h2>
     <div>
     </div>
    </div>
   </div>
   <div id="prefs_autoload" class="notice print_ignore" style="display:none">
    <form action="prefs_manage.php" method="post" class="disableAjax">
        <input type="hidden" name="token" value="891a25bd2915539c6ae5849436f79e52" />        
		<input type="hidden" name="json" value="" />
        <input type="hidden" name="submit_import" value="1" />
        <input type="hidden" name="return_url" value="export.php?db=exam&amp;token=891a25bd2915539c6ae5849436f79e52&amp;export_type=database&amp;export_method=quick&amp;template_id=&amp;quick_or_custom=quick&amp;what=sql&amp;structure_or_data_forced=0&amp;table_select%5B0%5D=users&amp;table_structure%5B0%5D=users&amp;table_data%5B0%5D=users&amp;output_format=sendit&amp;filename_template=%40DATABASE%40&amp;remember_template=on&amp;charset=utf-8&amp;compression=none&amp;maxsize=&amp;codegen_structure_or_data=data&amp;codegen_format=0&amp;csv_separator=%2C&amp;csv_enclosed=%22&amp;csv_escaped=%22&amp;csv_terminated=AUTO&amp;csv_null=NULL&amp;csv_structure_or_data=data&amp;excel_null=NULL&amp;excel_edition=win&amp;excel_structure_or_data=data&amp;htmlword_structure_or_data=structure_and_data&amp;htmlword_null=NULL&amp;json_structure_or_data=data&amp;latex_caption=something&amp;latex_structure_or_data=structure_and_data&amp;latex_structure_caption=Structure+of+table+%40TABLE%40&amp;latex_structure_continued_caption=Structure+of+table+%40TABLE%40+%28continued%29&amp;latex_structure_label=tab%3A%40TABLE%40-structure&amp;latex_comments=something&amp;latex_columns=something&amp;latex_data_caption=Content+of+table+%40TABLE%40&amp;latex_data_continued_caption=Content+of+table+%40TABLE%40+%28continued%29&amp;latex_data_label=tab%3A%40TABLE%40-data&amp;latex_null=%5Ctextit%7BNULL%7D&amp;mediawiki_structure_or_data=structure_and_data&amp;mediawiki_caption=something&amp;mediawiki_headers=something&amp;ods_null=NULL&amp;ods_structure_or_data=data&amp;odt_structure_or_data=structure_and_data&amp;odt_comments=something&amp;odt_columns=something&amp;odt_null=NULL&amp;pdf_report_title=&amp;pdf_structure_or_data=structure_and_data&amp;phparray_structure_or_data=data&amp;sql_include_comments=something&amp;sql_header_comment=&amp;sql_compatibility=NONE&amp;sql_structure_or_data=structure_and_data&amp;sql_create_table=something&amp;sql_auto_increment=something&amp;sql_create_view=something&amp;sql_procedure_function=something&amp;sql_create_trigger=something&amp;sql_backquotes=something&amp;sql_type=INSERT&amp;sql_insert_syntax=both&amp;sql_max_query_size=50000&amp;sql_hex_for_binary=something&amp;sql_utc_time=something&amp;texytext_structure_or_data=structure_and_data&amp;texytext_null=NULL&amp;xml_structure_or_data=data&amp;xml_export_events=something&amp;xml_export_functions=something&amp;xml_export_procedures=something&amp;xml_export_tables=something&amp;xml_export_triggers=something&amp;xml_export_views=something&amp;xml_export_contents=something&amp;yaml_structure_or_data=data" />
        Your browser has phpMyAdmin configuration for this domain. Would you like to import it for current session?        <br />
        <a href="#yes">Yes</a>
        / <a href="#no">No</a>
    </form>
</div><noscript><div class="error"><img src="themes/dot.gif" title="" alt="" class="icon ic_s_error" /> Javascript must be enabled past this point!</div></noscript><div id='floating_menubar'></div><div id='serverinfo'><img src="themes/dot.gif" title="" alt="" class="icon ic_s_host item" /><a href="index.php?token=891a25bd2915539c6ae5849436f79e52" class="item">Server: Local Databases</a><span class='separator item'>&nbsp;»</span><img src="themes/dot.gif" title="" alt="" class="icon ic_s_db item" /><a href="db_structure.php?db=exam&amp;token=891a25bd2915539c6ae5849436f79e52" class="item">Database: exam</a><div class="clearfloat"></div></div><div id="topmenucontainer" class="menucontainer"><ul id="topmenu"  class="resizable-menu"><li     >

            <a href="db_structure.php?db=exam&amp;token=891a25bd2915539c6ae5849436f79e52"                                 class="tab"        >
            <img src="themes/dot.gif" title="Structure" alt="Structure" class="icon ic_b_props" />&nbsp;Structure            </a>
        </li>
<li     >

            <a href="db_sql.php?db=exam&amp;token=891a25bd2915539c6ae5849436f79e52"                                 class="tab"        >
            <img src="themes/dot.gif" title="SQL" alt="SQL" class="icon ic_b_sql" />&nbsp;SQL            </a>
        </li>
<li     >

            <a href="db_search.php?db=exam&amp;token=891a25bd2915539c6ae5849436f79e52"                                 class="tab"        >
            <img src="themes/dot.gif" title="Search" alt="Search" class="icon ic_b_search" />&nbsp;Search            </a>
        </li>
<li     >

            <a href="db_qbe.php?db=exam&amp;token=891a25bd2915539c6ae5849436f79e52"                                 class="tab"        >
            <img src="themes/dot.gif" title="Query" alt="Query" class="icon ic_s_db" />&nbsp;Query            </a>
        </li>
<li     >

            <a href="db_export.php?db=exam&amp;token=891a25bd2915539c6ae5849436f79e52"                                 class="tab"        >
            <img src="themes/dot.gif" title="Export" alt="Export" class="icon ic_b_export" />&nbsp;Export            </a>
        </li>
<li     >

            <a href="db_import.php?db=exam&amp;token=891a25bd2915539c6ae5849436f79e52"                                 class="tab"        >
            <img src="themes/dot.gif" title="Import" alt="Import" class="icon ic_b_import" />&nbsp;Import            </a>
        </li>
<li     >

            <a href="db_operations.php?db=exam&amp;token=891a25bd2915539c6ae5849436f79e52"                                 class="tab"        >
            <img src="themes/dot.gif" title="Operations" alt="Operations" class="icon ic_b_tblops" />&nbsp;Operations            </a>
        </li>
<li     >

            <a href="server_privileges.php?db=exam&amp;token=891a25bd2915539c6ae5849436f79e52&amp;checkprivsdb=exam&amp;viewing_mode=db"                                 class="tab"        >
            <img src="themes/dot.gif" title="Privileges" alt="Privileges" class="icon ic_s_rights" />&nbsp;Privileges            </a>
        </li>
<li     >

            <a href="db_routines.php?db=exam&amp;token=891a25bd2915539c6ae5849436f79e52"                                 class="tab"        >
            <img src="themes/dot.gif" title="Routines" alt="Routines" class="icon ic_b_routines" />&nbsp;Routines            </a>
        </li>
<li     >

            <a href="db_events.php?db=exam&amp;token=891a25bd2915539c6ae5849436f79e52"                                 class="tab"        >
            <img src="themes/dot.gif" title="Events" alt="Events" class="icon ic_b_events" />&nbsp;Events            </a>
        </li>
<li     >

            <a href="db_triggers.php?db=exam&amp;token=891a25bd2915539c6ae5849436f79e52"                                 class="tab"        >
            <img src="themes/dot.gif" title="Triggers" alt="Triggers" class="icon ic_b_triggers" />&nbsp;Triggers            </a>
        </li>
<li     >

            <a href="db_designer.php?db=exam&amp;token=891a25bd2915539c6ae5849436f79e52"                         id="designer_tab"         class="tab"        >
            <img src="themes/dot.gif" title="Designer" alt="Designer" class="icon ic_b_relations" />&nbsp;Designer            </a>
        </li>
<div class="clearfloat"></div></ul>
</div>
<span id="page_nav_icons"><span id="lock_page_icon"></span><span id="page_settings_icon"><img src="themes/dot.gif" title="Page-related settings" alt="Page-related settings" class="icon ic_s_cog" /></span><a id="goto_pagetop" href="#"><img src="themes/dot.gif" title="Click on the bar to scroll to top of page" alt="Click on the bar to scroll to top of page" class="icon ic_s_top" /></a></span><div id="pma_console_container"><div id="pma_console"><div class="toolbar collapsed"><div class="switch_button console_switch"><img src="themes/dot.gif" title="SQL Query Console" alt="SQL Query Console" class="icon ic_console" /><span>Console</span></div><div class="button clear"><span>Clear</span></div><div class="button history"><span>History</span></div><div class="button options"><span>Options</span></div><div class="button debug hide"><span>Debug SQL</span></div></div><div class="content"><div class="console_message_container"><div class="message welcome"><span><span id="instructions-0">Press Ctrl+Enter to execute query</span><span class="hide" id="instructions-1">Press Enter to execute query</span></span></div></div><div class="query_input"><span class="console_query_input"></span></div></div><div class="mid_layer"></div><div class="card" id="debug_console"><div class="toolbar"><div class="button order order_asc"><span>ascending</span></div><div class="button order order_desc"><span>descending</span></div><div class="text"><span>Order:</span></div><div class="switch_button"><span>Debug SQL</span></div><div class="button order_by sort_count"><span>Count</span></div><div class="button order_by sort_exec"><span>Execution order</span></div><div class="button order_by sort_time"><span>Time taken</span></div><div class="text"><span>Order by:</span></div><div class="button group_queries"><span>Group queries</span></div><div class="button ungroup_queries"><span>Ungroup queries</span></div></div><div class="content debug"><div class="message welcome"></div><div class="debugLog"></div></div><div class="templates"><div class="debug_query action_content"><span class="action collapse">Collapse</span> <span class="action expand">Expand</span> <span class="action dbg_show_trace">Show trace</span> <span class="action dbg_hide_trace">Hide trace</span> <span class="text count hide">Count: <span></span></span><span class="text time">Time taken: <span></span></span></div></div></div><div class="card" id="pma_console_options"><div class="toolbar"><div class="switch_button"><span>Options</span></div><div class="button default"><span>Set default</span></div></div><div class="content"><label><input type="checkbox" name="always_expand">Always expand query messages</label><br><label><input type="checkbox" name="start_history">Show query history at start</label><br><label><input type="checkbox" name="current_query">Show current browsing query</label><br><label><input type="checkbox" name="enter_executes">Execute queries on Enter and insert new line with Shift + Enter. To make this permanent, view settings.</label><br><label><input type="checkbox" name="dark_theme">Switch to dark theme</label><br></div></div><div class="templates"><div class="query_actions"><span class="action collapse">Collapse</span> <span class="action expand">Expand</span> <span class="action requery">Requery</span> <span class="action edit">Edit</span> <span class="action explain">Explain</span> <span class="action profiling">Profiling</span> <span class="text failed">Query failed</span> <span class="text targetdb">Database: <span></span></span> <span class="text query_time">Queried time: <span></span></span> </div></div></div></div><div id="page_content"><!DOCTYPE HTML>
<html lang="en" dir="ltr">
<head>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <title>phpMyAdmin</title>
    <meta charset="utf-8" />
    <style type="text/css">
    <!--
    html {
        padding: 0;
        margin: 0;
    }
    body  {
        font-family: sans-serif;
        font-size: small;
        color: #000000;
        background-color: #F5F5F5;
        margin: 1em;
    }
    h1 {
        margin: 0;
        padding: 0.3em;
        font-size: 1.4em;
        font-weight: bold;
        color: #ffffff;
        background-color: #ff0000;
    }
    p {
        margin: 0;
        padding: 0.5em;
        border: 0.1em solid red;
        background-color: #ffeeee;
    }
    //-->
    </style>
</head>
<body>
<h1>phpMyAdmin - Error</h1>
<p>export.php: Missing parameter: what<a href="./doc/html/faq.html#faqmissingparameters" target="documentation"><img src="themes/dot.gif" title="Documentation" alt="Documentation" class="icon ic_b_help" /></a><br />export.php: Missing parameter: export_type<a href="./doc/html/faq.html#faqmissingparameters" target="documentation"><img src="themes/dot.gif" title="Documentation" alt="Documentation" class="icon ic_b_help" /></a><br /></p>
</body>
</html>
</div><div id="selflink" class="print_ignore"><a href="export.php?db=exam&amp;table=&amp;server=1&amp;target=&amp;token=891a25bd2915539c6ae5849436f79e52" title="Open new phpMyAdmin window" target="_blank"><img src="themes/dot.gif" title="Open new phpMyAdmin window" alt="Open new phpMyAdmin window" class="icon ic_window-new" /></a></div><div class="clearfloat" id="pma_errors"></div><script data-cfasync="false" type="text/javascript">// <![CDATA[
var debugSQLInfo = 'null';
AJAX.scriptHandler;
$(function() {});
// ]]></script></body></html>