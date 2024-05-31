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
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.2929688389647731" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.7144931861677046" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.5171771615510026" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.40653769421349484" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.7313563038137458" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.21876477224656155" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.6411462012196454"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.6466735870034754" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8494406756267341">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9347933026550994">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.831806407679696">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.9144731544168583">Forum</a></li>
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
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.43542841895311946"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.335363008418071"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.5026114853269319"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5011550584943398"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.751453131785951"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.17953508248805705"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.2980104246583348"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.49435891173576896"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.015815998792692243"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.27844312684279804"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.3935127444454587"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.44236103575496655"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.5655499125209162"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.5973561373927474"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.5894989514542242"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.6323225124994543"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.4207243158053402"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.5628346626162857"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.2853766319739506"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
