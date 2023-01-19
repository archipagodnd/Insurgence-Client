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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.0766701726003769" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.8893998733188222" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.40527267367104125" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.565617809472889" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.619208742849269" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.9085378529812984" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.21420219576309774"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.8660210389425229" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6841556151682477">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7219145048148226">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.3075063644555942">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.9385938673223393">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.8319554822598658"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.022024646924840408"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.8107558632431875"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.35351795734931435"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.5320946114270959"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.9526516354379604"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.2457696521839745"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.05604025876341545"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.36578147721894205"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.2876222256359746"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.585680902901714"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.6561183313488339"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.5305952680309909"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.23033787069509226"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.7380820521227047"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.489252565069328"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.18514155533985965"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.5254583157921973"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.5308516239832739"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
