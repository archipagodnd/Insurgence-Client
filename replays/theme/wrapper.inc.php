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
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.8629927255089977" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.2873916419436826" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.9821088826654327" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.8293112994668159" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.7514413518231351" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.8745385166003012" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.6030966666788846"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.8023809832188775" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9437452138322362">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.41849414623708503">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.7123888940049381">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.5049819183684636">Forum</a></li>
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
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.7535698376314643"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.5931944653643348"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.46116925833757505"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.588130172042653"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.6757839086946995"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.7914941241339795"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.0453572776237674"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.627194926863776"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.24463219461030805"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.3815653321833212"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.4314546815540663"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.23061921672393737"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.2953405524046282"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.8059448892035124"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.17796858040319385"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.3176866409169652"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.03149097637518583"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.45930649935521806"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.38743235110482277"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
