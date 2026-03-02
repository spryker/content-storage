<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\ContentStorage;

use Spryker\Client\ContentStorage\ContentStorage\ContentStorageReader;
use Spryker\Client\ContentStorage\ContentStorage\ContentStorageReaderInterface;
use Spryker\Client\ContentStorage\Dependency\Client\ContentStorageToStorageClientInterface;
use Spryker\Client\ContentStorage\Dependency\Service\ContentStorageToSynchronizationServiceInterface;
use Spryker\Client\ContentStorage\Dependency\Service\ContentStorageToUtilEncodingServiceInterface;
use Spryker\Client\Kernel\AbstractFactory;

class ContentStorageFactory extends AbstractFactory
{
    public function createContentStorage(): ContentStorageReaderInterface
    {
        return new ContentStorageReader(
            $this->getStorageClient(),
            $this->getSynchronizationService(),
            $this->getUtilEncodingService(),
        );
    }

    public function getStorageClient(): ContentStorageToStorageClientInterface
    {
        return $this->getProvidedDependency(ContentStorageDependencyProvider::CLIENT_STORAGE);
    }

    public function getSynchronizationService(): ContentStorageToSynchronizationServiceInterface
    {
        return $this->getProvidedDependency(ContentStorageDependencyProvider::SERVICE_SYNCHRONIZATION);
    }

    public function getUtilEncodingService(): ContentStorageToUtilEncodingServiceInterface
    {
        return $this->getProvidedDependency(ContentStorageDependencyProvider::SERVICE_UTIL_ENCODING);
    }
}
