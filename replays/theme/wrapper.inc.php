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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.9984286673759108" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.8267184192954413" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.3114716278038896" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.8960161774854591" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.5598201926586566" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.7791559311004252" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.49171700597740187"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.3553221078506654" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7081547465040434">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9515404832338643">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.9029213944239773">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.6807580864912126">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.7094093547058216"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.3048216504197958"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.25071224371961853"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2751764395936098"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.9027141189564893"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.35157155776951865"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.8720033625778598"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.7316966347483591"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.0035791865107512866"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.8229605448855162"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.5884394966497801"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.7632220422034766"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.2336319005373435"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.8278150759979741"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.08209681377186451"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.6072102028951489"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.6410792071472431"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.8395166292420173"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.5226257998688135"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
