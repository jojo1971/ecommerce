<?php
namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\Media;

class MediaData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $Media1 = new Media();
        $Media1->setPath('http://www.conseil-astuce.com/wp-content/uploads/2015/12/choisir-les-legumes-de-saison.png');
        $Media1->setAlt('Légumes');
        $manager->persist($Media1);

        $Media2 = new Media();
        $Media2->setPath('https://s-media-cache-ak0.pinimg.com/236x/61/2d/f1/612df1afc7dd2655ae4aeba00cfa3ee5.jpg');
        $Media2->setAlt('Fruits');
        $manager->persist($Media2);

        $Media3 = new Media();
        $Media3->setPath('http://cuisine.larousse.fr/lcfilestorage/8A/DA/POIVRON_D_636x380.jpg');
        $Media3->setAlt('Poivrons rouges');
        $manager->persist($Media3);

        $Media4 = new Media();
        $Media4->setPath('http://www.academiedufruitetlegume.fr/wp-content/uploads/2014/09/piment.jpg');
        $Media4->setAlt('Piments');
        $manager->persist($Media4);

        $Media5 = new Media();
        $Media5->setPath('http://www.asifueshow.com/uploads/1/7/0/5/17053602/7019692_orig.jpg');
        $Media5->setAlt('Tomates');
        $manager->persist($Media5);

        $Media6 = new Media();
        $Media6->setPath('http://www.jardineravecjeanpaul.fr/wp-content/uploads/2011/04/Poivron.jpg');
        $Media6->setAlt('Poivrons verts');
        $manager->persist($Media6);

        $Media7 = new Media();
        $Media7->setPath('http://www.regimes-detox.com/images/raisins.png');
        $Media7->setAlt('Raisin');
        $manager->persist($Media7);

        $Media8 = new Media();
        $Media8->setPath('http://www.notrereveamericain.fr/wp-content/uploads/2015/11/orange-02.jpg');
        $Media8->setAlt('Oranges');
        $manager->persist($Media8);



        $manager->flush();

        $this->addReference('media1' , $Media1);
        $this->addReference('media2' , $Media2);
        $this->addReference('media3' , $Media3);
        $this->addReference('media4' , $Media4);
        $this->addReference('media5' , $Media5);
        $this->addReference('media6' , $Media6);
        $this->addReference('media7' , $Media7);
        $this->addReference('media8' , $Media8);
    }
    public function getOrder(){
        return 1;
    }
}