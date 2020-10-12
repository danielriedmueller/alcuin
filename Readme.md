# LocalSettings.php
- enableSemantics(); (lokal)
- $wgMainCacheType = CACHE_NONE;
- $wgCacheDirectory = false;
- $wgHiddenPrefs[] = 'skin';
- $egChameleonLayoutFile= __DIR__ . '/extensions/Alcuin/layouts/standard.xml';

# Skin
- wfLoadSkin( 'chameleon' );
- $wgDefaultSkin = "chameleon";

# Extensions
- docker cp alcuin_mediawiki_1:/var/www/html/extensions extensions/

# Update DB
- docker-compose exec mediawiki maintenance/update.php --quick