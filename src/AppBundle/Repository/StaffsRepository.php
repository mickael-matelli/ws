<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * StaffsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class StaffsRepository extends EntityRepository
{
    public function getList($staffRequest = null,$page=1, $maxperpage=10)
    {
        $qb = $this->_em->createQueryBuilder()
                       ->select('s')
                       ->from($this->_entityName, 's');
        $where = array();
        $parameters = array();
        if($staffRequest->getFirstName()) {
            $where[] = 's.firstName LIKE :pFirstName';
            $parameters['pFirstName'] = '%'.$staffRequest->getFirstName().'%';
        }
        if($staffRequest->getLastName()) {
            $where[] = 's.lastName LIKE :pLastName';
            $parameters['pLastName'] = '%'.$staffRequest->getLastName().'%';
        }
		if($staffRequest->getMatricule()) {
			$where[] = 's.matricule = :pMatricule';
            $parameters['pMatricule'] = $staffRequest->getMatricule();
		}
		if($staffRequest->getNetSalary()) {
			$where[] = 's.netSalary = :pNetSalary';
            $parameters['pNetSalary'] = $staffRequest->getNetSalary();
		}
		$nee = $staffRequest->getBirthDate();
		if($nee){
			$beginDate = $nee;
			$beginDate->setTime(0,0,0);
			$parameters['beginDate'] = $beginDate;
			$lastDate = $beginDate->add(new \DateInterval("P1D"));
			$lastDate->setTime(0,0,0);
			$parameters['lastDate'] = $lastDate;
			$where[] = 's.birthDate BETWEEN :beginDate AND :lastDate';
		}
        if(!empty($where)){
            $qb->where($where[0]);
            $andWhere = array_shift($where);
           if(!empty($where)){
                foreach ($where as $key => $value) {
                   $qb->andWhere($value); 
                }
            }
            
        }
        if(!empty($parameters)){
            $qb->setParameters($parameters);
        }
        
        $qb->setFirstResult(($page-1) * $maxperpage)
            ->setMaxResults($maxperpage);
 
        return new Paginator($qb);
    }
    
    public function count($staffRequest = null)
    {
        $qb = $this->_em->createQueryBuilder()
                        ->select('COUNT(s.id)')
                        ->from($this->_entityName, 's');
        $where = array();
        $parameters = array();
        if($staffRequest->getFirstName()){
            $where[] = 's.firstName LIKE :pFirstName';
            $parameters['pFirstName'] = '%'.$staffRequest->getFirstName().'%';
        }
        if($staffRequest->getLastName()){
            $where[] = 's.lastName LIKE :pLastName';
            $parameters['pLastName'] = '%'.$staffRequest->getLastName().'%';
        }
		if($staffRequest->getMatricule()) {
			$where[] = 's.matricule = :pMatricule';
            $parameters['pMatricule'] = $staffRequest->getMatricule();
		}
		if($staffRequest->getNetSalary()) {
			$where[] = 's.netSalary = :pNetSalary';
            $parameters['pNetSalary'] = $staffRequest->getNetSalary();
		}
		$nee = $staffRequest->getBirthDate();
		if($nee){
			$beginDate = $nee;
			$beginDate->setTime(0,0,0);
			$parameters['beginDate'] = $beginDate;
			$lastDate = $beginDate->add(new \DateInterval("P1D"));
			$lastDate->setTime(0,0,0);
			$parameters['lastDate'] = $lastDate;
			$where[] = 's.birthDate BETWEEN :beginDate AND :lastDate';
		}
        if(!empty($where)){
            $qb->where($where[0]);
            $andWhere = array_shift($where);
            if(!empty($where)){
                foreach ($where as $key => $value) {
                   $qb->andWhere($value); 
                }
            }
        }
        if(!empty($parameters)){
            $qb->setParameters($parameters);
        }
        return $qb->getQuery()->getSingleScalarResult();
    }
}
