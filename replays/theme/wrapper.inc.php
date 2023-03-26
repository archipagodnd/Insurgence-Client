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
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.030990123478586096" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.7309209983655411" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.4705998620669427" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.632282064634222" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.41425451061694796" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.11780844161965809" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.7016676401333606"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.8064380157632203" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8354039974800767">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4707117542551251">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.8523718674710337">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.5601893876980248">Forum</a></li>
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
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.040393039137601505"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.2783662986419271"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.24264519803166174"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4141162724068286"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.6763759819890192"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.6833107964055836"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.024900081371632687"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.43512151010308053"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.6940117890793593"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.08805284288985771"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.8022448320404676"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.29996044520353626"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.2999398472552792"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.7185866497305098"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.6152070044842726"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.09074595462933188"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.8028947449344279"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.000986201196483849"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.28917092448204196"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
