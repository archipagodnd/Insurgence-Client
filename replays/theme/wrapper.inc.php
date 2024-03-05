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
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.1316025765464386" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.5495556909667334" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.3592033343956236" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.43501063810186946" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.946865293571572" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.2788489881712899" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.5543258455280753"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.6846913573342761" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.740389659603572">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.36577776792971495">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.9647494660750022">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.7170550957288746">Forum</a></li>
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
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.1483614913051543"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.07851594986686017"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.1693320398842033"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4481841688919561"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.7744465617714089"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.6637226478632372"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.7469588297301282"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.6872644094429436"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.26202122301745745"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.26143022536096017"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.09985316937899658"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.04767290844491212"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.14095439840124957"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.5522104080234953"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.9251399364394723"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.94950313242363"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.649002877010112"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.9208607368819031"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.02657273939590543"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
