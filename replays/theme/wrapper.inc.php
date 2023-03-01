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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.35355948206701737" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.9215897093090049" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.7736394961302024" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.43128779695057906" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.07234129071273676" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.9026402961449427" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.6195464632718908"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.2874434218323314" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9810326305085046">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5818793951898802">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.38947094064236687">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.24309620702414114">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.7021700061424425"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.8397117085077792"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.8147616040118113"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.27532687787742094"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.14123138169830374"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.36555030931943633"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.8796224112699838"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.5404073255525024"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.36088850679113205"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.5449592311507252"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.089601845045852"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.1255490469373155"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.3655959867255041"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.08826523049535018"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.39134826470488693"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.5957496064744994"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.11694966320006173"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.3513549400982261"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.15239374479535184"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
