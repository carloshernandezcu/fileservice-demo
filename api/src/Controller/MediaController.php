<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @Route("/api/media")
 */
class MediaController extends AbstractController
{
    public function __construct()
    {
        //
    }

    public function saveMediaAction()
    {
        //
    }

    /**
     * @Route("/{id}", name="media_get", methods={"GET"})
     * @param $id
     * @return Response
     */
    public function getMediaAction($id)
    {
        $fileObject = array(
            "id" => $id,
            "filename" => "test" . $id
        );

        return new JsonResponse(
            $fileObject,
            Response::HTTP_OK
        );
    }

    /**
     * @Route("", name="media_get_list", methods={"GET"})
     * @return Response
     */
    public function getMediasAction()
    {
        $fileObject = array(
            "id" => 1324,
            "filename" => "test1234"
        );
        $fileObjects = array($fileObject);

        return new JsonResponse(
            $fileObjects,
            Response::HTTP_OK
        );
    }
}
