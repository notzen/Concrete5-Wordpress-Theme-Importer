<?php  
defined('C5_EXECUTE') or die(_("Access Denied."));	
$h = Loader::helper('concrete/interface');
$form = Loader::helper('form');?>
	<div style="width:993px;">
	<h1><span><?php  echo t('Theme Creator')?></span></h1>
<div class="ccm-dashboard-inner"style="	overflow: auto;width: 975px;">
<?php
	echo '<form method="post" action="'.$this->action('file').'" id="ccm-theme-creator-file" enctype="multipart/form-data>';
	echo '<b>'.$form->label('theme',t('Select a wordpress theme to concrete-ize.')).'</b><br/>';
	echo $form->file('theme');
	echo '<br/>';
	echo t('Theme must be in a zip format.');
	echo '<br/><br/><input type="submit" value="'.t('Upload').'"/>';
	echo '</form>';
	
?>
	</div>
	</div>