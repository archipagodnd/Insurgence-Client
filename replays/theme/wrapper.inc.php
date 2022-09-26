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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.4938129025087745" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.8013731829833366" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.1032203031367338" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.35719138953368956" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.40994038150116197" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.2040616309900869" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.5801130273882764"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.9707308226473637" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.45047225026343884">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.08554907059664352">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.966654368563862">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.10162853849033548">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.7308489486647911"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.44509015275528685"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.863127957149276"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4304951146189262"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.34001337261427333"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.6736107567815985"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.754561689828428"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.7588361124946246"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.06594718412096179"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.9004438166192177"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.02117847792600447"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.9861666111347933"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.7050338151820905"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.7704657973761866"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.028261716703525286"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.9931612295306886"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.04588925220902085"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.33440323179044706"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.08469597042604837"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
