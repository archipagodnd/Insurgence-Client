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
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.6964228643186099" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.5783772180626483" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.6680856409365763" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.09997155075061981" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.3694158699404806" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.5560283406271762" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.47211142261577765"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.755313660876396" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2102313695096627">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9820674731840393">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.7506247826712131">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.12760926593030053">Forum</a></li>
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
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.3716121612278236"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.7458084530217881"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.6710558282331123"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8769746970619838"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.5435163678648633"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.05286626804828609"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.5656920776131513"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.21009882193323803"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.8585444087256704"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.9375430485274352"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.33598035470931986"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.26728867107391396"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.6801218671966422"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.08878135531877485"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.29524087309723646"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.5871222966292395"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.9458784088423817"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.16785971008422496"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.16315769455300178"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
