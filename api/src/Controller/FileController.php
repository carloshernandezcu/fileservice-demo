<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class FileController extends AbstractController
{
    /**
     * @Route("/api/file/{id}", name="getFile", requirements={"id"="\d+"})
     */
    public function getFile($id)
    {
        $responseTextMock = "Token: 1qazxsw23edcvfr4, File ID: " . $id;

        return new JsonResponse($responseTextMock);
    }
}
