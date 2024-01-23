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
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.40811283938028176" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.3309850905892502" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.8101696910566469" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.3221450790959177" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.1777224169930458" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.8809688829355498" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.7690279521766004"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.5907585259479391" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.24848132416200364">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5207027410708187">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.6045373827547957">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.835648750135394">Forum</a></li>
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
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.4375498589006812"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.3836750722666873"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.7516538884222634"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7803553815791415"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.6525986943043718"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.9049014483794391"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.6242559996757646"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.1761457126112591"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.054068415920333956"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.33412986494857466"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.9724835905552063"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.4918422478152602"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.30769810632227657"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.8765582830129977"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.08839770779421596"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.5857772096972087"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.9979092460762242"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.7278615016667862"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.42280258663086334"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
