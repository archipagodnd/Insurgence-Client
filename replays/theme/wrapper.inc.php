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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.10306168690885786" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.3532647259164523" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.20380538149305694" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.9074905542991183" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.9015540157880335" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.7812171920098592" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.8095585024253649"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.5626396652292212" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.0346458367580309">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.19489606153242267">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.9283451831763809">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.17629372394964804">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.9600779066356069"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.9204448700258299"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.6116966619115658"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5798565015632213"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.037005782855747515"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.9015079120894831"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.8636559483874708"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.692083781115431"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.982768606224272"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.28343296153965514"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.8025962703086569"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.8616615950240494"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.5567932871220029"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.5086365715432279"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.23592641244188783"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.16800923148063718"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.9406638032093555"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.6290165757721395"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.6673154808184592"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
