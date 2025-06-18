<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();

        // Cek login
        if (!$session->get('logged_in')) {
            return redirect()->to('/login')->with('error', 'Silakan login terlebih dahulu');
        }

        // Cek role jika ada argument
        if ($arguments && isset($arguments[0])) {
            $roleRequired = $arguments[0];
            $userRole = $session->get('user_role');

            if ($userRole !== $roleRequired) {
                return redirect()->to('/unauthorized')->with('error', 'Anda tidak punya akses');
            }
        }

        // Jika lolos semua, lanjut
        return;
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Tidak perlu apa-apa di sini
    }
}
