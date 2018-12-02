<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class FileController extends Controller
{
    /**
     * @Route("/api/file/{id}", name="getFile", requirements={"id"="\d+"})
     */
    public function getFile($id)
    {
        $responseTextMock = "Token: 1qazxsw2, File ID: " . $id;

        return new JsonResponse($responseTextMock);
    }
}
