<?php

namespace ApiClientBase;

interface Client
{
    public function send(RequestInterface $request): ResponseInterface;
}