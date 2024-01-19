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
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.4896865544180813" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.9148438093125442" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.7137061515133274" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.572953320187434" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.6091768443210592" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.7556748130263171" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.639588472078404"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.5208649521675914" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6126353415871655">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3617561185361411">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.2336344698100008">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.30932499863527974">Forum</a></li>
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
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.5242534814566975"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.7299178185659654"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.2942030987440467"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.027864571037477415"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.8679556335568186"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.7981968025100794"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.8547005395691485"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.9525019998184734"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.8935810094028613"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.15840247255171103"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.2566408580168571"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.24712745402517022"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.18619374248887066"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.8495176777072393"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.12306569950824353"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.5599323854241878"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.6206318206231107"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.6484651228961915"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.03561677876546754"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
