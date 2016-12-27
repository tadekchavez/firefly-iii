<?php
/**
 * ExportJobRepositoryInterface.php
 * Copyright (C) 2016 thegrumpydictator@gmail.com
 *
 * This software may be modified and distributed under the terms of the
 * Creative Commons Attribution-ShareAlike 4.0 International License.
 *
 * See the LICENSE file for details.
 */

declare(strict_types = 1);

namespace FireflyIII\Repositories\ExportJob;

use FireflyIII\Models\ExportJob;

/**
 * Interface ExportJobRepositoryInterface
 *
 * @package FireflyIII\Repositories\ExportJob
 */
interface ExportJobRepositoryInterface
{
    /**
     * @return bool
     */
    public function cleanup(): bool;

    /**
     * @return ExportJob
     */
    public function create(): ExportJob;

    /**
     * @param ExportJob $job
     * @param string    $status
     *
     * @return bool
     */
    public function changeStatus(ExportJob $job, string $status): bool;

    /**
     * @param ExportJob $job
     *
     * @return bool
     */
    public function exists(ExportJob $job): bool;

    /**
     * @param string $key
     *
     * @return ExportJob|null
     */
    public function findByKey(string $key): ExportJob;

    /**
     * @param ExportJob $job
     *
     * @return string
     */
    public function getContent(ExportJob $job): string;

}
