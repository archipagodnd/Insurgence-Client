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
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.9003491130823404" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.40882062739645053" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.04833001016626781" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.8477164199374554" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.5860636547813867" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.2807296555664911" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.0716646628231381"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.9042466520220684" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2934897830827423">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8870787989751443">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.07633992831491332">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.49732012292358774">Forum</a></li>
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
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.7707091167510163"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.5149106056416954"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.4138457995976528"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8545118797953624"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.3053970323501318"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.9818755908405388"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.736516241912367"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.7215578553300968"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.31362382531724675"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.528951577654083"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.34691555050067424"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.6775895891783454"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.9895323556419491"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.19786696252455793"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.19827055801427806"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.30091277390270643"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.5857589143510129"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.2001138831366287"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.26201819156482475"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
