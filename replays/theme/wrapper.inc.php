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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.688347090113214" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.05370747702299372" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.7420747282167559" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.5182426222246304" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.018009929829081228" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.8145641464230284" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.7325777334942118"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.40357435325475266" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.48415299093822717">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.634603350809857">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.5259221043208298">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.6052925280017187">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.47423427048808975"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.7451967435597371"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.28315586590696684"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6742445650213564"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.715594449937138"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.1329748898875891"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.6433165304110284"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.15864940646813053"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.606845270593418"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.9201152735840594"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.6266720074839995"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.5596327505282748"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.42176881656741516"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.3181616914487517"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.14339710690490315"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.5345127568931378"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.572896509797727"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.5605767471669458"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.5465759740996303"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
