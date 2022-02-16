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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.6044392199529101" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.05927090329018525" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.8669555524254642" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.7455528285359609" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.4675934410629867" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.5411911326870953" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.03572701853896354"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.4340413718963658" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.24340776748426762">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6412813614470432">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.4849659084612734">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.4903950269932795">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.9381277493759914"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.25832913048038963"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.620142242305556"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.0074919299421207786"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.23542006473766142"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.8940486727783648"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.8318181095351527"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.2157199416162967"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.5175000912021743"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.3264665458420417"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.36279649056449137"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.5966691485595867"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.9859458469907469"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.2814756840657915"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.3792778055362449"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.4481836984244709"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.5493715549962979"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.8160910825037104"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.6244113163875293"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
