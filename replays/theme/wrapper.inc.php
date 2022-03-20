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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.7835708995480011" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.9340291725347245" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.3376337820294142" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.8603533977655051" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.07455797177915868" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.3756901842925304" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.5354132625142121"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.8220186509757381" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3504784120157043">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8913618847276106">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.29277550777571393">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.8495700916940099">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.5420560954557967"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.5414066133688107"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.501347839843181"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9780870604484311"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.033082061570106625"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.1260866906317777"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.294687674991263"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.03149275631639736"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.3945257847677506"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.7413742324475356"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.01564369965537704"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.08874925200430273"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.5413553231323258"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.44633793012596"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.37111290163794175"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.6955787685348518"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.39917403977598376"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.7549673418485983"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.47049091711149793"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
