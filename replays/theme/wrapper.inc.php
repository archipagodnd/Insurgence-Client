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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.5490043887436047" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.04328831465026406" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.8120222429271211" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.9198942405820665" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.2724365448247317" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.49777708280874067" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.9154625910085463"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.3924437692674818" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8412324606755843">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8110604866192406">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.7750381075643682">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.3900366323363844">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.12868839746896743"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.36212970298288716"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.07343678853396685"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.16953175008166754"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.7597010116177303"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.4912825323870653"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.21100074505926636"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.25468254599094386"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.387414464776886"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.8273682528252861"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.9115925253091122"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.5582179671455754"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.163756168597734"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.6402419828410078"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.21190807046301607"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.6555701727234431"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.7152317943797437"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.8736140501846419"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.40729582355012695"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
