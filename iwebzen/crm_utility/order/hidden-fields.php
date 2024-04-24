

<!-- Lead Area -->
<input type="hidden" name="lead_type" value="<?php echo (isset($category)) ? $category : 'general'	?>" />

<!-- Lead Source -->
<input type="hidden" name="lead_source" value="<?php echo $lead_source ?>" />
<input type="hidden" name="lead_source_category" alue="<?php echo $lead_source_category ?>" />
<input type="hidden" name="lead_source_offer" value="<?php echo $lead_source_offer ?>" />
<input type="hidden" name="lead_source_country" value="<?php echo $lead_source_country ?>" />

<!-- UTM Source -->
<input type="hidden" name="utm_source" value="<?php echo $utm_source ?>" />
<input type="hidden" name="utm_medium" value="<?php echo $utm_medium ?>" />
<input type="hidden" name="utm_term" value="<?php echo (isset($utm_terreq_qoutem)) ? $utm_terreq_qoutem : '' ?>" />
<input type="hidden" name="utm_content" value="<?php echo $utm_content ?>" />
<input type="hidden" name="utm_campaign" value="<?php echo $utm_campaign ?>" />

<!-- Page URL -->
<input type="hidden" name="full_page_url" value="<?php echo $fullpageurl 	?>" />
<input type="hidden" name="page_url" value="<?php echo $pageurl ?>" />
<input type="hidden" name="referer_url" value="<?php echo $page_referer ?>" />

<!-- User Location -->
<input type="hidden" name="user_ip" value="" />
<input type="hidden" name="user_isp" value="" />
<input type="hidden" name="user_org" value="" />
<input type="hidden" name="user_country" value="" />
<input type="hidden" name="user_region" value="" />
<input type="hidden" name="user_city" value="" />

<input type="hidden" name="csrf_token" 	value="<?php echo $rand; ?>" />



