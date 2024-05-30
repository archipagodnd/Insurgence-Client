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
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.13607540399774365" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.8236389910045587" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.9300249955152908" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.740041793206502" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.7948801033636923" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.7999919330511349" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.7169293985819734"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.3165637451721024" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3048622200912887">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8017099882671572">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.2989033235699221">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.35527239520764375">Forum</a></li>
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
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.8541060447777695"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.0039966708577394705"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.14016472932943258"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.39619687550476357"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.08051816470112172"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.43623544199527164"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.6902584785221715"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.9841494732112341"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.8162279854032835"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.7572402855712645"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.303454442184538"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.4990069809353104"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.7068629892987364"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.3226037741921908"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.01017032795089401"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.6505558446630677"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.820547993352043"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.20259157165229147"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.4239723148555725"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
