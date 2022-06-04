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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.9130998811851958" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.2880495424370044" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.06014224099703802" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.6451057065230583" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.5744574336844144" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.11801530798466908" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.44102394481765295"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.16562119345803916" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6349070035098079">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.1330047449513958">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.29897234404945605">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.5988658628386392">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.05628452994088917"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.2622936759181185"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.319843424797686"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8141230059240696"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.6884744398785412"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.42220748041378875"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.5859396803032046"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.6166854388039511"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.9262910964868094"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.08944218145171257"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.2951165066487782"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.5811314329844677"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.8334260033784728"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.1252056814613931"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.5390462263758773"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.570813564501965"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.49691669872092015"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.9766419041270211"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.01878064963664805"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
