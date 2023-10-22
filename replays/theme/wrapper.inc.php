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
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.33169594059447105" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.7724519977246438" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.4191235276494545" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.6614272630101581" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.007828444288942249" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.23511011497293333" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.21159589667899792"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.982014053265259" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4928075910550407">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9073421270772348">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.7210495690702523">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.34751606367330234">Forum</a></li>
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
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.7307627626929676"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.2503946591099877"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.8753613359827619"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.03626199498526783"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.4753961045865005"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.9211847312563117"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.4659116143102353"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.764387055870714"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.5456694659578807"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.8195577384040991"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.4213003151308792"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.03949507327498569"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.8600060632150288"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.906958608937382"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.5397118023497303"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.19356063918164423"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.2894825868941657"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.30662193424414097"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.04773867519879871"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
