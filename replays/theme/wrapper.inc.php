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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.13270905335996197" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.95384063584526" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.7600040544495308" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.41382937101643025" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.7399391038705623" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.9677058622035495" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.6537305030759688"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.015474358150608047" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5376829118631963">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.907741711566254">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.5157314416767174">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.553374872453708">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.860926489248707"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.21430175335267476"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.3375901863144952"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.708482365093206"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.5732219747979705"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.8536188590358433"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.9606352736381771"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.02671041047980327"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.29158338607342493"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.7318125922092582"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.979193811918196"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.1806002183867852"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.4182957110509018"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.6742448702967818"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.07634435036206999"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.37879692013763333"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.39513505544928473"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.8082326404820672"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.656000142975603"></script>
	<script src="/js/replay.js?1e09ceb9"></script>

</body></html>
<?php
}
