<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'example.com');

// Project repository
set('repository', 'git@github.com:rakeshf/etlprocess.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true); 

// Shared files/dirs between deploys 
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server 
add('writable_dirs', []);


// Hosts

host('example.com')
    ->set('deploy_path', '/var/www/html/etlprocess');    
    
// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

#before('deploy:symlink', 'artisan:migrate');

