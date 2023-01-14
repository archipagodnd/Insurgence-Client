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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.11734881447782164" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.6651489984945234" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.45299098255562953" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.49257941900896474" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.028536443890887275" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.04246836320189873" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.7810178745454668"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.37177152280481307" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8105688501921007">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8437714915130206">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.7950655054473432">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.5854961305942354">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.9979209458068317"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.9626551405017949"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.7079226655137185"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.990759700028709"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.9785998697000697"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.8114762048263353"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.6933227201314005"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.09101359991094427"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.6097077402022157"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.7221998217195795"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.254512834275449"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.9393267676679378"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.933770938943304"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.3734243218288473"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.5011766184441342"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.03129325427126517"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.11748237459118194"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.28665928516975603"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.6462129289862861"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
