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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.731074468324427" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.8431867524283738" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.8033730542907238" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.4601311011827449" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.8723224882017424" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.765277792442786" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.7459049980572501"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.14966229875225778" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.08520848185356078">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.16200710598997392">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.05826034502261068">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.27705375919964115">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.31084466333681404"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.7246538032733767"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.6197847615605994"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9345663525590564"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.9861331646798892"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.7536138089496425"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.38109271091656516"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.16506833356496475"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.5057786454930366"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.0343365240574689"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.2000656996519259"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.34048276246945686"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.2825554815569682"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.706611474786971"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.08432947525409884"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.13131529136320252"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.29644662137532496"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.2405764273868447"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.9680472023979716"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
