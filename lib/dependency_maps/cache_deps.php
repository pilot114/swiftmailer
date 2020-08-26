<?php

Swift_DependencyContainer::getInstance()
    ->register('cache')
    ->asAliasOf('cache.array')

    ->register('tempdir')
    ->asValue('/tmp')

    ->register('cache.null')
    ->asSharedInstanceOf(\Swift_KeyCache_NullKeyCache::class)

    ->register('cache.array')
    ->asSharedInstanceOf(\Swift_KeyCache_ArrayKeyCache::class)
    ->withDependencies(['cache.inputstream'])

    ->register('cache.disk')
    ->asSharedInstanceOf(\Swift_KeyCache_DiskKeyCache::class)
    ->withDependencies(['cache.inputstream', 'tempdir'])

    ->register('cache.inputstream')
    ->asNewInstanceOf(\Swift_KeyCache_SimpleKeyCacheInputStream::class)
;
