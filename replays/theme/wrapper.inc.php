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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.23633170614220766" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.5587007406809243" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.9780441866723519" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.8566954947132661" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.9329758658549208" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.07160045570997253" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.31748243317463776"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.04742399565512345" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.669518823736827">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7161141708884233">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.6912417024212703">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.8447743504754557">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.571435806806672"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.49282219453562703"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.797703877248082"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8800733477472682"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.6179791331703157"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.07706063090447302"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.9795191843447637"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.9690796218020847"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.8886835432287821"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.06046296140962837"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.6346135505232058"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.9640112350565364"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.7187880187942679"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.7005795229088665"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.2772283915603937"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.46218317930564456"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.6230723481428451"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.7985196289295462"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.9632579858632198"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
