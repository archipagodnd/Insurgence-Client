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
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.23679858030985734" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.37770316211549093" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.42638351816393816" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.4974633989906738" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.3968179784341095" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.5074692494919351" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.43437308599684465"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.9409330031960039" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.11883765540464686">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.0704370720860048">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.3377799215317372">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.9934888752868294">Forum</a></li>
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
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.8557048380077605"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.6004129335897974"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.5982483455977481"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.16072668587553762"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.3085916037601639"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.5540170567374325"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.8268352823812373"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.33290100622681185"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.8852628936050424"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.7463665048274863"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.7657078028209205"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.8279935907991371"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.4593451481298516"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.8902776565112744"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.3740377173494156"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.8418351913188629"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.6134280065520519"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.8728917343522418"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.8889089384827236"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
