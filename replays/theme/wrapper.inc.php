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
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.3394230070156663" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.13125276337375258" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.07179050385694241" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.7742454958169074" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.413904755205154" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.49407193890228585" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.1923129738819489"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.13136356271796923" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5016053397909839">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.856401619947617">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.3411270435901792">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.08252925858299398">Forum</a></li>
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
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.11736993328563483"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.9293305756360284"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.3659219361399684"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6190769887727539"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.9123221833056661"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.6980896914612646"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.9665995446426847"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.2736167925448998"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.5614652925955392"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.04507407650530837"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.5716643437864646"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.3442398020728552"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.17774401976252308"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.07148759436222707"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.6561451667014198"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.42150138240682145"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.1279023795522196"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.18022434668589704"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.2298069243729246"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
