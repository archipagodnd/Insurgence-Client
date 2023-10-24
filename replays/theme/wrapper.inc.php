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
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.7032587045441201" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.013928448021804485" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.2679728209069874" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.5519155013671155" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.7109398245007288" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.8036978202677363" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.28547503923593776"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.03501862863321614" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7846241636418554">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2805245555861058">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.6062496994822881">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.8654860264856228">Forum</a></li>
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
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.8754516424358627"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.8924107374495946"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.4865696993206825"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3044221201344366"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.20785081588270726"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.0489723031976379"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.7998082588835858"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.20910524847342749"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.4942185318845391"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.7027643886004322"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.1974838971571955"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.7389421743810145"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.2945596896117446"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.4968877478811593"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.702610198179312"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.3984303069695092"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.7519103392780655"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.5328037952553175"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.3389320517244583"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
