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
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.8665621373422037" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.5741649082275881" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.22987144717536845" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.8476360369720248" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.889240384806308" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.6180282409421396" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.3674240278158285"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.4159245091777728" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.48606172581474727">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.0708166380455626">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.8113920250777154">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.3055858107633793">Forum</a></li>
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
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.1499600000356336"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.2425482674999051"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.9067667649755022"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.952736395324977"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.15156152706893544"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.9575479179830133"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.6532121248708413"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.4993858550712802"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.6087946012679761"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.7005602528109756"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.7708011781163691"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.9082146429066815"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.9759619031307067"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.6909577407549339"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.9617331917656395"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.8812110010796212"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.8838099194153428"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.6965455643486966"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.45256664035482363"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
