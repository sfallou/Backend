<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYewph5l\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYewph5l/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerYewph5l.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerYewph5l\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerYewph5l\appProdProjectContainer(array(
    'container.build_hash' => 'Yewph5l',
    'container.build_id' => '43789854',
    'container.build_time' => 1544123593,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerYewph5l');
