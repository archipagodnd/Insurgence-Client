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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.8427751526136826" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.2814080921341038" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.43556522591686453" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.9023002094879322" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.659372941447093" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.37453652257688086" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.05803382115524913"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.6058356511108431" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.021928258411403334">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.36211547358614693">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.7468725322354139">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.609535753513067">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.672403402210318"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.4359480588218174"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.9953966426744081"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7610654028203283"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.05796196443037993"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.04513118022878815"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.5169880990915221"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.20032510003537296"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.5251348249124959"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.26221453679245776"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.36760015568171434"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.6913795088280994"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.465101671386293"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.6837714206869756"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.3125124611469716"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.041368837286766214"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.13404470345830966"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.8444025446318801"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.29709311875232514"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
