<?php

// Mollie Shopware Plugin Version: 1.4

namespace Mollie\Api\Resources;

class OrderCollection extends \Mollie\Api\Resources\CursorCollection
{
    /**
     * @return string
     */
    public function getCollectionResourceName()
    {
        return "orders";
    }
    /**
     * @return BaseResource
     */
    protected function createResourceObject()
    {
        return new \Mollie\Api\Resources\Order($this->client);
    }
}