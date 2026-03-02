<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ContentStorage\Persistence;

use Generated\Shared\Transfer\ContentStorageTransfer;

interface ContentStorageEntityManagerInterface
{
    public function saveContentStorageEntity(ContentStorageTransfer $contentStorageTransfer): void;
}
