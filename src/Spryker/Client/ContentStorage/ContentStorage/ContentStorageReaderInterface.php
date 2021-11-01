<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\ContentStorage\ContentStorage;

use Generated\Shared\Transfer\ContentTypeContextTransfer;

interface ContentStorageReaderInterface
{
    /**
     * @param string $contentKey
     * @param string $localeName
     *
     * @return \Generated\Shared\Transfer\ContentTypeContextTransfer|null
     */
    public function findContentTypeContextByKey(string $contentKey, string $localeName): ?ContentTypeContextTransfer;

    /**
     * @param array<string> $contentKeys
     * @param string $localeName
     *
     * @return array<string, \Generated\Shared\Transfer\ContentTypeContextTransfer>
     */
    public function getContentTypeContextByKeys(array $contentKeys, string $localeName): array;
}
