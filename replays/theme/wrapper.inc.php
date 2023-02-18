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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.5300255260087705" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.0757815226755243" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.7416438055620236" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.452274783256402" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.0022823580110111763" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.158473295997007" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.5319057256834467"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.33835148352442257" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.43237300967185277">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.11585571132565597">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.4749097873369601">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.7839926092574885">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.5448427472047512"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.022597226317219388"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.3425395307182417"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.13963394694906794"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.7010017370253423"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.021177957591973717"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.8348052965787176"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.7420392544736913"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.5944232868199602"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.34535711896585775"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.8828194300974233"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.4272093582929706"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.5539543640667286"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.27066619966435135"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.6134200494505655"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.9516918863537405"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.34011390513216977"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.9265909537332602"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.9382593976720084"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
