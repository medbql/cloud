<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mission;

class MissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $missions =[
            ['locality' => 'BOOM HOIST Sheave 1', 'mission' => 'Inspect lubrication pipes and hoses'],

            ['locality' => 'MAIN STRUCTURE Tiedown/stow pin', 'mission' => 'Ensure the stowage system is inspected and the hinges are lubricated as needed to maintain optimal performance.'],

            ['locality' => 'GANTRY1', 'mission' => 'Lubricate the brake hinges'],

            ['locality' => 'MAIN STRUCTURE Boom', 'mission' => 'Inspect the condition and structure of the boom cushion/support access doors (including their hinges) and boom hinge assembly (including shafts, bearings brackets, assembly base, and welds) for both left and right side'],


            ['locality' => 'BOOM HOIST Sheave 2', 'mission' => 'Check sheave covers and guards for damage or cracks, and inspect sheaves for damage or grooves'],
            ['locality' => 'BOOM HOIST Sheave 2', 'mission' => 'Inspect sheaves and sheave shafts mounting bolts for looseness, tighten if required'],
            ['locality' => 'BOOM HOIST Sheave 2', 'mission' => 'Test the function of the sheave'],
            ['locality' => 'BOOM HOIST Sheave 2', 'mission' => 'Clean the sheaves if required'],

            ['locality' => 'BOOM HOIST wire rope 1', 'mission' => 'Clamping System Inspection Checklist:'],

            ['locality' => 'BOOM HOIST wire rope 2', 'mission' => 'Buffer:'],

            ['locality' => 'GANTRY2', 'mission' => 'Clean and tidy the area'],
            ['locality' => 'GANTRY2', 'mission' => 'Test the function of the gantry and check for abnormal sounds in the structure.'],

            ['locality' => 'GANTRY Rail Brake', 'mission' => 'Inspect the manual hydraulic valve at the brake cylinder'],
            ['locality' => 'GANTRY Rail Brake', 'mission' => 'Inspect the condition of the wheel side flange (disc).'],
            ['locality' => 'GANTRY Rail Brake', 'mission' => 'Inspect brake mountings.'],
            ['locality' => 'GANTRY Rail Brake', 'mission' => 'Inspect the brake for oil leakage.'],
            ['locality' => 'GANTRY Rail Brake', 'mission' => 'Inspect the brake hinges and links.'],
            ['locality' => 'GANTRY Rail Brake', 'mission' => 'Inspect the brake cylinder and cylinder force spring for damage.'],
            ['locality' => 'GANTRY Rail Brake', 'mission' => 'Inspect the brake lining alignment spring.'],
            ['locality' => 'GANTRY Rail Brake', 'mission' => 'Inspect brake hydraulic hoses and pipes.'],
            ['locality' => 'GANTRY Rail Brake', 'mission' => 'Ensure the brake lining is parallel to the disc.'],
            ['locality' => 'GANTRY Rail Brake', 'mission' => 'Check visually the general condition of the brake.'],
            ['locality' => 'GANTRY Rail Brake', 'mission' => 'Clean the wheel side flange (disc) and brake parts if required.'],
            ['locality' => 'GANTRY Rail Brake', 'mission' => 'Test the brake function.'],

            ['locality' => 'GANTRY Wheel', 'mission' => 'Inspect the wheel surface and flange visually for wear, deformation, rust corrosion'],
            ['locality' => 'GANTRY Wheel', 'mission' => 'Clean if required'],
            ['locality' => 'GANTRY Wheel', 'mission' => 'Test the function of the gantry wheels and check for abnormal noise or vibration'],

            ['locality' => 'GANTRY Gearbox', 'mission' => 'Check the gearbox for oil leaks from several areas'],
            ['locality' => 'GANTRY Gearbox', 'mission' => 'Check visually the general condition of the gearbox'],
            ['locality' => 'GANTRY Gearbox', 'mission' => 'Inspect the gearbox and foundation for cracks'],
            ['locality' => 'GANTRY Gearbox', 'mission' => 'Check the oil level, adjust if required (oil VG220)'],
            ['locality' => 'GANTRY Gearbox', 'mission' => 'Check the visual oil condition'],
            ['locality' => 'GANTRY Gearbox', 'mission' => 'Test the function of the gearbox air breather.Clean if required'],
            ['locality' => 'GANTRY Gearbox', 'mission' => 'Move gantry right and left, and check for abnormal sounds or vibration'],
            ['locality' => 'GANTRY Gearbox', 'mission' => 'Clean the gearbox if required'],

            ['locality' => 'GANTRY Operational Brake', 'mission' => 'Check visually the general condition of the brake'],
            ['locality' => 'GANTRY Operational Brake', 'mission' => 'Clean the brake disc if required'],
            ['locality' => 'GANTRY Operational Brake', 'mission' => 'Check the brake lining to be clean'],
            ['locality' => 'GANTRY Operational Brake', 'mission' => 'Inspect the integrity of the spring and spring mountings'],
            ['locality' => 'GANTRY Operational Brake', 'mission' => 'Inspect the brake hinges and links'],
            ['locality' => 'GANTRY Operational Brake', 'mission' => 'Inspect brake disc mountings'],
            ['locality' => 'GANTRY Operational Brake', 'mission' => 'Inspect the brake disc for damage'],
            ['locality' => 'GANTRY Operational Brake', 'mission' => 'Test the function of the manual release system'],
            ['locality' => 'GANTRY Operational Brake', 'mission' => 'Test the brake function'],

            ['locality' => 'GANTRY Anti collis cr to cr', 'mission' => 'Inspect the condition of the buffer cylinders'],
            ['locality' => 'GANTRY Anti collis cr to cr', 'mission' => 'Check the buffer mountings (bolts/nuts) for looseness'],
            ['locality' => 'GANTRY Anti collis cr to cr', 'mission' => 'Inspect the rubber boots of the buffer cylinders'],
            ['locality' => 'GANTRY Anti collis cr to cr', 'mission' => 'Inspect the human protection guard'],
            ['locality' => 'GANTRY Anti collis cr to cr', 'mission' => 'Test the function of the buffer'],

            ['locality' => 'GANTRY Motor Coupling', 'mission' => 'Inspect the general condition of the motor coupling'],
            ['locality' => 'GANTRY Motor Coupling', 'mission' => 'Inspect the motor coupling set screw'],
            ['locality' => 'GANTRY Motor Coupling', 'mission' => 'Inspect the motor coupling for cracks'],
            ['locality' => 'GANTRY Motor Coupling', 'mission' => 'Inspect the motor coupling for indications of slipping in the axial direction'],
            ['locality' => 'GANTRY Motor Coupling', 'mission' => 'Clean the motor coupling if required'],

            ['locality' => 'GANTRY Hydraulic System', 'mission' => 'Test the function of the oil tank air breather. Clean if required.'],
            ['locality' => 'GANTRY Hydraulic System', 'mission' => 'Check all manual shut-off valves positions are correct.'],
            ['locality' => 'GANTRY Hydraulic System', 'mission' => 'Test the accumulator function.'],
            ['locality' => 'GANTRY Hydraulic System', 'mission' => 'Check visually the general condition of the power pack.'],
            ['locality' => 'GANTRY Hydraulic System', 'mission' => 'Inspect the power pack enclosure and foundation.'],
            ['locality' => 'GANTRY Hydraulic System', 'mission' => 'Inspect the power pack enclosure doors. Lubricate doors hinges if required.'],
            ['locality' => 'GANTRY Hydraulic System', 'mission' => 'Inspect the power pack for oil leakage.'],
            ['locality' => 'GANTRY Hydraulic System', 'mission' => 'Check the oil level.'],
            ['locality' => 'GANTRY Hydraulic System', 'mission' => 'Check the visual oil condition.'],
            ['locality' => 'GANTRY Hydraulic System', 'mission' => 'Inspect the general condition of hydraulic valves.'],
            ['locality' => 'GANTRY Hydraulic System', 'mission' => 'Inspect the pump-motor coupling and coupling rubber condition.'],
            ['locality' => 'GANTRY Hydraulic System', 'mission' => 'Inspect all hydraulic hoses and pipes.'],
            ['locality' => 'GANTRY Hydraulic System', 'mission' => 'Test the function of the manual release system.'],
            ['locality' => 'GANTRY Hydraulic System', 'mission' => 'Test the function of the power pack.'],
            ['locality' => 'GANTRY Hydraulic System', 'mission' => 'Inspect the pressure gauges for correct indication.'],
            ['locality' => 'GANTRY Hydraulic System', 'mission' => 'Measure the system operating pressure.'],
            ['locality' => 'GANTRY Hydraulic System', 'mission' => 'Clean the power pack components if required.'],

            ['locality' => 'ELEVATOR', 'mission' => 'Inspect the elevator way protection cage'],
            ['locality' => 'ELEVATOR', 'mission' => 'Test the function of the elevator'],
            ['locality' => 'ELEVATOR', 'mission' => 'Coupling. Inspect the motor coupling elastic/rubber element'],

            ['locality' => 'ELEVATOR Pinion/Rack/Guide1', 'mission' => 'Inspect condition and mounting of pressure/counter wheel of drive pinion.'],
            ['locality' => 'ELEVATOR Pinion/Rack/Guide1', 'mission' => 'Inspect condition and mounting of pressure/counter wheel of safety device pinion.'],
            ['locality' => 'ELEVATOR Pinion/Rack/Guide1', 'mission' => 'Inspect the safety device pinion condition and mounting.'],
            ['locality' => 'ELEVATOR Pinion/Rack/Guide1', 'mission' => 'Inspect safety device pinion alignment with rack.'],
            ['locality' => 'ELEVATOR Pinion/Rack/Guide1', 'mission' => 'Inspect guide rollers condition and mounting.'],
            ['locality' => 'ELEVATOR Pinion/Rack/Guide1', 'mission' => 'Inspect the drive pinion condition and mounting.'],
            ['locality' => 'ELEVATOR Pinion/Rack/Guide1', 'mission' => 'Inspect drive pinion alignment with rack.'],
            ['locality' => 'ELEVATOR Pinion/Rack/Guide1', 'mission' => 'Check the condition of the mats for wear or damage.'],
            ['locality' => 'ELEVATOR Pinion/Rack/Guide1', 'mission' => 'Check the mounting of the mast bolts/nuts for looseness, tighten if required.'],

            ['locality' => 'ELEVATOR Pinion/Rack/Guide2', 'mission' => 'Brake Manual Release Mechanism. Inspect the condition and mounting of emergency lowering mechanism'],
            ['locality' => 'ELEVATOR Pinion/Rack/Guide2', 'mission' => 'Test the function of the emergency lowering system'],
            ['locality' => 'ELEVATOR Pinion/Rack/Guide2', 'mission' => 'Operational brake. Test the function of the brake'],

            ['locality' => 'ELEVATOR Cabin', 'mission' => 'Check the elevator cabin condition and mounting bolts, frames, and rubber buffers.'],
            ['locality' => 'ELEVATOR Cabin', 'mission' => 'Check the condition of doors, doors hinges, and doors glass (Hinges are working properly doors close properly, seals are not defected and functioning well. Glass not broken or cracked, glass seals are not defected)'],
            ['locality' => 'ELEVATOR Cabin', 'mission' => 'Inspect the condition and mounting of the ladder.'],
            ['locality' => 'ELEVATOR Cabin', 'mission' => 'Inspect the condition and mounting of handrails on cabin roof.'],
            ['locality' => 'ELEVATOR Cabin', 'mission' => 'Inspect the condition and mounting of doors mechanical interlock mechanism.Clean if required.'],
            ['locality' => 'ELEVATOR Cabin', 'mission' => 'Test the function of doors mechanical interlock mechanism.'],
            ['locality' => 'ELEVATOR Cabin', 'mission' => 'Clean and tidy up cabin and roof if required.'],

            ['locality' => 'A-FRAME', 'mission' => 'Land Side A-Frame. Inspect the condition of the A-frame beams.'],
            ['locality' => 'A-FRAME', 'mission' => 'Land Side A-Frame. Inspect the mounting of the A-frame beams.'],
            ['locality' => 'A-FRAME', 'mission' => 'Sea Side (Main) A-Frame. Inspect the condition of the A-frame beams'],
            ['locality' => 'A-FRAME', 'mission' => 'Sea Side (Main) A-Frame. Inspect the mounting of the A-frame beams'],
        ];

        foreach ($missions as $mission) {
          Mission::create($mission);
        }
    }
}
