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
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.036560016945897944" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.34571623015831765" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.17363637576706425" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.6152486696144059" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.35684942205559" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.08217845290223269" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.05668893494444549"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.3637484640714519" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.1592896559062149">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.49853730689520526">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.6340705106072919">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.6255684484922015">Forum</a></li>
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
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.992960570506696"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.14167767498880401"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.32314366512528037"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5642599941022244"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.9926085755308085"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.05442969665434183"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.7782067306333513"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.9105879235061969"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.5153554295148293"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.3413970757244884"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.5373377041051255"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.3496406708897595"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.8982414258638711"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.3685172657247948"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.1409610061425277"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.43134129986992753"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.09178010980511808"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.49756574931007025"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.2306657224294355"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
