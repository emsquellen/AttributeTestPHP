<?php

namespace Framework;
#[\Attribute(\Attribute::IS_REPEATABLE | \Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD)]
class Route {
    private string $route;

    public function __construct(string $route) {
        $this->route = $route;
    }

    public function getRoute(): string {
        return $this->route;
    }

    public function getArguments(): array {
        return explode('/', $this->route);
    }
}
