<?php

if ((substr($_SERVER['REMOTE_ADDR'],0,11) === '69.164.163.') ||
		(substr(@$_SERVER['HTTP_X_FORWARDED_FOR'],0,11) === '69.164.163.')) {
	die('website disabled');
}

/********************************************************************
 * Header
 ********************************************************************/

function ThemeHeaderTemplate() {
	global $panels;
?>
<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title><?php if ($panels->pagetitle) echo htmlspecialchars($panels->pagetitle).' - '; ?>Pok&eacute;mon Showdown</title>

<?php if ($panels->pagedescription) { ?>
	<meta name="description" content="<?php echo htmlspecialchars($panels->pagedescription); ?>" />
<?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.4223771684174453" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.7676096377238859" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.30485187780943956" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.35573587641023274" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.8814389653247552" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.8648714310767351" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26211653-1']);
		_gaq.push(['_setDomainName', 'pokemonshowdown.com']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.4713504632959482"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.21208603099749435" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.11143306754808036">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8814196341718872">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.6426077306457014">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.4359723528587536">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.pokemonshowdown.com/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
<?php
}

/********************************************************************
 * Footer
 ********************************************************************/

function ThemeScriptsTemplate() {
?>
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.2321630643955257"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.6339975552280646"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.5478726725042307"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.49139300909736683"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.7093525249853545"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.9818002223126447"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.06772975605048992"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.8470341203914253"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.6661495431492661"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.7329045281519782"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.5294136510070249"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.10445238959343928"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.3340518217280988"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.2459093862176096"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.09972935306797215"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.2440506336538386"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.07502796723722782"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.6734882002469786"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.831306626810006"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
