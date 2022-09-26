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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.5609472435743381" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.6491900537398634" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.6642861979304453" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.40500681640963965" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.6213220742915817" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.9189503285458054" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.33886827647537276"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.32198178019732926" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4403586928204759">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7256092555320168">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.602598109852621">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.2574062805636621">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.619199427377745"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.12229880697882112"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.23254987330620192"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.07140436326340405"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.35560899357148723"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.5547598336309512"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.4523571314062629"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.7678714065593104"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.16890509258442132"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.4116225870348813"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.3970679230903562"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.11111021820324463"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.8531140851302279"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.14108060395244304"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.4784416575042536"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.4461066929268307"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.5494655989585366"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.9329369143983974"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.5158996462941863"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
