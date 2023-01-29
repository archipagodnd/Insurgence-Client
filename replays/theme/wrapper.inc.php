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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.7661434100554116" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.7810706849237716" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.3884000036558315" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.8791158523381422" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.666204590786386" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.6797059651013269" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.6623450131194535"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.060880426367670326" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.1900813089229516">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.22418070136155155">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.8324259355778909">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.18295750146363488">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.9760591993416043"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.05950043732134369"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.6901574462139897"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9438530570865158"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.8025632558758082"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.03783788787259601"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.07371602487564166"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.23880638476626492"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.9202340563806899"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.7438432466496354"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.09820345642766215"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.06280108884077507"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.652957520491968"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.42362712104120837"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.7612887666207178"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.8784530528120786"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.3527515494722824"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.758776840085942"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.9425904048822022"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
