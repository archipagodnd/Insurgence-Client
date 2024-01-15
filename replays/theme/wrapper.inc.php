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
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.5318546215968734" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.565704658651025" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.3462504448075965" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.5186096786967869" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.9626420932174564" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.5477821820375535" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.11846570858185435"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.11379415508670188" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.25758257625186975">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8412731343650033">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.1029056967037143">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.1555377146371295">Forum</a></li>
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
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.351378487646292"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.9728242788289454"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.1641125134117698"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.04754792113854589"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.8635550715239069"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.7252740154909687"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.61319899198286"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.7706551403255191"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.13096457357087954"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.8261708280494928"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.6184092073988483"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.5842118079913212"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.23483433935490994"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.05061693740857942"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.12390806494529039"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.2788616810834703"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.41090168893422363"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.05426921123422601"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.19775597306645576"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
