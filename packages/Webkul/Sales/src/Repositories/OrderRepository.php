<?php

namespace Webkul\Sales\Repositories;

use Illuminate\Container\Container as App;
<<<<<<< HEAD
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\DB;
use Webkul\Core\Eloquent\Repository;
use Webkul\Sales\Contracts\Order;
use Webkul\Sales\Repositories\OrderItemRepository;
use Webkul\Core\Models\CoreConfig;

/**
 * Order Reposotory
=======
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;
use Webkul\Core\Eloquent\Repository;
use Webkul\Core\Models\CoreConfig;
use Webkul\Sales\Contracts\Order;
use Webkul\Sales\Models\Order as OrderModel;

/**
 * Order Repository
>>>>>>> 3dc905331bdf7f31caf86246f33b94353b5a6719
 *
 * @author    Jitendra Singh <jitendra@webkul.com>
 * @copyright 2018 Webkul Software Pvt Ltd (http://www.webkul.com)
 */
class OrderRepository extends Repository
{
    /**
     * OrderItemRepository object
     *
     * @var Object
     */
    protected $orderItemRepository;

    /**
     * DownloadableLinkPurchasedRepository object
     *
     * @var Object
     */
    protected $downloadableLinkPurchasedRepository;

    /**
     * Create a new repository instance.
     *
<<<<<<< HEAD
     * @param  Webkul\Sales\Repositories\OrderItemRepository                 $orderItemRepository
     * @param  Webkul\Sales\Repositories\DownloadableLinkPurchasedRepository $downloadableLinkPurchasedRepository
=======
     * @param Webkul\Sales\Repositories\OrderItemRepository                 $orderItemRepository
     * @param Webkul\Sales\Repositories\DownloadableLinkPurchasedRepository $downloadableLinkPurchasedRepository
     *
>>>>>>> 3dc905331bdf7f31caf86246f33b94353b5a6719
     * @return void
     */
    public function __construct(
        OrderItemRepository $orderItemRepository,
        DownloadableLinkPurchasedRepository $downloadableLinkPurchasedRepository,
        App $app
<<<<<<< HEAD
    )
    {
=======
    ) {
>>>>>>> 3dc905331bdf7f31caf86246f33b94353b5a6719
        $this->orderItemRepository = $orderItemRepository;

        $this->downloadableLinkPurchasedRepository = $downloadableLinkPurchasedRepository;

        parent::__construct($app);
    }

    /**
     * Specify Model class name
     *
     * @return Mixed
     */

<<<<<<< HEAD
    function model()
=======
    public function model()
>>>>>>> 3dc905331bdf7f31caf86246f33b94353b5a6719
    {
        return Order::class;
    }

    /**
     * @param array $data
<<<<<<< HEAD
=======
     *
>>>>>>> 3dc905331bdf7f31caf86246f33b94353b5a6719
     * @return mixed
     */
    public function create(array $data)
    {
        DB::beginTransaction();

        try {
            Event::fire('checkout.order.save.before', $data);

            if (isset($data['customer']) && $data['customer']) {
                $data['customer_id'] = $data['customer']->id;
                $data['customer_type'] = get_class($data['customer']);
            } else {
                unset($data['customer']);
            }

            if (isset($data['channel']) && $data['channel']) {
                $data['channel_id'] = $data['channel']->id;
                $data['channel_type'] = get_class($data['channel']);
                $data['channel_name'] = $data['channel']->name;
            } else {
                unset($data['channel']);
            }

            $data['status'] = 'pending';

            $order = $this->model->create(array_merge($data, ['increment_id' => $this->generateIncrementId()]));

            $order->payment()->create($data['payment']);

<<<<<<< HEAD
            if (isset($data['shipping_address']))
                $order->addresses()->create($data['shipping_address']);
=======
            if (isset($data['shipping_address'])) {
                $order->addresses()->create($data['shipping_address']);
            }
>>>>>>> 3dc905331bdf7f31caf86246f33b94353b5a6719

            $order->addresses()->create($data['billing_address']);

            foreach ($data['items'] as $item) {
<<<<<<< HEAD
=======
                Event::fire('checkout.order.orderitem.save.before', $data);

>>>>>>> 3dc905331bdf7f31caf86246f33b94353b5a6719
                $orderItem = $this->orderItemRepository->create(array_merge($item, ['order_id' => $order->id]));

                if (isset($item['children']) && $item['children']) {
                    foreach ($item['children'] as $child) {
                        $this->orderItemRepository->create(array_merge($child, ['order_id' => $order->id, 'parent_id' => $orderItem->id]));
                    }
                }

                $this->orderItemRepository->manageInventory($orderItem);

                $this->downloadableLinkPurchasedRepository->saveLinks($orderItem, 'available');
<<<<<<< HEAD
=======

                Event::fire('checkout.order.orderitem.save.after', $data);
>>>>>>> 3dc905331bdf7f31caf86246f33b94353b5a6719
            }

            Event::fire('checkout.order.save.after', $order);
        } catch (\Exception $e) {
            DB::rollBack();

            throw $e;
        }

        DB::commit();

        return $order;
    }

