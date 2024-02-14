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
<<<<<<< HEAD
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.20587991821347673" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.8391603895553255" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.443568298554033" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.6837035456445022" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.3372768801003423" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.6471721366935625" />
=======
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.07637527901957086" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.4246586928599607" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.6310869300321837" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.8465291362058716" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.5451443133468163" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.990882001153133" />
>>>>>>> parent of 962643e2 (testagain)

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
<<<<<<< HEAD
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.3104992790727934"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.8667623061731207" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8802259507628387">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7255958940129963">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.33851338096092976">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.4081949624659822">Forum</a></li>
=======
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.9800338208581716"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.10772479924133815" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9330172611715675">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.1573073701234975">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.339096017330915">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.31874241636718326">Forum</a></li>
>>>>>>> parent of 962643e2 (testagain)
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
<<<<<<< HEAD
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.10688962300382454"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.4323171514807236"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.3593900399019869"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.26182454156945156"></script>
=======
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.7891967060844347"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.5003847011988258"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.4153990895833939"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.881863599437646"></script>
>>>>>>> parent of 962643e2 (testagain)
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

<<<<<<< HEAD
	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.5414368610900484"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.5016928063485131"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.8867444889415395"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.3353734271157025"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.2956740844160153"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.2204489884990506"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.7756456980980404"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.2649243758888038"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.7419101263789316"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.31991549574425004"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.793584722618117"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.937254960245075"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.249944937989943"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.5424656098711751"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.5481790571762861"></script>
=======
	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.0323918479786629"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.30020220825369814"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.3064552596244994"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.8848986477266994"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.8835111031493386"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.5128226894542407"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.8947485109885918"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.5333013454223361"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.5206414352881401"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.6256198500745396"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.6730046911002674"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.5158762375120265"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.685894314106342"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.3471419156283919"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.06260930342226034"></script>
>>>>>>> parent of 962643e2 (testagain)
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
