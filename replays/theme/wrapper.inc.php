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
	<link rel="stylesheet" href="//play.pokemonshowdown.com/style/font-awesome.css?932f42c7" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.8183402070071681" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.7595604287020183" />
	<link rel="stylesheet" href="//play.pokemonshowdown.com/style/battle.css?a906ef60" />
	<link rel="stylesheet" href="//play.pokemonshowdown.com/style/replay.css?cfa51183" />
	<link rel="stylesheet" href="//play.pokemonshowdown.com/style/utilichart.css?e39c48cf" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.03241130252955182"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.2820467065992158" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.08144513733278846">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5122195332321544">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.9870777629697336">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.10680382176122061">Forum</a></li>
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
	<script src="//play.pokemonshowdown.com/js/lib/jquery-1.11.0.min.js?8fc25e27"></script>
	<script src="//play.pokemonshowdown.com/js/lib/lodash.core.js?e9be4c2d"></script>
	<script src="//play.pokemonshowdown.com/js/lib/backbone.js?8a8d8296"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.18568516383525835"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//play.pokemonshowdown.com/js/lib/jquery-cookie.js?38477214"></script>
	<script src="//play.pokemonshowdown.com/js/lib/html-sanitizer-minified.js?949c4200"></script>
	<script src="//play.pokemonshowdown.com/js/battle-sound.js?8e5efe0f"></script>
	<script src="//play.pokemonshowdown.com/config/config.js?11238684"></script>
	<script src="//play.pokemonshowdown.com/js/battledata.js?018a4784"></script>
	<script src="//play.pokemonshowdown.com/data/pokedex-mini.js?74da7144"></script>
	<script src="//play.pokemonshowdown.com/data/pokedex-mini-bw.js?d12cc6b5"></script>
	<script src="//play.pokemonshowdown.com/data/graphics.js?0b568292"></script>
	<script src="//play.pokemonshowdown.com/data/pokedex.js?9bd19424"></script>
	<script src="//play.pokemonshowdown.com/data/items.js?b694015b"></script>
	<script src="//play.pokemonshowdown.com/data/moves.js?c457f732"></script>
	<script src="//play.pokemonshowdown.com/data/abilities.js?12ceed20"></script>
	<script src="//play.pokemonshowdown.com/data/teambuilder-tables.js?6d0c8a1a"></script>
	<script src="//play.pokemonshowdown.com/js/battle-tooltips.js?8e4df587"></script>
	<script src="//play.pokemonshowdown.com/js/battle.js?1054d384"></script>
	<script src="/js/replay.js?1e09ceb9"></script>

</body></html>
<?php
}
