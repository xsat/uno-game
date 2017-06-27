<?php

namespace App\v1_0\Controllers;

/**
 * Class MemberController
 */
class MemberController extends BaseController
{
    /**
     * Test get method
     *
     * @param int $memberId
     */
    public function viewAction(int $memberId)
    {
        $this->response->setJsonContent([
            'memberId' => $memberId,
            'name' => $this->request->getQuery('name'),
        ]);
    }

    /**
     * Test post method
     */
    public function createAction()
    {
        $this->response->setJsonContent([
            'name' => $this->request->getPost('name'),
        ]);
    }

    /**
     * Test put method
     *
     * @param int $memberId
     */
    public function updateAction(int $memberId)
    {
        $this->response->setJsonContent([
            'memberId' => $memberId,
            'name' => $this->request->getPut('name'),
        ]);
    }

    /**
     * Test delete method
     *
     * @param int $memberId
     */
    public function deleteAction(int $memberId)
    {
        $this->response->setJsonContent([
            'memberId' => $memberId,
        ]);
    }
}
