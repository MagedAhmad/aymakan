<?php

namespace MagedAhmad\Aymakan\Controllers;

use MagedAhmad\Aymakan\Services\AymakanService;

class AymakanController extends BaseController
{
    public $aymakanService;

    public function __construct(AymakanService $aymakanService)
    {
        $this->aymakanService = $aymakanService;

        parent::__construct();
    }

    public function pingApi()
    {
        return $this->send('GET', '/ping');
    }

    public function createShipment($data)
    {
        $this->aymakanService->validateShipmentData($data);

        return $this->send('POST', '/shipping/create', $data);
    }

    public function getCityList()
    {
        return $this->send('GET', '/cities');
    }

    public function createBulkShipment($data)
    {
        return $this->send('POST', '/shipping/create/bulk_shipping', $data);
    }

    public function createReversePickupShipment($data)
    {
        return $this->send('POST', '/shipping/create/reverse_pickup', $data);
    }

    public function trackShipment(array $tracking)
    {
        $tracking = implode(',', $tracking);

        return $this->send('GET', '/shipping/track/' . $tracking);
    }

    public function shipmentByReference(array $references)
    {
        $references = implode(',', $references);

        return $this->send('GET', '/shipping/by_reference/' . $references);
    }

    public function cancelShipment($data)
    {
        return $this->send('POST', '/shipping/cancel', $data);
    }

    public function cancelShipmentByReference(array $reference)
    {
        return $this->send('POST', '/shipping/cancel_by_reference', $reference);
    }

    public function getShipmentLabel($tracking)
    {
        return $this->send('GET', '/shipping/awb/tracking/' . $tracking);
    }

    public function getBulkShipmentLabel(array $tracking)
    {
        $tracking = implode(',', $tracking);

        return $this->send('GET', '/shipping/bulk_awb/trackings/' . $tracking);
    }

    public function getCustomerShipments()
    {
        return $this->send('GET', '/customer/shipments');
    }

    public function pickupRequest()
    {
        return $this->send('GET', '/pickup_request/list');
    }

    public function createPickupRequest($data)
    {
        return $this->send('POST', '/pickup_request/create',$data);
    }

    public function cancelPickupRequest($data)
    {
        return $this->send('POST', '/pickup_request/cancel',$data);
    }

    public function timeSlots($data)
    {
        return $this->send('GET', '/time_slots/'.$data);
    }

    public function getAddress()
    {
        return $this->send('GET', '/address/list');
    }

    public function createAddress($data)
    {
        return $this->send('POST', '/address/create', $data);
    }

    public function updateAddress($data)
    {
        return $this->send('PUT', '/address/update', $data);
    }

    public function deleteAddress($data)
    {
        return $this->send('DELETE', '/address/delete',$data);
    }

    public function getWebHook()
    {
        return $this->send('GET', '/webhooks/list');
    }

    public function createWebHook($data)
    {
        return $this->send('POST', '/webhooks/create', $data);
    }

    public function updateWebHook($data)
    {
        return $this->send('PUT', '/webhooks/update', $data);
    }

    public function deleteWebHook()
    {
        return $this->send('DELETE', '/webhooks/delete');
    }

}
