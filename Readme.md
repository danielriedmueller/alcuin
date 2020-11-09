# TODO
- $wgNamespacesToBeSearchedDefault in Extension onExtensionLoad

# LocalSettings.php
- enableSemantics();
- $wgAllowDisplayTitle = true; // defaults to true
- $wgRestrictDisplayTitle = false; // defaults to true
- $wgDisplayTitleHideSubtitle = true;
- $wgShowExceptionDetails = true;
- $wgHiddenPrefs[] = 'skin';
- $egChameleonLayoutFile= __DIR__ . '/extensions/Alcuin/layouts/standard.xml';

# Skin
- wfLoadSkin( 'chameleon' );
- $wgDefaultSkin = "chameleon";

# Extensions
- docker cp alcuin_mediawiki_1:/var/www/html/extensions extensions/

# Update DB
- docker-compose exec mediawiki maintenance/update.php --quick

# Mediawiki Snippets
- MediaWikiServices::getInstance()->getParser()->getFreshParser()