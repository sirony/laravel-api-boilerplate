<?php

namespace App\Interfaces;

//https://www.twilio.com/blog/repository-pattern-in-laravel-application

interface OrderRepositoryInterface
{
    public function getAllOrders();
    public function getOrderById($orderId);
    public function deleteOrder($orderId);
    public function createOrder(array $orderDetails);
    public function updateOrder($orderId, array $orderDetails);
    public function getFulfilledOrders();
}