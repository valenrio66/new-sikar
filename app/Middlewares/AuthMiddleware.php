<?php

namespace App\Middlewares;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use Config\Services;

class AuthMiddleware implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null): ?ResponseInterface
    {
        $session = Services::session();

        // Ganti 'auth' sesuai dengan nama kunci session yang menandakan user telah login
        if (!$session->has('logged_in')) {
            return redirect()->to(base_url('login/index'));
        }

        return null;
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null): ?ResponseInterface
    {
        return $response;
    }
}