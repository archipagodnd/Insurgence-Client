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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.1046033414756038" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.42759419068880655" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.7392967692343189" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.49470158599608904" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.8261932211012848" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.6755040892315225" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.41556490448233463"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.652024075572283" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6851984727549496">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5675090070770341">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.5840812528752619">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.19410052406337486">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.6580069122241894"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.03256995304670052"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.10238513074020505"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.817194195145496"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.7114804373809116"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.7677074240500417"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.6742923102387932"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.6808681219617463"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.0038836012494232186"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.7045345431832635"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.8815305628982264"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.24785905075991743"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.938649556867782"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.8320704820690927"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.29559879698634095"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.6073527363295854"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.7486872000130962"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.5615123116546794"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.40154318086049323"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
