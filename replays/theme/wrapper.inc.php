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
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.21134848617980473" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.23998988058138737" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.15441765494138893" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.01653195862932244" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.48516635576259404" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.7752756767166025" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.1467283516031721"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.8146479369520407" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.769749902212592">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8489688396596151">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.7377461942463741">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.19259111060727174">Forum</a></li>
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
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.9046477573136966"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.13024007880513544"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.6001610008057903"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5302560624219228"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.4758763796598737"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.635042114648436"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.003312093948723893"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.5748239985785679"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.969734480485221"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.9582294962194453"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.589976620872565"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.3339001197536602"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.07383284744739038"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.9666152824228602"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.7241133883610511"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.33990110138349516"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.2138327177989794"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.34928658270762813"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.8340363178071277"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
