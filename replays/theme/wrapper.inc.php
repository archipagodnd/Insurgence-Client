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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.8731870798204886" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.0715757308130196" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.42321224582744965" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.6346918179160397" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.17656289186530216" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.5009868215001616" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.06941088881133495"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.04733140654915213" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.19714107349654553">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9893752053277598">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.7110958663877265">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.4801668159812109">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.3047701729871901"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.5086815016433406"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.8510681492669254"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7740559120716435"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.6586353440857358"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.4354192026717181"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.5309948027221765"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.6366857636699483"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.5536541532178907"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.44293384167686844"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.8635958590543555"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.7414299332277694"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.03326814266386391"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.22950214871324648"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.5082323180386048"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.6314562677805924"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.8683414449752955"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.1900898587282751"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.6376297836430247"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
