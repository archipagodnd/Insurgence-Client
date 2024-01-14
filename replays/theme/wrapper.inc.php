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
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.6650811254934461" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.5778945674564373" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.3767440737000527" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.510719232837221" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.325284206092991" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.3565079619872795" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.5261207291297685"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.16309236929333215" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5001588088444824">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9470069835176371">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.8321315829594955">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.5940068659717284">Forum</a></li>
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
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.13901965995440158"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.5307303948133044"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.7733329989465316"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.756329240150525"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.8491166668106478"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.23023761911037366"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.8490904844127294"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.7403616151514385"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.3397493596063079"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.2480753459679963"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.8679614920592944"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.17061469430055154"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.7180054496576582"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.3641144937510499"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.7965777074375506"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.15502520718644042"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.1521957864552277"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.10033799380146302"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.5024544894573171"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
