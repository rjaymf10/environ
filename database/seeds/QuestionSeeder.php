<?php

use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('questions')->delete();
        
        \DB::table('questions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'question' => 'What is BOD?',
                'options' => '["Bactorial Oxygen Demand","Biological Oxygen Demand","Biological Oxide Demand","None of the these."]',
                'answer' => '1',
                'explation' => 'BIOLOGICAL OXYGEN DEMAND INDICATES THE AMOUNT OF DISSOLVED OXYGEN NEEDED BU BIOLOGICAL MICROORGANISMS IN THE BIOLOGICAL PROCESS OF BREAKDOWN ORGANIC SUBSTANCES IN WATER.',
                'created_at' => '2020-07-15 12:05:58',
                'updated_at' => '2020-08-05 11:45:16',
            ),
            1 => 
            array (
                'id' => 2,
                'question' => 'How much the percentage of nitrogen consist in Earth’s Atmosphere?',
                'options' => '["25%","12%","92%","78%"]',
                'answer' => '3',
                'explation' => 'EARTH ATMOSPHERE CONSIST OF A LAYER OF GASES. IT KNOWN AS AIR. THE COMPOSITION OF DRY AIR CONTAINS; 78.09 OF NITROGEN, 20.95 OF OXYGEN, 0.93 OF ARGON  AND 0.04 OF CARBON DIOXIDE',
                'created_at' => '2020-07-15 12:05:58',
                'updated_at' => '2020-08-05 11:45:16',
            ),
            2 => 
            array (
                'id' => 3,
                'question' => 'Entomology is the science that studies?',
                'options' => '["Behavior of human beings","Insects","The origin and history of technical and scientific terms","The formation of rocks"]',
                'answer' => '1',
                'explation' => 'Entomology: The branch of zoology concerned with the study of insects.',
                'created_at' => '2020-07-15 12:05:58',
                'updated_at' => '2020-08-05 11:45:16',
            ),
            3 => 
            array (
                'id' => 4,
                'question' => 'Which of the following process unit is used for air pollution control in chemical plants?',
                'options' => '["Thermal Oxidizer,"VPCU","Fluidized bed Combustion","None of these."]',
                'answer' => '0',
                'explation' => 'Thermal Oxidizer used in many chemical plants to control air pollution. It helps to destroy hazardous air pollutants and volatile organic compounds at a high temperature and releases them into the atmosphere.',
                'created_at' => '2020-07-15 12:05:58',
                'updated_at' => '2020-08-05 11:45:16',
            ),
            4 => 
            array (
                'id' => 5,
                'question' => 'Human being can hear range of sound frequency between?',
                'options' => '["20-20,000 Hertz","10-1,000 Hertz","1-100 Hertz","1-7 Hertz"]',
                'answer' => '0',
                'explation' => '20-20,000 Hertz is the common human hearing range. Though it differs between individuals. There are many animals that can hear beyond the range of human beings. For example, some whales can hear infrasonic sounds of 7 Hz in water, and, some bats and dolphins can hear frequencies up to 100,000 Hz. The researcher has also found that human being can hear up to 200,000 Hz in underwater, which is 10 times higher than the top frequency(20,000 Hz) of a human can hear on land.',
                'created_at' => '2020-07-15 12:05:58',
                'updated_at' => '2020-08-05 11:45:16',
            ),
            5 => 
            array (
                'id' => 6,
                'question' => 'In an ecosystem, bacteria are the?',
                'options' => '["Producers","Primary consumers","Secondary consumers","Decomposers"]',
                'answer' => '3',
                'explation' => 'Decomposers are organisms that break down dead plants & animals and also break down waste of other organisms. Some of the common decomposers are bacteria, worms, slugs, snails, and fungi.',
                'created_at' => '2020-07-15 12:05:58',
                'updated_at' => '2020-08-05 11:45:16',
            ),
            6 => 
            array (
                'id' => 7,
                'question' => 'Hydroscope is an instrument that used to ____?',
                'options' => '["see objects under the water","density of liquidC","atmospheric humidity","sound under water"]',
                'answer' => '3',
                'explation' => 'Hydroscope is an optical device for enabling a person to see an object at a considerable distance below the surface of the water by means or a series of mirrors enclosed in a steel tube. The hydrophone is an instrument used for recording sound underwater.',
                'created_at' => '2020-07-15 12:05:58',
                'updated_at' => '2020-08-05 11:45:16',
            ),
            7 => 
            array (
                'id' => 8,
                'question' => 'A piece of wood is float above water then up thrust on it will be ___?',
                'options' => '["equal to the weight of the wood","more than weight of the wood","less than weight of the wood","Zero"]',
                'answer' => '0',
                'explation' => 'Upthrust is the force that pushes an object up and makes it seem to lose weight in a fluid. According to Archimedes\' Principle, the upthrust on an object in a fluid is equal to the weight of the fluid displaced. Upthrust = Weight of Fluid Displaced',
                'created_at' => '2020-07-15 12:05:58',
                'updated_at' => '2020-08-05 11:45:16',
            ),
            8 => 
            array (
                'id' => 9,
                'question' => 'What is the unit of the physical quantity \'Inductance\'?',
                'options' => '["weber","henry","farad","tesla"]',
                'answer' => '1',
                'explation' => 'Henry is the unit of physical quantity Inductance. The unit is named after Joseph Henry (1797â€“1878), the American scientist who discovered electromagnetic induction independently of and at about the same time as Michael Faraday (1791â€“1867) in England.',
                'created_at' => '2020-07-15 12:05:58',
                'updated_at' => '2020-08-05 11:45:16',
            ),
            9 => 
            array (
                'id' => 10,
                'question' => 'Which of the following is not a property of heavy water?',
                'options' => '["Boiling point of heavy water is lower than that or ordinary water","Freezing point of heavy water is more than that of ordinary water","Density of heavy water is more than that of ordinary water","It produces corrosion"]',
                'answer' => '0',
                'explation' => 'Boiling point of heavy water is higher than that or ordinary water as there is stronger hydrogen bonding in heavy water (D2O) than in ordinarywater (H2O) . That is why heavy water has a higher boiling point (101.42 degree C) than ordinary water (1oo degree C). Because of stronger hydrogen bonding, intermolecular association is also greater in heavy water than in ordinary water.',
                'created_at' => '2020-07-15 12:05:58',
                'updated_at' => '2020-08-05 11:45:16',
            ),
        ));
    }
}
