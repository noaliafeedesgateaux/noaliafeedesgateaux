<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Picture extends \App\Entity\Picture implements \Doctrine\Persistence\Proxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
        __clone as private __doClone;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'cake' => [parent::class, 'cake', null],
        "\0".parent::class."\0".'file' => [parent::class, 'file', null],
        "\0".parent::class."\0".'fileName' => [parent::class, 'fileName', null],
        "\0".parent::class."\0".'fileSize' => [parent::class, 'fileSize', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        'cake' => [parent::class, 'cake', null],
        'file' => [parent::class, 'file', null],
        'fileName' => [parent::class, 'fileName', null],
        'fileSize' => [parent::class, 'fileSize', null],
        'id' => [parent::class, 'id', null],
    ];

    /**
     * @internal
     */
    public bool $__isCloning = false;

    public function __construct(?\Closure $initializer = null)
    {
        self::createLazyGhost($initializer, [
            "\0".parent::class."\0".'file' => true,
            "\0".parent::class."\0".'id' => true,
            '__isCloning' => true,
        ], $this);
    }

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __clone()
    {
        $this->__isCloning = true;

        try {
            $this->__doClone();
        } finally {
            $this->__isCloning = false;
        }
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"], $properties['__isCloning']);

        return $properties;
    }
}
