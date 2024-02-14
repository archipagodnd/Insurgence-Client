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
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.5449184151697599" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.9219411842137233" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.8623516241654228" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.06341292009989985" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.7754203129904009" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.4649109401473941" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.5182129392275661"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.1872633529673733" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6903885732844817">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.31480894230876966">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.924789315359829">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.7083277746515486">Forum</a></li>
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
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.7758117464576622"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.9539403356506564"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.05498221364859379"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3750453713086821"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.3286487135115703"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.6406000367695441"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.9139399668993962"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.06359223756240762"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.11936472693696198"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.26923779125712977"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.8769154223259721"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.773856924167243"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.8948292450321502"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.8029923357972644"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.41469195609207543"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.8974076816911498"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.358889321079334"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.635596169585541"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.9754146341638195"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
