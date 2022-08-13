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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.06017085093096863" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.8473955962643938" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.607463991289654" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.3279460745840186" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.7333123031071014" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.10071408074518584" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.2070481290346966"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.3254410622638655" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6691292287382526">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.16712138933528475">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.6800333483016676">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.06564194898867415">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.9215965667806123"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.9055907861122141"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.09597743519578184"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.27993699578788345"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.5060906255221298"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.39502854786065256"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.6074731942146505"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.757825045212305"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.9460886324259201"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.8729109686191863"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.2486080019172776"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.5784609861541798"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.8562720345911701"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.3963040310603245"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.10463960680042383"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.675299266058242"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.11154647667686746"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.6676827792602817"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.9778828975793123"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
