<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPwvBgjz\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPwvBgjz/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPwvBgjz.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPwvBgjz\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPwvBgjz\App_KernelDevDebugContainer([
    'container.build_hash' => 'PwvBgjz',
    'container.build_id' => 'abe0bdce',
    'container.build_time' => 1612363248,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPwvBgjz');
