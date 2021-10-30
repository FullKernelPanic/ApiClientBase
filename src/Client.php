<?php

namespace ApiClientBase;

interface Client
{
    /**
     * @throws ApiException
     */
    public function send(RequestInterface $request): ResponseInterface;
}