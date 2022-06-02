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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.10085112120971274" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.43592829495351104" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.9965313120429189" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.18138787100080278" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.45416338984733473" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.6524059759383132" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.8766403436529184"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.9882573762768017" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8259142413644225">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.14068031849959794">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.9057201224813984">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.7707797319441589">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.2464711803845132"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.37011619143410934"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.059737614788143434"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7296122215683221"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.030312263552293217"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.23537844478559"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.06425418515871661"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.5933155695977648"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.8205484550531166"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.2587028778335214"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.03833825602110319"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.5861426433103207"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.22134991337921428"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.8966398589208582"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.7975925286577543"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.9227233853066241"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.996602758404749"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.6566419280414162"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.7040752037548452"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
