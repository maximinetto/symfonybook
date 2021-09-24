<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(Request $request): Response
    {
        $greet = '';
        $name = $request->query->get('hello');
        if(NULL !== $name){
            $greet = sprintf('<h1>Hola %s</h1>', htmlspecialchars($name));
        }
        return new Response(
            <<<EOF
        <html>
            <body>
                $greet
                <img src="/images/under-construction.gif" />
            </body>
        </html>
        EOF
        );
    }
}
