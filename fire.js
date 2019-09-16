#!/usr/bin/env node

var program = require('commander');
var chalk = require('chalk');
var exec = require('child_process').exec;
var path = require('path');
var ncp = require('ncp').ncp;
var mkdirp = require('mkdirp');
var currentPath = process.cwd();
var fs = require('fs');

program
  .version('0.0.4', '-v, --version')
  .description('GUI tool for laravel')
  .command('install ', 'install current package').alias('i')
  .command('run ', 'run current gui').alias('r')
  // .command('search [query]', 'search with optional query').alias('s')
  // .command('list', 'list packages installed')
  // .command('publish', 'publish the package').alias('p')
  .parse(process.argv);

// here .command() is invoked with a description,
// and no .action(callback) calls to handle sub-commands.
// this tells commander that you're going to use separate
// executables for sub-commands, much like git(1) and other
// popular tools.

// here only ./pm-install(1) is implemented, however you
// would define ./pm-search(1) and ./pm-list(1) etc.

// Try the following:
//   ./examples/pm
//   ./examples/pm help install
//   ./examples/pm install -h
//   ./examples/pm install foo bar baz
//   ./examples/pm install foo bar baz --force
