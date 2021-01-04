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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6830052602806602" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/panels.css?0.837945996768084" />
	<link rel="stylesheet" href="//scoopapa-dh.glitch.me/theme/main.css?0.6191866280750127" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7784614038131965" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6548194877835838" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9854096903745777" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/?0.3616594110870537"><img src="//scoopapa-dh.glitch.me/images/pokemonshowdownbeta.png?0.3324333381832547" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.15214862650621375">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8456811511857232">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//scoopapa-dh.glitch.me/ladder/?0.16029820941284223">Ladder</a></li>
				<li><a class="button nav-last" href="//scoopapa-dh.glitch.me/forums/?0.36274453144034924">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.06844131849535096"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7420328784145827"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.23944360820490895"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4249095825933813"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5604305113420593"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5455774553484452"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.36318580441563286"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.40165241877834545"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.23165440624625577"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9251480928099536"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.3654999183676857"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.27732383819431417"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.3525455301564182"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6464376122498572"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.1880757580971124"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.4217759364412337"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.2942634897932357"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.28840093755922624"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.829324822317844"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
