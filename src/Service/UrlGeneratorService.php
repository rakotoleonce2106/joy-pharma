<?php

namespace App\Service;

use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

readonly class UrlGeneratorService
{
    public function __construct(private UrlGeneratorInterface $urlGenerator)
    {
    }

    public function generate(string $route, array $parameters = []): string
    {
        return $this->urlGenerator->generate($route, $parameters);
    }
}
