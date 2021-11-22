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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.1372238281556344" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.31752997750392153" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.7614029275787895" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.6194210113913072" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.4345835685851185" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.7847081689113009" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.382427188692535"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.2136604337542447" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.47560920500360226">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4799199354308332">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.39779834765718225">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.9768581265111957">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.7182506509603466"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.5018929008805542"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.5609078072974916"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5046054789681742"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.06559015737905693"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.3951752133674249"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.820928532529837"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.621769327754814"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.18036238996141285"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.7454423978150828"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.18960352262543112"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.2548697960517776"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.591681945513655"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.7450825464811963"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.40256360862202656"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.9908811022066626"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.732826725228392"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.35395456695560057"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.47570211848075306"></script>
	<script src="/js/replay.js?1e09ceb9"></script>

</body></html>
<?php
}
