<?php


namespace App\Controller;

use App\Form\DepartmentType;
use App\Model\Department;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/test", name="test")
     */
    public function test(Request $request)
    {
        $department = new Department();
        dump($department);
        $form = $this->createForm(DepartmentType::class, $department);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
dump($department);
        }

        return $this->render('form.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}