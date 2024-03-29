<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ContentStorage\Business\ContentStorage;

interface ContentStorageWriterInterface
{
    /**
     * @param array<int> $contentIds
     *
     * @return void
     */
    public function publish(array $contentIds): void;
}
