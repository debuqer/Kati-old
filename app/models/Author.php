<?php
namespace App\App\Models ;
/**
 * @Entity @Table(name="authors")
 **/
class Author
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;

    /** @Column(type="string") **/
    protected $name;

    /** @Column(type="string") **/
    protected $web;

    /**
     * @Column(type="date", nullable=true)
     */

    public function getId()
    {
        return $this->id ;
    }

    public function setName($name)
    {
       $this->name = $name ;
    }

    public function getName()
    {
        return $this->name ;
    }

    public function setWeb($web)
    {
       $this->web = $web ;
    }

    public function getWeb()
    {
        return $this->web ;
    }

    public function setDate($date)
    {
       $this->date = $date ;
    }

    public function getDate()
    {
        return $this->date ;
    }
}
