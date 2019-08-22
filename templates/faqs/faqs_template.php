<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2019 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 */



/*
 * $FAQS_TEMPLATE['start']	= "
<div class='faq-start'>{FAQ_SUBMIT_QUESTION: expand=1}
{FAQ_SUBMIT_QUESTION_LIST}
";

$FAQS_TEMPLATE['end']	= "
	<div class='faq-submit-question'></div>
</div>
";*/

$FAQS_TEMPLATE = array();


$FAQS_TEMPLATE['all']['start'] = '
<div class="panel-group" id="faq-accordion" role="tablist" aria-multiselectable="true">
';

/*
$FAQS_TEMPLATE['all']['item'] = "
		<li class='faq-listall'>{FAQ_QUESTION=expand|tags=1|share=1}</li>
";*/


$FAQS_TEMPLATE['all']['item'] = '<div class="card">
            <div class="card-header faq_answer" role="tab" id="heading-{FAQ_COUNTER}">
                <h4 class="card-title"> 
                    <a class="collapsed question" role="button" data-toggle="collapse" data-parent="#faq-accordion" href="#collaps-{FAQ_COUNTER}" aria-expanded="false" aria-controls="collaps-{FAQ_COUNTER}">
                     <span style="display:inline-block;width:90%">{FAQ_COUNTER}. {FAQ_QUESTION}</span> <i class="float-right fa fa-plus"></i></a>
                </h4>
            </div>
            <div id="collaps-{FAQ_COUNTER}" class="panel-collapse {FAQ_HIDE}" role="tabpanel" aria-labelledby="heading-{FAQ_COUNTER}">
                <div class="card-body ">
                   {FAQ_ANSWER}
                  
                  <div class="faq-extras">
                  <div class="faq-share">{FAQ_SHARE}</div>
                  </div>
		
                  </div>
            </div>
        </div>';


$FAQS_TEMPLATE['all']['end'] = "
	</div><!-- faq-accordion -->
";

// $FAQS_TEMPLATE['caption'] = "{FAQ_CAPTION} <small>{FAQ_COUNT}</small>";


