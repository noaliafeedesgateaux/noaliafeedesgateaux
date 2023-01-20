<?php

namespace ContainerX3A4xm2;

class PaginatorProxyF1004ff implements \Knp\Component\Pager\PaginatorInterface, \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyProxyTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        'lazyObjectReal' => [self::class, 'lazyObjectReal', null],
        "\0".self::class."\0lazyObjectReal" => [self::class, 'lazyObjectReal', null],
    ];
    public function initializeLazyObject(): \Knp\Component\Pager\PaginatorInterface
    {
        if (isset($this->lazyObjectReal)) {
            return $this->lazyObjectReal;
        }
        return $this;
    }
    public function paginate(mixed $target, int $page = 1, ?int $limit = null, array $options = []): \Knp\Component\Pager\Pagination\PaginationInterface
    {
        if (isset($this->lazyObjectReal)) {
            return $this->lazyObjectReal->paginate(...\func_get_args());
        }
        return throw new \BadMethodCallException('Cannot forward abstract method "Knp\Component\Pager\PaginatorInterface::paginate()".');
    }
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('PaginatorProxyF1004ff', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorProxyF1004ff', 'PaginatorProxyF1004ff', false);
}
