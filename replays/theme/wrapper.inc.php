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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.7430181002251914" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.003436335179079153" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.9699173302424591" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.43289608810948654" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.7272407024629406" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.27956635665024976" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.9428284228207648"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.7080935256260004" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6520613296706157">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.97857903371333">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.5667619470009093">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.8607737681758663">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.9226934469650212"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.8052251331049252"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.9671023886231478"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9951005908838739"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.6511164528883016"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.2555718540615768"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.22694860299002872"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.9385836772623659"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.5975718883061425"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.41284537364383156"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.3141420637869128"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.2945244846601536"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.0855177710365791"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.46974696533462135"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.19336668967551507"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.12971251130124117"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.38129871392526726"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.13166110269360387"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.2755569250485208"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
