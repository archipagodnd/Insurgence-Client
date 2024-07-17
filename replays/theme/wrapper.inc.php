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
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.3531672346126373" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.006482672804888123" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.9739113611060433" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.3494145430338409" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.02649386548983501" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.1415727713706838" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.6384975321176667"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.7898801926046053" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4242482212625376">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.563494231056024">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.8416545594453912">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.2397957417795693">Forum</a></li>
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
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.46481783544701183"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.6342214242349498"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.08674559117667302"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.35122727486849015"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.3266605271470808"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.3252848801491437"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.9753047196578073"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.32318842053862773"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.2501296899749994"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.07557642549538035"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.4415756623997582"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.5572651536117281"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.7314379534728692"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.2119349259122436"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.3139892654126406"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.5206032858235792"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.11573753158026068"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.47657190398315574"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.40346527142145017"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
