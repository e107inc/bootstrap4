<?php
	/**
	 * e107 website system
	 *
	 * Copyright (C) 2008-2017 e107 Inc (e107.org)
	 * Released under the terms and conditions of the
	 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
	 *
	 */



/**
 * {XURL_ICONS} template
 */
 $SOCIAL_XURL_TEMPLATE['default']['start'] = '<p class="xurl-social-icons hidden-print">';
 $SOCIAL_XURL_TEMPLATE['default']['item'] = '<a class="m-1 {XURL_ICONS_ID}" target="_blank" href="{XURL_ICONS_HREF}" data-tooltip-position="top" class="e-tip social-icon social-{XURL_ICONS_ID}" 
 title="{XURL_ICONS_TITLE}"><span class="e-social-{XURL_ICONS_ID} {XURL_ICONS_CLASS}"></span></a>';
 $SOCIAL_XURL_TEMPLATE['default']['end'] = '</p>';
 

 $SOCIAL_XURL_TEMPLATE['buttons']['start']  = '<div class="d-flex justify-content-center"><ul class="list-inline xurl-social-icons">';
 $SOCIAL_XURL_TEMPLATE['buttons']['item']   = '<a class="btn btn-primary {XURL_ICONS_ID} m-1"  title="{XURL_ICONS_TITLE}"><span class="e-social-{XURL_ICONS_ID} {XURL_ICONS_CLASS}"></span></a> ';
 $SOCIAL_XURL_TEMPLATE['buttons']['end']     = '</ul></div>';
 
 
 $SOCIAL_XURL_TEMPLATE['nav']['start']  = '<ul class="navbar-nav ml-auto nav-flex-icons xurl-social-icons">';
 $SOCIAL_XURL_TEMPLATE['nav']['item']   = '<li class="nav-item"><a class="nav-link {XURL_ICONS_ID}"  title="{XURL_ICONS_TITLE}"><span class="e-social-{XURL_ICONS_ID} {XURL_ICONS_CLASS}"></span></a> ';
 $SOCIAL_XURL_TEMPLATE['nav']['end']     = '</ul>'; 
 
