<?php
require_once( "$IP/extensions/AbuseFilter/AbuseFilter.php" );
require_once( "$IP/extensions/AntiSpoof/AntiSpoof.php" );
require_once( "$IP/extensions/CentralAuth/CentralAuth.php" );
require_once( "$IP/extensions/ConfirmEdit/ConfirmEdit.php" );
require_once( "$IP/extensions/ConfirmEdit/QuestyCaptcha.php" );
require_once( "$IP/extensions/GlobalBlocking/GlobalBlocking.php" );
require_once( "$IP/extensions/Math/Math.php" );
require_once( "$IP/extensions/MirahezeMagic/MirahezeMagic.php" );
require_once( "$IP/extensions/MobileFrontend/MobileFrontend.php" );
require_once( "$IP/extensions/SiteMatrix/SiteMatrix.php" );
require_once( "$IP/extensions/UrlShortener/UrlShortener.php" );
wfLoadExtension( 'CheckUser' );
wfLoadExtension( 'Cite' );
wfLoadExtension( 'Gadgets' );
wfLoadExtension( 'InputBox' );
wfLoadExtension( 'Interwiki' );
wfLoadExtension( 'MassMessage' );
wfLoadExtension( 'Nuke' );
wfLoadExtension( 'Renameuser' );
wfLoadExtension( 'TitleBlacklist' );
wfLoadExtension( 'ParserFunctions' );
wfLoadExtension( 'SpamBlacklist' );
