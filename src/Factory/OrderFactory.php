<?php


namespace App\Factory;


use App\Entity\Order;
use App\Entity\OrderItem;
use App\Entity\Articles;

/**
 * Class OrderFactory
 * @package App\Factory
 */
class OrderFactory
{
    /**
     * Creates an order.
     *
     * @return Order
     */
    public function create(): Order
    {
        $order = new Order();
        $order
            ->setStatus(Order::STATUS_CART)
            ->setCreatedAt(new \DateTime())
            ->setUpdatedAt(new \DateTime());

        return $order;
    }

    /**
     * Creates an item for a Articles.
     *
     * @param Articles $Articles
     *
     * @return OrderItem
     */
    public function createItem(Articles $Articles): OrderItem
    {
        $item = new OrderItem();
        $item->setArticles($Articles);
        $item->setQuantity(1);

        return $item;
    }
}