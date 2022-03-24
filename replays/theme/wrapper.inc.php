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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.6547711344380427" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.08425968181506827" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.27846502757936364" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.7424274593738691" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.4683987566645955" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.22237538594835216" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.7782793679363804"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.8141051753073856" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9531924590992493">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.1806742000296815">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.16401898289320438">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.9570661721514124">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.0790304880435273"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.3066892250103712"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.43968989430835714"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4226656343078381"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.3534198136874396"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.24691415275395223"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.45702637066256147"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.9512042665306859"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.4498132413046336"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.6332029265999819"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.7058222766787581"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.9854669472821778"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.6792498701620286"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.7247589715647904"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.19478859273519533"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.8996657645409227"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.1181800113057887"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.2372294388080205"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.5465678763900159"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
