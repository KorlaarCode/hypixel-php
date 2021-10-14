<?php

namespace Plancke\HypixelPHP\fetch;

/**
 * Class Response
 * @package Plancke\HypixelPHP\fetch
 */
class Response {

    protected $success = false;
    protected $data;
    protected $responseHeaders;

    function __construct() {
    }

    /**
     * @return mixed
     */
    public function wasSuccessful() {
        return $this->success;
    }

    /**
     * @param boolean $success
     * @return $this
     */
    public function setSuccessful($success) {
        $this->success = $success;
        return $this;
    }

    /**
     * @return array
     */
    public function getData() {
        return $this->data;
    }

    /**
     * @param $data
     * @return $this
     */
    public function setData($data) {
        $this->data = $data;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHeaders() {
        return $this->responseHeaders;
    }

    /**
     * @param mixed $responseHeaders
     * @return $this
     */
    public function setHeaders($responseHeaders) {
        $this->responseHeaders = $responseHeaders;
        return $this;
    }

}