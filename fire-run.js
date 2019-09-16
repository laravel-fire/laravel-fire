#!/usr/bin/env node

var program     = require('commander');
var chalk       = require('chalk');
var exec        = require('child_process').exec;
var spawn       = require('child_process').spawn;
var path        = require('path');
var ncp         = require('ncp').ncp;
var mkdirp      = require('mkdirp');
var currentPath = process.cwd();
var fs          = require('fs');
var rimraf      = require('rimraf');


// NPM run
// console.log(chalk.green("npm run watch"));
// const child1 = spawn('npm run watch');
// child1.on('exit', function (code, signal) {
//   console.log('child process exited with ' +
//               `code ${code} and signal ${signal}`);
// });

// ARTISAN run
// console.log(chalk.green("php artisan serve"));
// const child2 = spawn('php artisan serve');
// child2.on('exit', function (code, signal) {
//   console.log('child process exited with ' +
//               `code ${code} and signal ${signal}`);
// });


// NPM run
console.log(chalk.green('npm run watch'));
exec('npm run watch', function(err, out, code) {
  if (err instanceof Error && err !== null) {
    console.error(chalk.red(err.message));
    return;
  }
  console.log(chalk.green('npm run watch finished!'));
});

// NPM run
console.log(chalk.green('php artisan serve'));
exec('php artisan serve', function(err, out, code) {
  if (err instanceof Error && err !== null) {
    console.error(chalk.red(err.message));
    return;
  }
  console.log(chalk.green('npm run watch finished!'));
});
