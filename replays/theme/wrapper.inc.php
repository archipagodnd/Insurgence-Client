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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.500611918824305" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.665190364661248" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.9286089874089263" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.3454629329514354" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.127841899847158" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.06410532101919597" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.5627147708382894"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.13031299469610325" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6626206752625348">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9493809323600417">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.7895717101824895">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.9252483649014553">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.17806137139486"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.38348324754753316"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.43266286025074985"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4872571753038495"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.11264062610292735"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.7208878811921797"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.2934681100213399"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.31150623973011315"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.6209326509471522"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.9936872940334962"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.2115686343719836"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.6135056415910642"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.7042402175405551"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.9141845420240997"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.2959052424679707"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.20312840760724127"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.32178642490348386"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.16715029471889964"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.4738878020913162"></script>
	<script src="/js/replay.js?1e09ceb9"></script>

</body></html>
<?php
}
