<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Cake extends \App\Entity\Cake implements \Doctrine\Persistence\Proxy
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
        "\0".parent::class."\0".'countVisit' => [parent::class, 'countVisit', null],
        "\0".parent::class."\0".'createdAt' => [parent::class, 'createdAt', null],
        "\0".parent::class."\0".'description' => [parent::class, 'description', null],
        "\0".parent::class."\0".'firstPicture' => [parent::class, 'firstPicture', null],
        "\0".parent::class."\0".'firstPictureFile' => [parent::class, 'firstPictureFile', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'lastVisit' => [parent::class, 'lastVisit', null],
        "\0".parent::class."\0".'pictureFiles' => [parent::class, 'pictureFiles', null],
        "\0".parent::class."\0".'pictures' => [parent::class, 'pictures', null],
        "\0".parent::class."\0".'spotlighted' => [parent::class, 'spotlighted', null],
        "\0".parent::class."\0".'title' => [parent::class, 'title', null],
        'countVisit' => [parent::class, 'countVisit', null],
        'createdAt' => [parent::class, 'createdAt', null],
        'description' => [parent::class, 'description', null],
        'firstPicture' => [parent::class, 'firstPicture', null],
        'firstPictureFile' => [parent::class, 'firstPictureFile', null],
        'id' => [parent::class, 'id', null],
        'lastVisit' => [parent::class, 'lastVisit', null],
        'pictureFiles' => [parent::class, 'pictureFiles', null],
        'pictures' => [parent::class, 'pictures', null],
        'spotlighted' => [parent::class, 'spotlighted', null],
        'title' => [parent::class, 'title', null],
    ];

    /**
     * @internal
     */
    public bool $__isCloning = false;

    public function __construct(?\Closure $initializer = null)
    {
        self::createLazyGhost($initializer, [
            "\0".parent::class."\0".'firstPictureFile' => true,
            "\0".parent::class."\0".'id' => true,
            "\0".parent::class."\0".'pictureFiles' => true,
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
