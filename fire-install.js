#!/usr/bin/env node

var program = require('commander');
var chalk = require('chalk');
var exec = require('child_process').exec;
var path = require('path');
var ncp = require('ncp').ncp;
var mkdirp = require('mkdirp');
var currentPath = process.cwd();
var fs = require('fs');
var rimraf = require('rimraf');


// NPM install
console.log(chalk.green('Installing process started:'));
console.log(chalk.green(' - npm install'));
exec('npm install', function(err, out, code) {
  if (err instanceof Error && err !== null) {
    console.error(chalk.red(err.message));
    return;
  }

  // ARTISAN install
  console.log(chalk.green(' - composer install'));
  exec('composer install', function(err, out, code) {
    if (err instanceof Error && err !== null) {
      console.error(chalk.red(err.message));
      return;
    }
    console.log(chalk.green('Everything installed!'));
  });
});
