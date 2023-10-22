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
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.33838340881525864" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.39554617962304683" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.8035649053431098" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.406166053869623" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.541090384490652" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.12686584005979884" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.9724024916389029"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.6666611965033244" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7746688817088225">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4294631486036984">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.8460192024742526">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.2222321692417315">Forum</a></li>
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
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.5598344128261279"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.9516667444646507"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.0470030833848436"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5673162259988045"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.07687289203472569"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.3292180107995586"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.7365356662338245"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.5633680191580117"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.6810595406796442"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.3277049574634119"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.2728814745321584"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.19673015381537273"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.1647230822929251"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.852122635731769"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.48655123100815034"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.888292106707733"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.03579742776453143"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.696630518932666"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.9379035585557929"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
