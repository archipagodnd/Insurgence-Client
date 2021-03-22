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
	<link rel="stylesheet" href="//play.pokemonshowdown.com/style/font-awesome.css?95545b00" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.27837717588198463" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.1079170160427283" />
	<link rel="stylesheet" href="//play.pokemonshowdown.com/style/battle.css?f1752e45" />
	<link rel="stylesheet" href="//play.pokemonshowdown.com/style/replay.css?84c2a3d4" />
	<link rel="stylesheet" href="//play.pokemonshowdown.com/style/utilichart.css?dbb7f7f2" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.48480774935456195"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.19036064760487936" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.02863160332234682">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8679751054671172">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.9385781479672883">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.30574326225918647">Forum</a></li>
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
	<script src="//play.pokemonshowdown.com/js/lib/jquery-1.11.0.min.js?eaec1712"></script>
	<script src="//play.pokemonshowdown.com/js/lib/lodash.core.js?f87de26d"></script>
	<script src="//play.pokemonshowdown.com/js/lib/backbone.js?6faf9dcf"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.24907825814550466"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//play.pokemonshowdown.com/js/lib/jquery-cookie.js?c840b994"></script>
	<script src="//play.pokemonshowdown.com/js/lib/html-sanitizer-minified.js?07b0d32d"></script>
	<script src="//play.pokemonshowdown.com/js/battle-sound.js?311c9fbc"></script>
	<script src="//play.pokemonshowdown.com/config/config.js?12bbb0b3"></script>
	<script src="//play.pokemonshowdown.com/js/battledata.js?6acecb69"></script>
	<script src="//play.pokemonshowdown.com/data/pokedex-mini.js?b02690be"></script>
	<script src="//play.pokemonshowdown.com/data/pokedex-mini-bw.js?5816bc97"></script>
	<script src="//play.pokemonshowdown.com/data/graphics.js?4b51c31e"></script>
	<script src="//play.pokemonshowdown.com/data/pokedex.js?c1d9f294"></script>
	<script src="//play.pokemonshowdown.com/data/items.js?b71ee2e5"></script>
	<script src="//play.pokemonshowdown.com/data/moves.js?c9b8987b"></script>
	<script src="//play.pokemonshowdown.com/data/abilities.js?60fdb748"></script>
	<script src="//play.pokemonshowdown.com/data/teambuilder-tables.js?720e2730"></script>
	<script src="//play.pokemonshowdown.com/js/battle-tooltips.js?0319218f"></script>
	<script src="//play.pokemonshowdown.com/js/battle.js?f4ba421b"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
