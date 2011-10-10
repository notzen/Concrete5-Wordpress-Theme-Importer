<?php 
	defined('C5_EXECUTE') or die(_("Access Denied."));

	class WordpressThemeImporterPackage extends Package {

		 protected $pkgHandle = 'wordpress_theme_importer';
		 protected $appVersionRequired = '5.4.2';
		 protected $pkgVersion = '1.0';

		 public function getPackageDescription() {
			  return t("Import wordpress themes to Concrete5.");
		 }

		 public function getPackageName() {
			  return t("Wordpress Theme Importer");
		 }

		 public function install() {
			$pkg = parent::install();
			//load all the stuff we need and define essentials
			Loader::model('single_page');
			// dashboard
       	 	$p1 = SinglePage::add('/dashboard/wp_theme_importer/',$pkg);
        	$p1->update(array('cName'=>t("Worpress Theme Importer"), 'cDescription'=>t("Concrete-ize Wordpress themes.")));
		 }

	}