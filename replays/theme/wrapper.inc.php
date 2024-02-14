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
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.7399125292307471" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.39287001871062555" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.024017319018370564" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.9242523378582264" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.36188455955232723" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.8202000119622619" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.6342350463413269"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.4555389914814285" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6147663945488497">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8332562729180795">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.08431891987280316">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.7955946975450607">Forum</a></li>
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
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.550726929108202"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.07736567622935953"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.9298131993168641"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4590848126698255"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.7268738903122511"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.41549475761581767"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.5617504564711278"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.5098675969454818"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.015357739594413333"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.08580882317439831"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.4644382451598046"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.7948145458544442"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.20412737590314456"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.9463417592820476"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.8408582290882838"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.9206372269836369"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.19237530875217534"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.6262200450855331"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.7984869913663797"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
