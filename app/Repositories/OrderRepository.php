<?php

use App\Interfaces\OrderRepositoryInterface;
use App\Models\Order;

class OrderRepository implements OrderRepositoryInterface
{
    public function getAllOrders()
    {
        return Order::all();
    }

    public function getOrderById($orderId)
    {
        return Order::findOrFail($orderId);
    }

    public function deleteOrder($orderId)
    {
        Order::destroy($orderId);
    }

    public function createOrder(array $orderDetails)
    {
        return Order::create($orderDetails);
    }

    public function updateOrder($orderId, array $orderDetails)
    {
        return Order::whereId($orderId)->update($orderDetails);
    }

    public function getFulfilledOrders()
    {
        return Order::where('is_fulfilled', true);
    }
}