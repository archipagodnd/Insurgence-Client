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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.6462929779650619" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.027270012926102982" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.05290599819852981" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.3780352378798484" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.7918735332602471" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.5571787529002197" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.8009894532569477"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.7838651589220522" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.13403369857187397">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3998524605552034">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.6917341896804361">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.0099652808943973">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.7111990477589352"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.8588382523752862"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.7488779809713693"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9146661228971344"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.18141358898865234"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.8514360327413182"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.6115323803600312"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.7405159440395828"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.05266728084208583"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.021353448564430888"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.045087100716281636"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.5170534302599563"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.19587799811052964"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.45674678803620483"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.4712857298697626"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.8376778188276037"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.09968515826133717"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.0730967359866852"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.37466720717331636"></script>
	<script src="/js/replay.js?1e09ceb9"></script>

</body></html>
<?php
}
