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
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.29039189342883365" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.6575343492200021" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.5118890260499542" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.23873497092184448" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.35150538753539795" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.27843131294964785" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.44891851224993284"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.030491017920753816" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7588157315687258">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8736389997235519">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.6723559731489883">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.922561719817989">Forum</a></li>
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
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.05294910712966949"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.11825144286349976"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.1544204001615619"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.24290848145572452"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.8922551860114343"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.11918482406893371"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.014618751284167342"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.802803255953032"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.15641807308187117"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.43210155287266394"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.23564702029086582"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.9999508472129137"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.24613177621637106"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.20105564013416588"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.6892338674728884"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.77418092136436"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.5830392702540417"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.5243263045715698"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.11810386798646211"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
