<?php
namespace AppBundle\Utils;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\ORM\Tools\Pagination\Paginator;

class Pagination {

    private $container;
    private $em;
    private $maxPerPage;
    private $page;
    private $queryCount = '';
    private $query = '';
    private $nbPage;
    private $element;
    private $route;

    public function __construct(ContainerInterface $containerInterface)
    {
        $this->container = $containerInterface;
        $this->maxPerPage = $this->container->getParameter('max_articles_per_page',10);
        $this->em = $this->container->get('doctrine.orm.entity_manager');
    }

    public function transformQuery($qb)
    {
        $this->query = clone $qb;
        $alias = $qb->getRootAlias();
        $this->queryCount = $qb->select('count('.$alias.'.id)');
        $this->nbPage = $this->executeQuery($this->queryCount);
        $this->element = $this->executeQuery($this->query,true);

    }

    private function executeQuery($qb,$isPaginator=false)
    {
        if($isPaginator){
            $qb->setFirstResult(($this->page-1) * $this->maxPerPage)
                ->setMaxResults($this->maxPerPage);
            return new Paginator($qb);
        }
        return $qb->getQuery()->getSingleScalarResult();
    }




    /**
     * @return mixed
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param mixed $page
     */
    public function setPage($page)
    {
        $this->page = $page;
    }

    public function getParameters(){
        return array(
            'page' => $this->page,
            'route' => $this->route,
            'pages_count' => ceil($this->nbPage / $this->maxPerPage),
            'route_params' => array()
        );
    }

    /**
     * @return mixed
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * @param mixed $route
     */
    public function setRoute($route)
    {
        $this->route = $route;
    }

    /**
     * @return mixed
     */
    public function getElement()
    {
        return $this->element;
    }

    /**
     * @param mixed $element
     */
    public function setElement($element)
    {
        $this->element = $element;
    }
}