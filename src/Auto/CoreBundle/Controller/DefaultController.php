<?php

namespace Auto\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        /*$em = $this->getDoctrine()->getEntityManager();
        
        $la = new \Auto\CoreBundle\Entity\Categories();		
		$la->setName('Легковые автомобили');

		$ra = new \Auto\CoreBundle\Entity\Categories();		
		$ra->setName('Ретро автомобили');

		$gk = new \Auto\CoreBundle\Entity\Categories();		
		$gk->setName('Грузовые и коммерческие');
			$lk = new \Auto\CoreBundle\Entity\Categories();		
			$lk->setName('Легкие коммерческие');
			$lk->setParent($gk);
			$g = new \Auto\CoreBundle\Entity\Categories();		
			$g->setName('Грузовики');
			$g->setParent($gk);
			$st = new \Auto\CoreBundle\Entity\Categories();		
			$st->setName('Седельные тягачи');
			$st->setParent($gk);
			$a = new \Auto\CoreBundle\Entity\Categories();
			$a->setName('Автобусы');
			$a->setParent($gk);
			$p = new \Auto\CoreBundle\Entity\Categories();
			$p->setName('Прицепы');
			$p->setParent($gk);
		
		$em->persist($la);
		$em->persist($ra);
		$em->persist($gk);
		$em->persist($lk);
		$em->persist($g);
		$em->persist($st);
		$em->persist($a);
		$em->persist($p);
		$em->flush();*/
		$repo = $this->getDoctrine()->getEntityManager()->getRepository('AutoCoreBundle:Categories');
		$arrayTree = $repo->childrenHierarchy(
				null, /* starting from root nodes */
			    false, /* load all children, not only direct */
			    array('decorate' => true)
			);
		echo $arrayTree;exit;
		
    }
}
