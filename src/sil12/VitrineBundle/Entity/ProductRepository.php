<?php

namespace sil12\VitrineBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ProductRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductRepository extends EntityRepository
{
	public function findAllOrderedByFilter($idCat) {
		//var_dump($filter);die;
		return $this->getEntityManager()
					->createQuery('SELECT p FROM sil12VitrineBundle:Product p WHERE p.category=:idCat')
					->setParameters( array('idCat' => $idCat))
					->getResult();
	}

	public function lastAdd($max) {
		return $this->getEntityManager()
					->createQuery('SELECT p FROM sil12VitrineBundle:Product p ORDER BY p.id DESC')
					->setMaxResults($max)
					->getResult();
	}
}
