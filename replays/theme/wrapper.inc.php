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
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.7580968074069021" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.8314470896478512" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.25031403772215866" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.473674288746895" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.34336560158579554" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.43673756784555984" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.45150521944198907"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.07008791606237863" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.011550113821296781">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.20051945760597145">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.4898487687013269">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.07337002315719143">Forum</a></li>
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
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.23205856456273"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.5391149090777072"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.660404335931654"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5273580123099719"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.6915686871400297"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.36322968218666696"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.03805636068911711"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.11679986521655761"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.5387527484912076"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.058723045056643164"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.24945351167052388"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.7243688747484156"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.4243205683525615"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.8878584162350929"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.42862032461696975"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.7012188720762871"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.6139891460026095"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.3526948042696416"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.71616011122108"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
