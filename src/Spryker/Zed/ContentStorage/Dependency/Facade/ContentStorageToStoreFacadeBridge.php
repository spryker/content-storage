<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ContentStorage\Dependency\Facade;

use Generated\Shared\Transfer\StoreTransfer;

class ContentStorageToStoreFacadeBridge implements ContentStorageToStoreFacadeInterface
{
    /**
     * @var \Spryker\Zed\Store\Business\StoreFacade
     */
    protected $storeFacade;

    /**
     * @param \Spryker\Zed\Store\Business\StoreFacade $storeFacade
     */
    public function __construct($storeFacade)
    {
        $this->storeFacade = $storeFacade;
    }

    /**
     * @param \Generated\Shared\Transfer\StoreTransfer $storeTransfer
     *
     * @return \Generated\Shared\Transfer\StoreTransfer[]
     */
    public function getStoresWithSharedPersistence(StoreTransfer $storeTransfer)
    {
        return $this->storeFacade->getStoresWithSharedPersistence($storeTransfer);
    }
    /**
     * @return \Generated\Shared\Transfer\StoreTransfer
     */
    public function getCurrentStore(): StoreTransfer
    {
        return $this->storeFacade->getCurrentStore();
    }
}
