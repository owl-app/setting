<?php

declare(strict_types=1);

namespace Owl\Component\Setting\Repository;

use Sylius\Component\Resource\Repository\RepositoryInterface;
use Owl\Component\Setting\Model\SettingInterface;

/**
 * @template T of SettingInterface
 *
 * @extends RepositoryInterface<T>
 */
interface SettingRepositoryInterface extends RepositoryInterface
{
    public function finAllBySection(string $section): array;

    public function finAllBySectionAndKeys(string $section, array $keys): array;
}
