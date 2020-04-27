<?php

namespace App\DataFixtures;

use App\Entity\Carte;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CarteFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $item1 = new Carte();
        $item1->setCategorie("cocktails")
            ->setSouscategorie("signatures")
            ->setTitre("Vas'y Francky")
            ->setPrix1(12)
            ->setPrix2(0)
            ->setQuantite1(0)
            ->setQuantite2(0)
            ->setDescription("Rhum épicé - liqueur de vanille - purée de passion - orange - menthe");
        $manager->persist($item1);

        $item2 = new Carte();
        $item2->setCategorie("cocktails")
            ->setSouscategorie("signatures")
            ->setTitre("Love Strike")
            ->setPrix1(12)
            ->setPrix2(0)
            ->setQuantite1(0)
            ->setQuantite2(0)
            ->setDescription("Vodka - liqueur de mandarine - purée de fraise - citron pressé -ginger beer");
        $manager->persist($item2);

        $item3 = new Carte();
        $item3->setCategorie("cocktails")
            ->setSouscategorie("signatures")
            ->setTitre("Galak")
            ->setPrix1(12)
            ->setPrix2(0)
            ->setQuantite1(0)
            ->setQuantite2(0)
            ->setDescription("Jack Daniel's - liqueur de chocolat blanc - liqueur de mandarine - angostura");
        $manager->persist($item3);

        $item4 = new Carte();
        $item4->setCategorie("cocktails")
            ->setSouscategorie("signatures")
            ->setTitre("Love Strike")
            ->setPrix1(12)
            ->setPrix2(0)
            ->setQuantite1(0)
            ->setQuantite2(0)
            ->setDescription("Vodka - liqueur de mandarine - purée de fraise - citron pressé -ginger beer");
        $manager->persist($item4);

        $item5 = new Carte();
        $item5->setCategorie("cocktails")
            ->setSouscategorie("signatures")
            ->setTitre("T'es qui là ?")
            ->setPrix1(12)
            ->setPrix2(0)
            ->setQuantite1(0)
            ->setQuantite2(0)
            ->setDescription("Tequila - crème de framboise - citron pressé - miel - concombre");
        $manager->persist($item5);

        $item6 = new Carte();
        $item6->setCategorie("cocktails")
            ->setSouscategorie("signatures")
            ->setTitre("Spicy Dizzy")
            ->setPrix1(12)
            ->setPrix2(0)
            ->setQuantite1(0)
            ->setQuantite2(0)
            ->setDescription("Gin - liqueur de mangue - citron pressé - sirop piment cannelle maison");
        $manager->persist($item6);

        $item7 = new Carte();
        $item7->setCategorie("cocktails")
            ->setSouscategorie("mocktails")
            ->setTitre("Détox")
            ->setPrix1(7)
            ->setPrix2(0)
            ->setQuantite1(0)
            ->setQuantite2(0)
            ->setDescription("Jus de pomme - citron pressé - sirop de miel - concombre - eau pétillante");
        $manager->persist($item7);

        $item8 = new Carte();
        $item8->setCategorie("cocktails")
            ->setSouscategorie("mocktails")
            ->setTitre("Bébé Francky")
            ->setPrix1(7)
            ->setPrix2(0)
            ->setQuantite1(0)
            ->setQuantite2(0)
            ->setDescription("Jus de pomme - orange - purée de passion - sirop de vanille - menthe");
        $manager->persist($item8);

        $item9 = new Carte();
        $item9->setCategorie("cocktails")
            ->setSouscategorie("mocktails")
            ->setTitre("A l'italienne")
            ->setPrix1(7)
            ->setPrix2(0)
            ->setQuantite1(0)
            ->setQuantite2(0)
            ->setDescription("Purée de fraise - vinaigre balsamique - citron pressé - sirop de poivre maison - eau pétillante");
        $manager->persist($item9);

        $item10 = new Carte();
        $item10->setCategorie("cocktails")
            ->setSouscategorie("classiques")
            ->setTitre("Gin Tonic")
            ->setPrix1(8)
            ->setPrix2(0)
            ->setQuantite1(0)
            ->setQuantite2(0)
            ->setDescription("Gin HTK & tonic");
        $manager->persist($item10);

        $item11 = new Carte();
        $item11->setCategorie("cocktails")
            ->setSouscategorie("classiques")
            ->setTitre("Mojito")
            ->setPrix1(8)
            ->setPrix2(0)
            ->setQuantite1(0)
            ->setQuantite2(0)
            ->setDescription("Rhum Havana 3'- jus de citron pressé - menthe - agostura bitter - sucre cassonnade - eau pétillante");
        $manager->persist($item11);

        $item12 = new Carte();
        $item12->setCategorie("cocktails")
            ->setSouscategorie("classiques")
            ->setTitre("A l'italienne")
            ->setPrix1(8)
            ->setPrix2(0)
            ->setQuantite1(0)
            ->setQuantite2(0)
            ->setDescription("Purée de fraise - vinaigre balsamique - citron pressé - sirop de poivre maison - eau pétillante");
        $manager->persist($item12);

        $item13 = new Carte();
        $item13->setCategorie("cocktails")
            ->setSouscategorie("classiques")
            ->setTitre("A l'italienne")
            ->setPrix1(8)
            ->setPrix2(0)
            ->setQuantite1(0)
            ->setQuantite2(0)
            ->setDescription("Purée de fraise - vinaigre balsamique - citron pressé - sirop de poivre maison - eau pétillante");
        $manager->persist($item13);

        $item14 = new Carte();
        $item14->setCategorie("cocktails")
            ->setSouscategorie("classiques")
            ->setTitre("Caïpirinha")
            ->setPrix1(8)
            ->setPrix2(0)
            ->setQuantite1(0)
            ->setQuantite2(0)
            ->setDescription("Cachaça Aguacana - jus de citron pressé - sucre");
        $manager->persist($item14);

        $item15 = new Carte();
        $item15->setCategorie("cocktails")
            ->setSouscategorie("classiques")
            ->setTitre("Cuba Libre")
            ->setPrix1(8)
            ->setPrix2(0)
            ->setQuantite1(0)
            ->setQuantite2(0)
            ->setDescription("Rhum ambré - Coca - citron vert");
        $manager->persist($item15);

        $item16 = new Carte();
        $item16->setCategorie("cocktails")
            ->setSouscategorie("classiques")
            ->setTitre("Moscou Mule")
            ->setPrix1(9)
            ->setPrix2(0)
            ->setQuantite1(0)
            ->setQuantite2(0)
            ->setDescription("Vodka Russian standard - citron pressé - ginger beer");
        $manager->persist($item16);

        $item17 = new Carte();
        $item17->setCategorie("cocktails")
            ->setSouscategorie("classiques")
            ->setTitre("Nuletta")
            ->setPrix1(9)
            ->setPrix2(0)
            ->setQuantite1(0)
            ->setQuantite2(0)
            ->setDescription("Tequila Jose cuervo especial - citron vert - ginger beer");
        $manager->persist($item17);

        $item18 = new Carte();
        $item18->setCategorie("cocktails")
            ->setSouscategorie("classiques")
            ->setTitre("Sex On The Beach")
            ->setPrix1(9)
            ->setPrix2(0)
            ->setQuantite1(0)
            ->setQuantite2(0)
            ->setDescription("Vodka Russian standard - liqueur de pêche jus de cranberry - ananas pressé");
        $manager->persist($item18);

        $item19 = new Carte();
        $item19->setCategorie("cocktails")
            ->setSouscategorie("classiques")
            ->setTitre("Piña Colada")
            ->setPrix1(9)
            ->setPrix2(0)
            ->setQuantite1(0)
            ->setQuantite2(0)
            ->setDescription("Rhum blanc - Rhum ambré - crème de coco - jus d'ananas");
        $manager->persist($item19);

        $item20 = new Carte();
        $item20->setCategorie("cocktails")
            ->setSouscategorie("classiques")
            ->setTitre("Maitai")
            ->setPrix1(10)
            ->setPrix2(0)
            ->setQuantite1(0)
            ->setQuantite2(0)
            ->setDescription("Rhum ambré - Cointreau - jus de citron pressé - sirop d'orgeat");
        $manager->persist($item20);

        $item21 = new Carte();
        $item21->setCategorie("cocktails")
            ->setSouscategorie("classiques")
            ->setTitre("Cosmopolitan")
            ->setPrix1(10)
            ->setPrix2(0)
            ->setQuantite1(0)
            ->setQuantite2(0)
            ->setDescription("Vodka Russian standard - Cointreau jus de citron pressé - jus de cranberry");
        $manager->persist($item21);

        $item22 = new Carte();
        $item22->setCategorie("cocktails")
            ->setSouscategorie("classiques")
            ->setTitre("Southside Cuncumber")
            ->setPrix1(10)
            ->setPrix2(0)
            ->setQuantite1(0)
            ->setQuantite2(0)
            ->setDescription("Vodka Russian standard - Cointreau jus de citron pressé - jus de cranberry");
        $manager->persist($item22);

        $item23 = new Carte();
        $item23->setCategorie("cocktails")
            ->setSouscategorie("classiques")
            ->setTitre("Margarita")
            ->setPrix1(10)
            ->setPrix2(0)
            ->setQuantite1(0)
            ->setQuantite2(0)
            ->setDescription("Tequila Jose cuervo especial - Cointreau - jus de citron pressé - sucre de canne");
        $manager->persist($item23);

        $item24 = new Carte();
        $item24->setCategorie("cocktails")
            ->setSouscategorie("classiques")
            ->setTitre("Old Fashioned")
            ->setPrix1(10)
            ->setPrix2(0)
            ->setQuantite1(0)
            ->setQuantite2(0)
            ->setDescription("Bourbon - sucre cassonnade - Agostura bitter");
        $manager->persist($item24);

        $item25 = new Carte();
        $item25->setCategorie("cocktails")
            ->setSouscategorie("classiques")
            ->setTitre("Bloody Mary")
            ->setPrix1(10)
            ->setPrix2(0)
            ->setQuantite1(0)
            ->setQuantite2(0)
            ->setDescription("Vodka Russian standard - jus de tomate - assaisonnement");
        $manager->persist($item25);

        $item26 = new Carte();
        $item26->setCategorie("cocktails")
            ->setSouscategorie("classiques")
            ->setTitre("Expressio Martini")
            ->setPrix1(11)
            ->setPrix2(0)
            ->setQuantite1(0)
            ->setQuantite2(0)
            ->setDescription("Vodka Russian standard - liqueur de Kalhua - café - sucre liquide");
        $manager->persist($item26);

        $item27 = new Carte();
        $item27->setCategorie("cocktails")
            ->setSouscategorie("classiques")
            ->setTitre("Long Island")
            ->setPrix1(13)
            ->setPrix2(0)
            ->setQuantite1(0)
            ->setQuantite2(0)
            ->setDescription("Gin HTK - Vodka Russian standard - Rhum Havana 3' - Tequila Jose cuervo especial - Cointreau - citron pressé - Coca");
        $manager->persist($item27);

        $item28 = new Carte();
        $item28->setCategorie("bieres")
            ->setSouscategorie("lespressions")
            ->setTitre("Le Carrelet")
            ->setPrix1(3.5)
            ->setPrix2(6)
            ->setQuantite1(25)
            ->setQuantite2(50)
            ->setDescription("");
        $manager->persist($item28);

        $item29 = new Carte();
        $item29->setCategorie("bieres")
            ->setSouscategorie("lespressions")
            ->setTitre("Le Goudale")
            ->setPrix1(4.5)
            ->setPrix2(8)
            ->setQuantite1(25)
            ->setQuantite2(50)
            ->setDescription("");
        $manager->persist($item29);

        $item30 = new Carte();
        $item30->setCategorie("bieres")
            ->setSouscategorie("lespressions")
            ->setTitre("La Silly blanche")
            ->setPrix1(4.5)
            ->setPrix2(0)
            ->setQuantite1(25)
            ->setQuantite2(0)
            ->setDescription("");
        $manager->persist($item30);

        $item31 = new Carte();
        $item31->setCategorie("bieres")
            ->setSouscategorie("lespressions")
            ->setTitre("La Queue de Charrue ambrée")
            ->setPrix1(5.5)
            ->setPrix2(0)
            ->setQuantite1(33)
            ->setQuantite2(0)
            ->setDescription("");
        $manager->persist($item31);

        $item32 = new Carte();
        $item32->setCategorie("bieres")
            ->setSouscategorie("lespressions")
            ->setTitre("La Grisette fruits des bois")
            ->setPrix1(6)
            ->setPrix2(0)
            ->setQuantite1(33)
            ->setQuantite2(0)
            ->setDescription("");
        $manager->persist($item32);

        $item33 = new Carte();
        $item33->setCategorie("bieres")
            ->setSouscategorie("lespressions")
            ->setTitre("La Desperados")
            ->setPrix1(6)
            ->setPrix2(0)
            ->setQuantite1(33)
            ->setQuantite2(0)
            ->setDescription("");
        $manager->persist($item33);


        $manager->flush();
    }
}
