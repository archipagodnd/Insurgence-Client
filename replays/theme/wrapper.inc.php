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
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.2191580796576651" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.3148514719276623" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.8311793488841948" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.9887381164872031" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.10117139676652598" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.6126708351878427" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.06944877885421619"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.3107377004859928" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.22791521440999896">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.23616520018787823">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.9144048598747687">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.8460061619708366">Forum</a></li>
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
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.8930501742784507"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.4275644204934761"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.7461452739827872"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.033728224614125724"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.5291475285037308"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.11855704409726697"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.5876737904590199"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.3286074233325471"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.4938320797044893"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.6891391994997975"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.19848513454626437"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.7445389312904205"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.7623051774932683"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.8984642754031371"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.8642859423533404"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.08788325509441841"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.4245290344476407"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.42318941211205385"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.7541373679213059"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
