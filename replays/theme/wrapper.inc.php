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
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.7574870842368489" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.4855623353361871" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.16682286145036773" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.25244153586594353" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.6404350744112259" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.00904868590258423" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.8755263395153179"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.7690934122370126" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.47488109642458287">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4828585120526714">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.8402617969954314">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.8078939180514664">Forum</a></li>
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
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.3267532933665589"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.2637190664961597"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.6370294928516975"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9653419366652298"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.22442024074424927"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.34832067390528443"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.33353760336940486"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.20613804112556267"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.5002744056801376"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.9639673540701172"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.3803789726077029"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.7650225555969128"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.560416481368788"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.6097588318933811"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.2987585510512276"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.08044848077857614"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.997620660591622"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.7758341046886794"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.39198593684737215"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
