<?php
namespace AppBundle\Controller\V1;

use FOS\RestBundle\Controller\Annotations\Delete;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Patch;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Routing\ClassResourceInterface;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpFoundation\Request;

/**
 * SongController.
 *
 * @author Alex Ception <alexandre@creakiwi.com>
 */
class SongController
{
    private function create(Request $request)
    {
    }

    private function update(Request $request)
    {
    }

    private function delete(Request $request)
    {
    }

    public function getAction(Request $request)
    {
    }

    public function newAction(Request $request)
    {
        return $this->create($request);
    }

    public function postAction(Request $request)
    {
        return $this->create($request);
    }

    public function editAction(Request $request)
    {
        return $this->update($request);
    }

    public function patchAction(Request $request)
    {
        return $this->update($request);
    }

    public function removeAction(Request $request)
    {
        return $this->delete($request);
    }

    public function deleteAction(Request $request)
    {
        return $this->delete($request);
    }
}
