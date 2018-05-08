<?php

namespace nickurt\HostFact\Api;

class Invoices extends AbstractApi
{
    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function add($params)
    {
        return $this->post(array_merge(['controller' => 'invoice', 'action' => 'add'], $params));
    }

    /**
     * @return Attachments
     */
    public function attachments()
    {
        return new \nickurt\HostFact\Api\Attachments($this);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function block($params)
    {
        return $this->post(array_merge(['controller' => 'invoice', 'action' => 'block'], $params));
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function cancelSchedule($params)
    {
        return $this->post(array_merge(['controller' => 'invoice', 'action' => 'cancelschedule'], $params));
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function credit($params)
    {
        return $this->post(array_merge(['controller' => 'invoice', 'action' => 'credit'], $params));
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function delete($params)
    {
        return $this->post(array_merge(['controller' => 'invoice', 'action' => 'delete'], $params));
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function download($params)
    {
        return $this->post(array_merge(['controller' => 'invoice', 'action' => 'download'], $params));
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function edit($params)
    {
        return $this->post(array_merge(['controller' => 'invoice', 'action' => 'edit'], $params));
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function list($params)
    {
        return $this->post(array_merge(['controller' => 'invoice', 'action' => 'list'], $params));
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function markAsPaid($params)
    {
        return $this->post(array_merge(['controller' => 'invoice', 'action' => 'markaspaid'], $params));
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function markAsUnpaid($params)
    {
        return $this->post(array_merge(['controller' => 'invoice', 'action' => 'markasunpaid'], $params));
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function partPayment($params)
    {
        return $this->post(array_merge(['controller' => 'invoice', 'action' => 'partpayment'], $params));
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function paymentProcessPause($params)
    {
        return $this->post(array_merge(['controller' => 'invoice', 'action' => 'paymentprocesspause'], $params));
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function paymentProcessReactivate($params)
    {
        return $this->post(array_merge(['controller' => 'invoice', 'action' => 'paymentprocessreactivate'], $params));
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function schedule($params)
    {
        return $this->post(array_merge(['controller' => 'invoice', 'action' => 'schedule'], $params));
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function sendByEmail($params)
    {
        return $this->post(array_merge(['controller' => 'invoice', 'action' => 'sendbyemail'], $params));
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function sendReminderByEmail($params)
    {
        return $this->post(array_merge(['controller' => 'invoice', 'action' => 'sendreminderbyemail'], $params));
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function sendSummationByEmail($params)
    {
        return $this->post(array_merge(['controller' => 'invoice', 'action' => 'sendsummationbyemail'], $params));
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function show($params)
    {
        return $this->post(array_merge(['controller' => 'invoice', 'action' => 'show'], $params));
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function unblock($params)
    {
        return $this->post(array_merge(['controller' => 'invoice', 'action' => 'unblock'], $params));
    }
}