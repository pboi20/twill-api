<?php

use Doctum\Doctum;
use Doctum\RemoteRepository\GitHubRemoteRepository;
use Symfony\Component\Finder\Finder;

$dir = './twill/src';

$iterator = Finder::create()
    ->files()
    ->name('*.php')
    ->in($dir);

return new Doctum($iterator, [
    'title'                => 'Twill API',
    'language'             => 'en',
    'build_dir'            => __DIR__ . '/docs/',
    'cache_dir'            => __DIR__ . '/cache/',
    'remote_repository'    => new GitHubRemoteRepository('area17/twill', dirname($dir)),
    'default_opened_level' => 2,
]);
