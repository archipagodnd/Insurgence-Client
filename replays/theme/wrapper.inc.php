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
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.7902579046519587" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.3461797327862055" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.14194520866959492" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.19907478161456793" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.943517196534752" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.718887744219729" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.5593687029063144"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.27608686014437556" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.1784037222183803">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6571693137420249">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.48793673212420674">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.44837852107196796">Forum</a></li>
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
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.4886193811974757"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.9308534718923738"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.2965304668530493"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.28318571199551035"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.19138994226773187"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.07688122018309063"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.6164074831692856"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.7941016280836108"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.05616120663467106"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.4559739462865606"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.8464507620863335"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.8628173400275396"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.5607013161561174"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.7057616597874532"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.48193493498342743"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.15750788507072477"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.12199596131074664"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.3579319029963146"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.9500664135810228"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
