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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.28901324603881706" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.7248764845837541" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.48961371799384756" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.1100678261934116" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.11929446455918158" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.7042761700795626" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.9112621860281986"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.9183611525705986" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.10221649356220142">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8191143425691045">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.0068926561370126205">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.01054702082467629">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.5505773497318427"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.1508385729331032"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.5063085760682293"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8375306657545725"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.5780628640475167"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.9747422617421291"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.24647204085277497"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.32404834981714514"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.912906946775226"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.5715607595939496"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.5126879181956772"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.44419567326357834"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.44100624435848634"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.4990819089886396"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.6646854453989108"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.04751155979984989"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.5752856979467791"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.637790350320175"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.15084375004241268"></script>
	<script src="/js/replay.js?1e09ceb9"></script>

</body></html>
<?php
}
