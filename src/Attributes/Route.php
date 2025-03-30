<?php

namespace Wizardbeard\PhpHappyPath\Attributes;

use Attribute;
use function is_array;

#[Attribute(Attribute::IS_REPEATABLE | Attribute::TARGET_CLASS | Attribute::TARGET_METHOD)]
class Route
{
    private ?string $path = null;
    private array $localizedPaths = [];
    private array|string $methods;
    private array|string $schemes;

    /**
     * @param string|array|null $path The route path (i.e. "/user/login")
     * @param array|string $methods The list of HTTP methods allowed by this route
     * @param array|string $schemes The list of schemes allowed by this route (i.e. "https")
     */
    public function __construct(string|array|null $path = null, array|string $methods = [], array|string $schemes = [])
    {
        if (is_array($path)) {
            $this->localizedPaths = $path;
        } else {
            $this->setPath($path);
        }

        $this->setMethods($methods);
        $this->setSchemes($schemes);
    }

    public function getPath(): string|array|null
    {
        return $this->path;
    }

    public function setPath(string|array|null $path): void
    {
        $this->path = $path;
    }

    public function getLocalizedPaths(): array
    {
        return $this->localizedPaths;
    }

    public function setLocalizedPaths(array $localizedPaths): void
    {
        $this->localizedPaths = $localizedPaths;
    }

    public function getMethods(): array|string
    {
        return $this->methods;
    }

    public function setMethods(array|string $methods): void
    {
        $this->methods = $methods;
    }

    public function getSchemes(): array|string
    {
        return $this->schemes;
    }

    public function setSchemes(array|string $schemes): void
    {
        $this->schemes = $schemes;
    }
}

//if (!class_exists(\Wizardbeard\PhpHappyPath\Attributes\Route::class, false)) {
//    class_alias(Route::class, \Wizardbeard\PhpHappyPath\Attributes\Route::class);
//}
