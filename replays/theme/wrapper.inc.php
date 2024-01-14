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
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.5471619405131949" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.9932322238935971" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.8907410606354604" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.1495026629530667" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.6774544041537824" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.9764653978955946" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.0030796920727516053"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.9418249168292814" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4360948346751834">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5787390519706752">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.7903634541997395">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.9816993052044594">Forum</a></li>
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
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.35864739624536845"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.859245596204582"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.24122115872023264"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.014613258439434507"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.144485605182181"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.7044219463502901"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.930388032699494"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.30539620869837547"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.6632747695833445"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.03419064690176454"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.21927638034498265"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.7794736583769397"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.5404065204520649"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.48898043529781643"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.5352855317719745"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.6519358543456806"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.5076744175091281"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.31584375714105817"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.4847955318222603"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
