<?php

declare(strict_types=1);

namespace Owl\Component\Setting\Repository;

use Sylius\Component\Resource\Repository\RepositoryInterface;

interface SettingRepositoryInterface extends RepositoryInterface
{
    public function finAllBySection(string $section): array;
}
