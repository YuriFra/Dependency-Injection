<?php

namespace App\Controller;

use App\Entity\Capitalize;
use App\Entity\ChangeSpaces;
use App\Entity\Master;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request as PostRequest;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class MasterController extends AbstractController
{
    /**
     * @Route("/", name="master")
     * @param PostRequest $request
     * @return Response
     */
    public function index(PostRequest $request): Response
    {
        $message = $request->request->get('message');
        $transform = $request->request->get('transform');
        if (!empty($message)) {
            $log = new Logger('messages');
            //$log->pushHandler(new StreamHandler('log.info', Logger::INFO));
            if ($transform === 'capitalize') {
                $master = new Master($message, new Capitalize(), $log);
            } else {
                $master = new Master($message, new ChangeSpaces(), $log);
            }
            $transformMsg = $master->getUserInput();
        } else {
            $transformMsg = "";
        }
        return $this->render('master/index.html.twig', [
        'transformMsg' => $transformMsg
        ]);
    }
}
