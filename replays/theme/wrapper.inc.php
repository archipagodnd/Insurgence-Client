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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.09331662249813566" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.1036440598656645" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.17280258300751727" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.061675217696188334" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.6194431471648918" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.7264023016612797" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.06622400487378033"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.7609493042332958" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9448683428837641">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.28781348210995206">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.40886900616032396">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.04854418961795348">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.8584739859252783"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.8816131605282937"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.37741069258564597"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5743120993334148"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.8433984687788807"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.32497347512932606"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.6248813993915416"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.016628239552274104"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.9783065774454707"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.03976880950680761"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.6095307377805301"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.2873915283531383"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.8387298598811677"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.32038483635107795"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.5156698230149446"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.5272077698922437"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.03388238435107316"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.6705198464858726"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.2912822857517492"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
