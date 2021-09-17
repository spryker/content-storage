<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ContentStorage\Business;

use Generated\Shared\Transfer\FilterTransfer;

interface ContentStorageFacadeInterface
{
    /**
     * Specification:
     * - Fetches content by IDs.
     * - Stores data as json encoded to storage table for current store locales and locales of stores that share persistence with the current store.
     * - Sends a copy of data to queue based on module config.
     *
     * @api
     *
     * @param array $contentIds
     *
     * @return void
     */
    public function publish(array $contentIds): void;

    /**
     * Specification:
     * - Returns an array of ContentTransfer.
     * - Uses FilterTransfer for pagination.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\FilterTransfer $filterTransfer
     *
     * @return array<\Generated\Shared\Transfer\ContentTransfer>
     */
    public function getContentTransfersByFilter(FilterTransfer $filterTransfer): array;
}
