<?php
namespace App\Security;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\EntryPoint\AuthenticationEntryPointInterface;

class CustomEntryPoint implements AuthenticationEntryPointInterface
{
    public function start(Request $request, \Throwable $authException = null): Response
    {
        return new Response('Unauthorized Access', Response::HTTP_UNAUTHORIZED);
    }
}
