<?php

namespace Shapecode\Devliver\Entity;

use Composer\Package\CompletePackage;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\PersistentCollection;

/**
 * Interface PackageInterface
 *
 * @package Shapecode\Devliver\Entity
 * @author  Nikita Loges
 */
interface PackageInterface extends BaseEntityInterface
{

    /**
     * @return Repo
     */
    public function getRepo(): Repo;

    /**
     * @param Repo $repo
     */
    public function setRepo(Repo $repo): void;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param string $name
     */
    public function setName(string $name): void;

    /**
     * @return bool
     */
    public function isAutoUpdate(): bool;

    /**
     * @param bool $autoUpdate
     */
    public function setAutoUpdate(bool $autoUpdate): void;

    /**
     * @return \DateTime|null
     */
    public function getLastUpdate(): ?\DateTime;

    /**
     * @param \DateTime $lastUpdate
     */
    public function setLastUpdate(\DateTime $lastUpdate): void;

    /**
     * @return ArrayCollection|PersistentCollection|Version[]
     */
    public function getVersions(): Collection;

    /**
     * @return ArrayCollection|Version[]
     */
    public function getVersionsSorted(): Collection;

    /**
     * @return bool
     */
    public function hasVersions(): bool;

    /**
     * @inheritdoc
     */
    public function addVersion(VersionInterface $version): void;

    /**
     * @inheritdoc
     */
    public function removePackage(VersionInterface $version): void;

    /**
     * @return CompletePackage[]
     */
    public function getPackages(): array;

    /**
     * @return CompletePackage
     */
    public function getLastStablePackage(): CompletePackage;
}