    /**
     * @param int $orderId
<<<<<<< HEAD
=======
     *
>>>>>>> 3dc905331bdf7f31caf86246f33b94353b5a6719
     * @return mixed
     */
    public function cancel($orderId)
    {
        $order = $this->findOrFail($orderId);

<<<<<<< HEAD
        if (! $order->canCancel())
            return false;
=======
        if (! $order->canCancel()) {
            return false;
        }
>>>>>>> 3dc905331bdf7f31caf86246f33b94353b5a6719

        Event::fire('sales.order.cancel.before', $order);

        foreach ($order->items as $item) {
<<<<<<< HEAD
            if (! $item->qty_to_cancel)
                continue;
=======
            if (! $item->qty_to_cancel) {
                continue;
            }
>>>>>>> 3dc905331bdf7f31caf86246f33b94353b5a6719

            $orderItems = [];

            if ($item->getTypeInstance()->isComposite()) {
                foreach ($item->children as $child) {
                    $orderItems[] = $child;
                }
            } else {
                $orderItems[] = $item;
            }
<<<<<<< HEAD
    
            foreach ($orderItems as $orderItem) {
                if ($orderItem->product)
                    $this->orderItemRepository->returnQtyToProductInventory($orderItem);
    
=======

            foreach ($orderItems as $orderItem) {
                if ($orderItem->product) {
                    $this->orderItemRepository->returnQtyToProductInventory($orderItem);
                }

>>>>>>> 3dc905331bdf7f31caf86246f33b94353b5a6719
                if ($orderItem->qty_ordered) {
                    $orderItem->qty_canceled += $orderItem->qty_to_cancel;
                    $orderItem->save();

                    if ($orderItem->parent && $orderItem->parent->qty_ordered) {
                        $orderItem->parent->qty_canceled += $orderItem->parent->qty_to_cancel;
                        $orderItem->parent->save();
                    }
                } else {
                    $orderItem->parent->qty_canceled += $orderItem->parent->qty_to_cancel;
                    $orderItem->parent->save();
                }
            }

            $this->downloadableLinkPurchasedRepository->updateStatus($item, 'expired');
        }

        $this->updateOrderStatus($order);

        Event::fire('sales.order.cancel.after', $order);

        return true;
    }

    /**
     * @return integer
     */
    public function generateIncrementId()
    {
        $config = new CoreConfig();

<<<<<<< HEAD
        $invoiceNumberPrefix = $config->where('code','=',"sales.orderSettings.order_number.order_number_prefix")->first()
            ? $config->where('code','=',"sales.orderSettings.order_number.order_number_prefix")->first()->value : false;

        $invoiceNumberLength = $config->where('code','=',"sales.orderSettings.order_number.order_number_length")->first()
            ? $config->where('code','=',"sales.orderSettings.order_number.order_number_length")->first()->value : false;

        $invoiceNumberSuffix = $config->where('code','=',"sales.orderSettings.order_number.order_number_suffix")->first()
            ? $config->where('code','=',"sales.orderSettings.order_number.order_number_suffix")->first()->value: false;
=======
        foreach ([  'Prefix' => 'prefix',
                    'Length' => 'length',
                    'Suffix' => 'suffix', ] as
                    $varSuffix => $confKey)
                {
                    $var = "invoiceNumber{$varSuffix}";
                    $$var = $config->where('code', '=', "sales.orderSettings.order_number.order_number_{$confKey}")->first() ?: false;
                }
>>>>>>> 3dc905331bdf7f31caf86246f33b94353b5a6719

        $lastOrder = $this->model->orderBy('id', 'desc')->limit(1)->first();
        $lastId = $lastOrder ? $lastOrder->id : 0;

<<<<<<< HEAD
        if ($invoiceNumberLength && ( $invoiceNumberPrefix || $invoiceNumberSuffix) ) {
            $invoiceNumber = $invoiceNumberPrefix . sprintf("%0{$invoiceNumberLength}d", 0) . ($lastId + 1) . $invoiceNumberSuffix;
=======
        if ($invoiceNumberLength && ($invoiceNumberPrefix || $invoiceNumberSuffix)) {
            $invoiceNumber = ($invoiceNumberPrefix->value) . sprintf("%0{$invoiceNumberLength->value}d", 0) . ($lastId + 1) . ($invoiceNumberSuffix->value);
>>>>>>> 3dc905331bdf7f31caf86246f33b94353b5a6719
        } else {
            $invoiceNumber = $lastId + 1;
        }

        return $invoiceNumber;
    }

    /**
     * @param mixed $order
<<<<<<< HEAD
=======
     *
>>>>>>> 3dc905331bdf7f31caf86246f33b94353b5a6719
     * @return void
     */
    public function isInCompletedState($order)
    {
        $totalQtyOrdered = $totalQtyInvoiced = $totalQtyShipped = $totalQtyRefunded = $totalQtyCanceled = 0;

<<<<<<< HEAD
        foreach ($order->items()->get()  as $item) {
=======
        foreach ($order->items()->get() as $item) {
>>>>>>> 3dc905331bdf7f31caf86246f33b94353b5a6719
            $totalQtyOrdered += $item->qty_ordered;
            $totalQtyInvoiced += $item->qty_invoiced;

            if (! $item->isStockable()) {
                $totalQtyShipped += $item->qty_ordered;
            } else {
                $totalQtyShipped += $item->qty_shipped;
            }

            $totalQtyRefunded += $item->qty_refunded;
            $totalQtyCanceled += $item->qty_canceled;
        }

        if ($totalQtyOrdered != ($totalQtyRefunded + $totalQtyCanceled)
            && $totalQtyOrdered == $totalQtyInvoiced + $totalQtyCanceled
<<<<<<< HEAD
            && $totalQtyOrdered == $totalQtyShipped + $totalQtyRefunded + $totalQtyCanceled)
            return true;
=======
            && $totalQtyOrdered == $totalQtyShipped + $totalQtyRefunded + $totalQtyCanceled) {
            return true;
        }
>>>>>>> 3dc905331bdf7f31caf86246f33b94353b5a6719

        return false;
    }

    /**
     * @param mixed $order
<<<<<<< HEAD
=======
     *
>>>>>>> 3dc905331bdf7f31caf86246f33b94353b5a6719
     * @return void
     */
    public function isInCanceledState($order)
    {
        $totalQtyOrdered = $totalQtyCanceled = 0;

        foreach ($order->items()->get() as $item) {
            $totalQtyOrdered += $item->qty_ordered;
            $totalQtyCanceled += $item->qty_canceled;
        }

        return $totalQtyOrdered === $totalQtyCanceled;
    }

    /**
     * @param mixed $order
<<<<<<< HEAD
=======
     *
>>>>>>> 3dc905331bdf7f31caf86246f33b94353b5a6719
     * @return void
     */
    public function isInClosedState($order)
    {
        $totalQtyOrdered = $totalQtyRefunded = $totalQtyCanceled = 0;

<<<<<<< HEAD
        foreach ($order->items()->get()  as $item) {
=======
        foreach ($order->items()->get() as $item) {
>>>>>>> 3dc905331bdf7f31caf86246f33b94353b5a6719
            $totalQtyOrdered += $item->qty_ordered;
            $totalQtyRefunded += $item->qty_refunded;
            $totalQtyCanceled += $item->qty_canceled;
        }

        return $totalQtyOrdered === $totalQtyRefunded + $totalQtyCanceled;
    }

    /**
     * @param mixed $order
<<<<<<< HEAD
=======
     *
>>>>>>> 3dc905331bdf7f31caf86246f33b94353b5a6719
     * @return void
     */
    public function updateOrderStatus($order)
    {
        $status = 'processing';

<<<<<<< HEAD
        if ($this->isInCompletedState($order))
            $status = 'completed';

        if ($this->isInCanceledState($order))
            $status = 'canceled';
        else if ($this->isInClosedState($order))
            $status = 'closed';
=======
        if ($this->isInCompletedState($order)) {
            $status = 'completed';
        }

        if ($this->isInCanceledState($order)) {
            $status = 'canceled';
        } elseif ($this->isInClosedState($order)) {
            $status = 'closed';
        }
>>>>>>> 3dc905331bdf7f31caf86246f33b94353b5a6719

        $order->status = $status;
        $order->save();
    }

    /**
     * @param mixed $order
<<<<<<< HEAD
=======
     *
>>>>>>> 3dc905331bdf7f31caf86246f33b94353b5a6719
     * @return mixed
     */
    public function collectTotals($order)
    {
        //Order invoice total
        $order->sub_total_invoiced = $order->base_sub_total_invoiced = 0;
        $order->shipping_invoiced = $order->base_shipping_invoiced = 0;
        $order->tax_amount_invoiced = $order->base_tax_amount_invoiced = 0;
        $order->discount_invoiced = $order->base_discount_invoiced = 0;

        foreach ($order->invoices as $invoice) {
            $order->sub_total_invoiced += $invoice->sub_total;
            $order->base_sub_total_invoiced += $invoice->base_sub_total;

            $order->shipping_invoiced += $invoice->shipping_amount;
            $order->base_shipping_invoiced += $invoice->base_shipping_amount;

            $order->tax_amount_invoiced += $invoice->tax_amount;
            $order->base_tax_amount_invoiced += $invoice->base_tax_amount;

            $order->discount_invoiced += $invoice->discount_amount;
            $order->base_discount_invoiced += $invoice->base_discount_amount;
        }

        $order->grand_total_invoiced = $order->sub_total_invoiced + $order->shipping_invoiced + $order->tax_amount_invoiced - $order->discount_invoiced;
        $order->base_grand_total_invoiced = $order->base_sub_total_invoiced + $order->base_shipping_invoiced + $order->base_tax_amount_invoiced - $order->base_discount_invoiced;

        //Order refund total
        $order->sub_total_refunded = $order->base_sub_total_refunded = 0;
        $order->shipping_refunded = $order->base_shipping_refunded = 0;
        $order->tax_amount_refunded = $order->base_tax_amount_refunded = 0;
        $order->discount_refunded = $order->base_discount_refunded = 0;
        $order->grand_total_refunded = $order->base_grand_total_refunded = 0;

        foreach ($order->refunds as $refund) {
            $order->sub_total_refunded += $refund->sub_total;
            $order->base_sub_total_refunded += $refund->base_sub_total;

            $order->shipping_refunded += $refund->shipping_amount;
            $order->base_shipping_refunded += $refund->base_shipping_amount;

            $order->tax_amount_refunded += $refund->tax_amount;
            $order->base_tax_amount_refunded += $refund->base_tax_amount;

            $order->discount_refunded += $refund->discount_amount;
            $order->base_discount_refunded += $refund->base_discount_amount;

            $order->grand_total_refunded += $refund->adjustment_refund - $refund->adjustment_fee;
            $order->base_grand_total_refunded += $refund->base_adjustment_refund - $refund->base_adjustment_fee;
        }

        $order->grand_total_refunded += $order->sub_total_refunded + $order->shipping_refunded + $order->tax_amount_refunded - $order->discount_refunded;
        $order->base_grand_total_refunded += $order->base_sub_total_refunded + $order->base_shipping_refunded + $order->base_tax_amount_refunded - $order->base_discount_refunded;

        $order->save();

        return $order;
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 3dc905331bdf7f31caf86246f33b94353b5a6719
