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
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.11746124604299935" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.8508822468783837" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.5191431358187575" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.01973478133825557" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.4218745129554766" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.749318816294914" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.9373818914546364"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.21053783866045128" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6052825753252848">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4108357160490812">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.3230039633041437">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.8847343744146956">Forum</a></li>
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
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.7431606123901608"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.9524888617822069"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.02428618626107304"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2832824873705153"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.2776591822733301"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.9855785313398493"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.3501862152477573"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.32187544906114707"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.5389032970237284"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.6617161570860324"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.5657884703327403"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.0005736619136558208"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.02551646087235504"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.26485732448069044"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.15551225959288084"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.3936136964511707"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.7050632198576969"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.7413112434917455"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.7940834476332714"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
