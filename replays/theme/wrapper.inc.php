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
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.22839724471308154" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.19906567886215498" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.6648205084427659" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.5391112653435697" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.18023634612011996" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.7356412524575551" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.0333604342213365"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.5810525568216829" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.19101353586960146">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6551761645249401">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.39900743285205365">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.6044027037691784">Forum</a></li>
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
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.6432345324210582"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.06290306804899237"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.1814121728533813"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9371971867646347"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.7815929695702439"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.609965411882506"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.1574919802979311"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.6417611913020209"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.05853420631193251"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.5821124611891833"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.48895465155720363"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.744630973104258"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.7053188639759211"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.34956780975818336"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.971583614728406"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.42144236441350635"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.2953707989203431"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.6563189665218594"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.7181696092018932"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
