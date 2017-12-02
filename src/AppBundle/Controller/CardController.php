<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;
use AppBundle\Entity\Card;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpKernel\Exception\HttpException;

/**
 * Description of CardController
 *
 * @author LENOVO
 */
class CardController extends  FOSRestController{
     /**
     * Returns all enumeration values.
     * 
     * @return View
     * 
     */
    public function getCardAction($serie)  {
        $data = $this->getDoctrine()->getManager()->getRepository(Card::class)->findOneBySerie($serie);

        if (!$data) {
            throw new HttpException(404, "card with the id $id not found");
        }
        $view = View::create()
                ->setStatusCode(200)
                ->setData($data);

        return $this->get('fos_rest.view_handler')->handle($view);
    }

}
