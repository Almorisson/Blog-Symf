<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNONdkcH\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNONdkcH/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNONdkcH.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNONdkcH\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerNONdkcH\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'NONdkcH',
    'container.build_id' => '9b765208',
    'container.build_time' => 1567436793,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNONdkcH');
