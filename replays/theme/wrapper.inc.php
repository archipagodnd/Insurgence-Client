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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.8849819118741729" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.4425732024338018" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.7817844580296891" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.09396143322188699" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.34526950507484555" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.6239335387153189" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.8414861041570649"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.7067739946046332" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.21505598190077957">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6908833027104093">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.8907249438754958">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.7897203708707947">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.31351560281297086"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.7824706221692868"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.9535933044163349"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2713003722649361"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.34791432716509507"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.3069321303338315"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.4726228041076188"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.8384071443271535"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.8448006464615994"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.5575490595630115"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.30377878026600413"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.08002410410687721"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.33506870851712267"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.04884985705241629"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.5585961147561955"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.06648094324543719"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.768828076698634"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.8541833234460747"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.7726893255982081"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
