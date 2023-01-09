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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.12599376899639925" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.7900632497925351" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.5554385651811955" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.7919258544191621" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.906733593243281" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.28595917465391074" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.4680173205643188"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.4471644519401572" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.40018181678345277">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6906364731376657">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.8692401685860951">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.6326107754029793">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.23806253239641673"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.515073552191095"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.5344120524333915"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4460882512616211"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.6486102775502562"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.23976026910716297"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.39161848983150915"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.3397137000404251"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.8803285155068823"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.7289968790530443"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.16728477974855993"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.7921427909844878"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.3616360111894825"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.24538989763169372"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.8961210880332973"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.6047629422541634"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.9125912888669443"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.4667313118509797"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.19832285313378195"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
