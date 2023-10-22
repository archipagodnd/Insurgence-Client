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
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.5645315275512106" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.3149392906157866" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.7204176748488538" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.2950266168704685" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.09917901946782237" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.5383094377677531" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.8684773812886883"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.9883741934828656" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.1560385248752305">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5670687313526395">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.2678348954246288">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.5522320684481701">Forum</a></li>
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
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.9374754606720319"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.3534646299047628"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.10705324210949874"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.18723516862879896"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.0847580587649015"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.2548456766555578"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.13417845537794926"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.4000574373895891"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.7198709233106875"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.06665203683072685"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.5968680612666237"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.7729726192729889"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.8754952834234127"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.9735705689418275"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.2713659239883468"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.9990449266094976"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.7084806039492069"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.2657206126495302"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.3085236249674477"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
