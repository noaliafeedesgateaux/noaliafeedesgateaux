<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerX4KwoVS\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerX4KwoVS/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerX4KwoVS.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerX4KwoVS\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerX4KwoVS\App_KernelDevDebugContainer([
    'container.build_hash' => 'X4KwoVS',
    'container.build_id' => '888864ea',
    'container.build_time' => 1674724337,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerX4KwoVS');
