<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Order extends \App\Entity\Order implements \Doctrine\Persistence\Proxy
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
        "\0".parent::class."\0".'createdAt' => [parent::class, 'createdAt', null],
        "\0".parent::class."\0".'email' => [parent::class, 'email', null],
        "\0".parent::class."\0".'fullName' => [parent::class, 'fullName', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'invoiceNumber' => [parent::class, 'invoiceNumber', null],
        "\0".parent::class."\0".'location' => [parent::class, 'location', null],
        "\0".parent::class."\0".'message' => [parent::class, 'message', null],
        "\0".parent::class."\0".'phone' => [parent::class, 'phone', null],
        "\0".parent::class."\0".'seen' => [parent::class, 'seen', null],
        'createdAt' => [parent::class, 'createdAt', null],
        'email' => [parent::class, 'email', null],
        'fullName' => [parent::class, 'fullName', null],
        'id' => [parent::class, 'id', null],
        'invoiceNumber' => [parent::class, 'invoiceNumber', null],
        'location' => [parent::class, 'location', null],
        'message' => [parent::class, 'message', null],
        'phone' => [parent::class, 'phone', null],
        'seen' => [parent::class, 'seen', null],
    ];

    /**
     * @internal
     */
    public bool $__isCloning = false;

    public function __construct(?\Closure $initializer = null)
    {
        self::createLazyGhost($initializer, [
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
