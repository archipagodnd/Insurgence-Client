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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.45605939767195003" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.6305733189840119" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.046321376442978845" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.5178386187902821" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.4708173236824218" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.7033343650904214" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.43391235341235523"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.3393146459791818" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.38130263627068994">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2272970739002178">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.8817538889554299">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.10779353979624107">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.3091143020440408"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.5235700396347269"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.7305638129708754"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7466750751056204"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.7192675750735207"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.2873402007550203"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.5970232977855967"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.02972100244738418"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.02717585569553127"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.7412200852698825"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.399803503150439"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.32890076174889793"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.014032864006167323"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.6771860099276761"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.4673270999506898"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.12281558176262775"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.24232618084950963"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.07561244915001408"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.489641703686166"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
