<?php

namespace App\DataFixtures;

use App\Entity\Pays;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $pays = new Pays();

        $pays->setTitle('Allemagne');

        $pays->setImage('https://www.google.com/imgres?imgurl=https%3A%2F%2Fm-st.azureedge.net%2Fimages%2Ftemp-static%2Fnemetorszag-berlin.jpg&imgrefurl=https%3A%2F%2Fmortons.hu%2Futazas%2Fnemetorszag%2Fberlin&tbnid=JWE8GngwEB5wVM&vet=12ahUKEwiNw5np8fTxAhXZgaQKHfSoC44QMygFegUIARDUAQ..i&docid=DeWpk5Y5omKRLM&w=600&h=400&q=berlin&client=ubuntu&ved=2ahUKEwiNw5np8fTxAhXZgaQKHfSoC44QMygFegUIARDUAQ');

        $pays->setDescription('Allemagne est un pays à la charnière de Europe occidentale et de Europe centrale situé entre le Benelux et la France à louest, la mer du Nord, le Danemark et la mer Baltique au nord, la Pologne et la République tchèque à lest et la Suisse et lAutriche au sud.');


        $manager->persist($pays);

        $pays = new Pays();

        $pays->setTitle('Espagne');

        $pays->setImage("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4iUqXvs-_m4OuxTvFQ2cnfiOwtmk_eojYuQ&usqp=CAU");

        $pays->setDescription("La frontière entre lEspagne et la France est la frontière internationale terrestre et maritime séparant les deux pays, de lAtlantique à la Méditerranée. Courant sur 623 kilomètres le long des Pyrénées, et interrompue par la principauté dAndorre, cest la plus longue frontière terrestre de la France métropolitaine. ");


        $manager->persist($pays);

        $pays = new Pays();

        $pays->setTitle('Portugal');

        $pays->setImage("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSGFb9AzwywCAvKRAV9QYtl4rkNUHh5HuVfTw&usqp=CAU");

        $pays->setDescription("Porto est une ville côtière située au nord-ouest du Portugal. Elle est réputée pour ses ponts imposants et sa production de porto. Dans le quartier médiéval de la Ribeira ");


        $manager->persist($pays);

        $pays = new Pays();

        $pays->setTitle('Maroc');

        $pays->setImage("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4LtsPFPRQNENfIgqgmD9X9-mpkClAiuD-Fg&usqp=CAU");

        $pays->setDescription("Rabat, la capitale du Maroc, est bâtie sur les rives du fleuve Bouregreg et de locéan Atlantique. Elle est connue pour ses sites dintérêt, qui illustrent tant le patrimoine islamique que colonial français, notamment la kasbah des Oudayas.  ");


        $manager->persist($pays);


        $pays->setTitle('Hongrie');

        $pays->setImage("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxIu4bD7rhmSKIf6_L6VzZ4p1q6q0quonkMA&usqp=CAU");

        $pays->setDescription("Capitale de la Hongrie, Budapest est coupée en deux par le Danube. Son pont du XIXe siècle Széchenyi  relie le district vallonné de Buda au district plat de Pest");


        $manager->persist($pays);



        $pays->setTitle('Brésil');

        $pays->setImage("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTG38iD3E9XbAbntT8JVJoeeXy7DXe4s4Tvkw&usqp=CAU");

        $pays->setDescription("Le Brésil, vaste pays d'Amérique du Sud, s'étend du bassin amazonien au nord à des vignobles et aux chutes d'Iguaçu au sud. ");


        $manager->persist($pays);





        $manager->flush();
    }
}