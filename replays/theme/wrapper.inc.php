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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.915447818751242" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.2098756550569958" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.652922924966759" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.6907822053341226" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.5098635654222667" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.1716916680499332" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.529114506210703"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.08876034349550443" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7063064748003534">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.1466038860089267">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.5301531660061569">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.7328246951328492">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.5836160971188877"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.00511350468640881"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.28701625639482575"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.09413567939118139"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.551006181366049"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.22642358247200112"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.7277808257928948"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.7297728329051036"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.6214552668571769"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.08029212862994872"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.2575089682175715"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.8178372998954611"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.8363805146301677"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.5585524485168847"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.020090981278837017"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.8336742365246221"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.3388838202490454"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.17618878869745314"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.19410077222534827"></script>
	<script src="/js/replay.js?1e09ceb9"></script>

</body></html>
<?php
}
