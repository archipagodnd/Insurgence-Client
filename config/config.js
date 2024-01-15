var Config = Config || {};

/* version */ Config.version = "0";

Config.bannedHosts = ['cool.jit.su', 'pokeball-nixonserver.rhcloud.com'];

Config.whitelist = [
	'wikipedia.org',

	// The full list is maintained outside of this repository so changes to it
	// don't clutter the commit log. Feel free to copy our list for your own
	// purposes; it's here: https://play.pokemonshowdown.com/config/config.js

	// If you would like to change our list, simply message Zarel on Smogon or
	// Discord.
];

// `defaultserver` specifies the server to use when the domain name in the
// address bar is `Config.routes.client`.
Config.defaultserver = {
	id: 'showdown',
	host: '85.232.197.53',
	port: 80,
	httpport: 25565,
	altport: 80,
	registered: true
};

Config.roomsFirstOpenScript = function () {
};

Config.customcolors = {
	'zarel': 'aeo'
};
/*** Begin automatically generated configuration ***/
Config.version = "0.11.2 (05077a84)";

Config.routes = {
	root: 'pokemonshowdown.com',
	client: 'battling.p-insurgence.com',
	dex: 'dex.pokemonshowdown.com',
	replays: 'battling.p-insurgence.com/replays',
	users: 'pokemonshowdown.com/users',
};
/*** End automatically generated configuration ***/