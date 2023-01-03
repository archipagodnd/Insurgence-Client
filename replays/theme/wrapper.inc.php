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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.06434893598828806" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.9890567512930106" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.3021878749561955" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.14775342761560162" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.29204858946561085" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.8986001653138933" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.039094883387081225"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.7994308623879085" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4716800145797113">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8992482807134201">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.7555035797955023">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.4027376474192508">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.42777404745666936"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.2514107575538618"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.08168449682078127"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.78511591082545"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.55502668861716"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.9568136567740997"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.054566915670210214"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.6448405217918043"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.147559946945798"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.6539753860426425"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.43354271925720367"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.7777601548248707"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.17093676428562787"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.1252773761726962"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.685578899608474"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.7144258289862311"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.12763490983735304"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.004187535192770042"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.7252357714312203"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
