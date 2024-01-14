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
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.2412210160440944" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.832515689775255" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.15784451398779176" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.10723398905987436" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.9967270848324599" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.5965026006710497" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.20263342012570806"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.5662286559229812" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7528676258228562">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.04396061369080018">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.056659313609443984">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.5738145816826044">Forum</a></li>
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
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.7616559707659436"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.31046582730227756"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.48786508357021097"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.24212742521558583"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.5375591258160803"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.47905418964086266"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.35697611065645307"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.6379432094139277"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.29228945955754426"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.3764218733961089"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.21407319431410388"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.8906126867217736"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.2882836596075917"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.6324044521149068"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.8576976301770958"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.3067351826200526"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.1596035649121028"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.6398278202796612"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.12155563573110206"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
