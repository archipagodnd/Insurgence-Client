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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.48780032023335074" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.90767359575272" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.6113925018458051" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.5022208636087433" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.25120119580791855" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.747330248149153" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.17609081512550695"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.6316604856138501" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.03024668019259491">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5989884433177084">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.4949653001371386">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.6778061736358918">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.7231873767743209"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.18569162263711037"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.12161618915300854"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8023278703003796"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.5393350535720407"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.3569141757509364"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.5414482782713643"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.9232574988128746"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.7837221242460883"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.909800743713681"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.09645130903601751"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.8456345983472713"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.10630319825626877"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.7894027276688598"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.6650280333702621"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.8869004860222549"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.22345715016302625"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.6501759869535564"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.10204154502338691"></script>
	<script src="/js/replay.js?1e09ceb9"></script>

</body></html>
<?php
}
