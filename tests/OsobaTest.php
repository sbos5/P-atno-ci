<?php
namespace App\tests;
use App\Entity\Osoba;
use PHPUnit\Framework\TestCase;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OsobaTest
 *
 * @author Sławomir
 */
class OsobaTest extends TestCase
{
  // public $jan='jan';
    
   public function testSetName( )
   {
       $osoba=new Osoba();
       $nam=$osoba->setName('jan');
       $man=$osoba->getName();
        $this->assertEquals('jan',$man);
   }
}
