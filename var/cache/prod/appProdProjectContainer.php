<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEtunfte\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEtunfte/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerEtunfte.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerEtunfte\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerEtunfte\appProdProjectContainer(array(
    'container.build_hash' => 'Etunfte',
    'container.build_id' => 'cda0feb6',
    'container.build_time' => 1535853229,
));
