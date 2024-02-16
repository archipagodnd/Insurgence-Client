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
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.47318610100008307" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.4237143305871287" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.5379226938520405" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.8153275500316914" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.8301993075508489" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.07414532768153093" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.5428707955965604"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.5113108283397638" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3259433933668716">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.39260693876310304">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.17166270129911254">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.88364847622344">Forum</a></li>
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
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.3310470122301332"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.4605570749535892"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.5351128176068396"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.0634856137237394"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.5692422431968733"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.4477965772889614"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.7532695698557754"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.529710198723043"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.9001251017396819"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.3116454101150459"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.1496668532374965"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.20891253506864316"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.5431255810573605"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.8818966595911786"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.295139209032119"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.7985111950668724"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.6630658127176692"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.6713469987894582"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.18447079386294618"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
