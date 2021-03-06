<?php

namespace Shapecode\Devliver\Service;

use Shapecode\Devliver\Entity\PackageInterface;
use Shapecode\Devliver\Entity\User;

/**
 * Interface PackagesDumperInterface
 *
 * @package Shapecode\Devliver\Service
 * @author  Nikita Loges
 */
interface PackagesDumperInterface
{

    /**
     * @param User             $user
     * @param PackageInterface $package
     *
     * @return string
     */
    public function dumpPackageJson(User $user, PackageInterface $package): string;

    /**
     * @param User $user
     *
     * @return string
     */
    public function dumpPackagesJson(User $user): string;

    /**
     * @param User             $user
     * @param PackageInterface $package
     *
     * @return string
     */
    public function hashPackageJson(User $user, PackageInterface $package): string;
}
