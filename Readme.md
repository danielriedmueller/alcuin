# TODO
- $wgNamespacesToBeSearchedDefault in Extension onExtensionLoad

# LocalSettings.php
- enableSemantics();
- $wgAllowDisplayTitle = true; // defaults to true
- $wgRestrictDisplayTitle = false; // defaults to true
- $wgPageFormsUseDisplayTitle = true;
- $wgPageFormsAutocompleteOnAllChars = true;
- $wgDisplayTitleHideSubtitle = false;
- $wgShowExceptionDetails = true;
- $wgHiddenPrefs[] = 'skin';
- $egChameleonLayoutFile= __DIR__ . '/extensions/Alcuin/layouts/standard.xml';
- $wgPageFormsRenameMainEditTab = true;
- $wgPageFormsRenameEditTabs = true;

# Skin
- wfLoadSkin( 'chameleon' );
- $wgDefaultSkin = "chameleon";

# Extensions
- docker cp alcuin_mediawiki_1:/var/www/html/extensions extensions/

# Update DB
- docker-compose exec mediawiki maintenance/update.php --quick

# Mediawiki Snippets
- MediaWikiServices::getInstance()->getParser()->getFreshParser()

# Elastic search vm memory
- pactl load-module module-detect
- sysctl -w vm.max_map_count=262144