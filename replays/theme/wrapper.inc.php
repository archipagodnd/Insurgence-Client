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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.7653573729948402" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.9579933081309449" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.9687765607684438" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.8058616833045851" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.5187656518547101" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.7962396747158813" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.09151140994597573"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.19703780803394144" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5975472619258153">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2313737355631309">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.26472114027824345">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.7603586587818965">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.1729185195403986"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.670452150167036"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.9756097188936717"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7072095756462367"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.46838441264490194"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.2651131754931968"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.2873807538556825"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.35585299941628823"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.883651011037933"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.6288288952008532"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.9209512067305481"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.5244869950647153"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.11865084797388747"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.4083266186416563"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.9566925178478942"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.8734881002410362"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.8332761517461331"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.5177628464323418"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.45237971938796595"></script>
	<script src="/js/replay.js?1e09ceb9"></script>

</body></html>
<?php
}
