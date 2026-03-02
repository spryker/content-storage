<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ContentStorage\Persistence\Propel\Mapper;

use Generated\Shared\Transfer\ContentStorageTransfer;
use Generated\Shared\Transfer\ContentTransfer;
use Generated\Shared\Transfer\LocalizedContentTransfer;
use Orm\Zed\Content\Persistence\SpyContent;
use Orm\Zed\ContentStorage\Persistence\SpyContentStorage;
use Propel\Runtime\Collection\ObjectCollection;

class ContentStorageMapper implements ContentStorageMapperInterface
{
    public function mapContentEntityToTransfer(SpyContent $contentEntity, ContentTransfer $contentTransfer): ContentTransfer
    {
        $contentTransfer->fromArray($contentEntity->toArray(), true);

        foreach ($contentEntity->getSpyContentLocalizeds() as $contentLocalizedEntity) {
            $localizedContentTransfer = new LocalizedContentTransfer();
            $localizedContentTransfer->fromArray($contentLocalizedEntity->toArray(), true);
            if ($contentLocalizedEntity->getFkLocale()) {
                $localizedContentTransfer->setLocaleName($contentLocalizedEntity->getSpyLocale()->getLocaleName());
            }

            $contentTransfer->addLocalizedContent($localizedContentTransfer);
        }

        return $contentTransfer;
    }

    /**
     * @param \Propel\Runtime\Collection\ObjectCollection<\Orm\Zed\Content\Persistence\SpyContent> $contentEntityCollection
     *
     * @return array<\Generated\Shared\Transfer\ContentTransfer>
     */
    public function mapContentEntityCollectionToContentTransfers(ObjectCollection $contentEntityCollection): array
    {
        $contentTransfers = [];

        foreach ($contentEntityCollection as $contentEntity) {
            $contentTransfers[] = $this->mapContentEntityToContentTransfer(
                $contentEntity,
                new ContentTransfer(),
            );
        }

        return $contentTransfers;
    }

    public function mapContentEntityToContentTransfer(SpyContent $contentEntity, ContentTransfer $contentTransfer): ContentTransfer
    {
        return $contentTransfer->fromArray($contentEntity->toArray(), true);
    }

    public function mapContentTransferToEntity(ContentTransfer $contentTransfer, SpyContent $contentEntity): SpyContent
    {
        $contentEntity->fromArray($contentTransfer->toArray());

        return $contentEntity;
    }

    public function mapContentStorageEntityToTransfer(
        SpyContentStorage $contentStorageEntity,
        ContentStorageTransfer $contentStorageTransfer
    ): ContentStorageTransfer {
        $contentStorageTransfer->fromArray($contentStorageEntity->toArray(), true);

        return $contentStorageTransfer;
    }

    public function mapContentStorageTransferToEntity(
        ContentStorageTransfer $contentStorageTransfer,
        SpyContentStorage $contentStorageEntity
    ): SpyContentStorage {
        $contentStorageEntity->fromArray($contentStorageTransfer->toArray());

        return $contentStorageEntity;
    }
}
