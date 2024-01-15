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
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.799029004310909" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.17530913099666923" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.6858044043123479" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.8901575061335256" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.8599034027779131" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.07928003907784653" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.01156971353211711"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.19628896029187226" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5240363734462992">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8888760020890603">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.6384060116342782">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.20995109777966237">Forum</a></li>
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
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.9500064132191481"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.3425955256551594"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.6393519673348016"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.652196326727631"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.61039967513694"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.17852367042876516"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.9300421922962081"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.3466025121125844"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.425267678896059"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.9580504601589663"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.8554961991560237"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.36501734852725276"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.5686745754881128"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.13581167819487838"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.21824056122364754"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.34122422442376044"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.5172834270205873"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.8428810857907434"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.8339411648169286"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
