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
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.8651924626899983" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.8597554018181757" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.8440649329878478" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.06561399472476892" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.19947409433444818" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.807885518787173" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.9878672366713699"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.6014301384602849" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2957747199768308">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5186952755501051">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.3045956504198444">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.9423785470700161">Forum</a></li>
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
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.47213742328292074"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.881519962235485"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.11423570117123072"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8696508566877825"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.5589086173772426"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.11238197118094262"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.6351121893518263"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.6022066047768226"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.24174952757278123"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.4505036867287515"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.8356006868974917"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.8817999693568443"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.6348276840585818"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.36641301166066964"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.4130205618910703"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.16177584096424646"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.3149029092397293"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.15949717962152699"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.7532367373889304"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
