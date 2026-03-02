<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ContentStorage\Persistence\Propel\Mapper;

use Generated\Shared\Transfer\ContentStorageTransfer;
use Generated\Shared\Transfer\ContentTransfer;
use Orm\Zed\Content\Persistence\SpyContent;
use Orm\Zed\ContentStorage\Persistence\SpyContentStorage;
use Propel\Runtime\Collection\ObjectCollection;

interface ContentStorageMapperInterface
{
    public function mapContentEntityToTransfer(SpyContent $contentEntity, ContentTransfer $contentTransfer): ContentTransfer;

    /**
     * @param \Propel\Runtime\Collection\ObjectCollection<\Orm\Zed\Content\Persistence\SpyContent> $contentEntityCollection
     *
     * @return array<\Generated\Shared\Transfer\ContentTransfer>
     */
    public function mapContentEntityCollectionToContentTransfers(ObjectCollection $contentEntityCollection): array;

    public function mapContentEntityToContentTransfer(SpyContent $contentEntity, ContentTransfer $contentTransfer): ContentTransfer;

    public function mapContentTransferToEntity(ContentTransfer $contentTransfer, SpyContent $contentEntity): SpyContent;

    public function mapContentStorageEntityToTransfer(
        SpyContentStorage $contentStorageEntity,
        ContentStorageTransfer $contentStorageTransfer
    ): ContentStorageTransfer;

    public function mapContentStorageTransferToEntity(
        ContentStorageTransfer $contentStorageTransfer,
        SpyContentStorage $contentStorageEntity
    ): SpyContentStorage;
}
