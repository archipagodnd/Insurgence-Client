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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.3386507139768966" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.308185303880931" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.794607260845672" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.31791863819857413" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.5919774833671951" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.9391865984182497" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.9256909541426854"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.562927907581241" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7209601125049958">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9787332797469286">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.07172433298947367">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.4363862906569862">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.06196277691823315"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.3300068620895735"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.8797545109703451"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6486131042604173"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.3618431219910492"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.6058654048024548"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.8581899535093611"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.2160100303151924"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.33589216741400074"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.6818258521334093"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.12332068610823432"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.18339641389067562"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.20549738685351038"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.793027140861722"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.9214753007929095"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.6936860761841563"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.3123452763635881"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.05242215983756027"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.3104581897573879"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
