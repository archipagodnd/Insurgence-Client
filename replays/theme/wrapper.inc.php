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
	<link rel="stylesheet" href="//battlingtest.p-insurgence.com/style/font-awesome.css?0.1749978410444235" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.7900632497925351" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.5554385651811955" />
	<link rel="stylesheet" href="//battlingtest.p-insurgence.com/style/battle.css?0.4915763082334641" />
	<link rel="stylesheet" href="//battlingtest.p-insurgence.com/style/replay.css?0.6050628474434394" />
	<link rel="stylesheet" href="//battlingtest.p-insurgence.com/style/utilichart.css?0.47972495760340506" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26211653-1']);
		_gaq.push(['_setDomainName', 'battlingtest.p-insurgence.com']);
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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.4680173205643188"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.4471644519401572" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.40018181678345277">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6906364731376657">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.8692401685860951">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.6326107754029793">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="https://battlingtest.p-insurgence.com/">Play</a></li>
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
	<script src="//battlingtest.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.23806253239641673"></script>
	<script src="//battlingtest.p-insurgence.com/js/lib/lodash.core.js?0.515073552191095"></script>
	<script src="//battlingtest.p-insurgence.com/js/lib/backbone.js?0.5344120524333915"></script>
        <script src="//dex.pokemonshowdown.com/js/panels.js"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battlingtest.p-insurgence.com/js/lib/jquery-cookie.js?0.3306351741359632"></script>
	<script src="//battlingtest.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.9649943128486858"></script>
	<script src="//battlingtest.p-insurgence.com/js/battle-sound.js?0.5149434956226178"></script>
	<script src="//battlingtest.p-insurgence.com/config/config.js?0.697023961072059"></script>
	<script src="//battlingtest.p-insurgence.com/js/battledata.js?0.9130924755646284"></script>
	<script src="//battlingtest.p-insurgence.com/data/pokedex-mini.js?0.08908478053884927"></script>
	<script src="//battlingtest.p-insurgence.com/data/pokedex-mini-bw.js?0.45489997206098365"></script>
	<script src="//battlingtest.p-insurgence.com/data/graphics.js?0.7843733627643246"></script>
	<script src="//battlingtest.p-insurgence.com/data/pokedex.js?0.13307876822693077"></script>
	<script src="//battlingtest.p-insurgence.com/data/items.js?0.8992159426828938"></script>
	<script src="//battlingtest.p-insurgence.com/data/moves.js?0.5044180476172606"></script>
	<script src="//battlingtest.p-insurgence.com/data/abilities.js?0.2630871703351221"></script>
	<script src="//battlingtest.p-insurgence.com/data/teambuilder-tables.js?0.40371366084129523"></script>
	<script src="//battlingtest.p-insurgence.com/js/battle-tooltips.js?0.31980639224400376"></script>
	<script src="//battlingtest.p-insurgence.com/js/battle.js?0.4095765791663146"></script>
	<script src="//battlingtest.p-insurgence.com/replays/js/replay.js"></script>

</body></html>
<?php
}
