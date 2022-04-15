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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.6666096150843703" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.13809198424299862" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.10859520090835151" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.6041657488087617" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.7265700378452529" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.6086877265333912" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.2486604594063091"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.537103912336911" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8933438446363733">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8981687464472485">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.5268889105618382">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.21504072286287412">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.7043721702634493"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.9245889708050326"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.4831106827139766"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9794266734516541"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.3717577300218662"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.4718122320933418"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.8092657219662429"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.694201114739994"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.8284334738549142"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.30076565284586754"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.7083811972751819"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.5765896338227643"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.0531875097053216"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.9697368621240321"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.15402863300380365"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.635542332013401"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.7707436385457747"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.7980322445336503"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.8244291367180865"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
