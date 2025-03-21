@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <a href="/blog" class="sm:text-red-600 text-5xl uppercase font-bold text-shadow-md pb-14 text-shadow-md">
                    Latest Path of Exile 2 News
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="/images/classes.jpeg" width="700" alt="" class="max-height-300">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Classes
            </h2>
            
            <p class="py-8 text-gray-500 text-s italic">
                Path of Exile 2 offers 12 distinct classes, each tailored to unique playstyles based on Strength, Dexterity, and Intelligence.
            </p>

            <p class="text-gray-600 text-s pb-9">
                The game features a diverse set of character classes, each designed around different combat approaches and attribute specializations. These include melee fighters like the Warrior, ranged attackers such as the Ranger, and spellcasters like the Sorceress and Witch. Hybrid classes like the Druid, Huntress, and Monk allow for versatile gameplay. Each class starts at a different position on the Passive Skill Tree, influencing their early strengths and progression paths. As players level up, they can further refine their class through Ascendancy Classes, unlocking powerful, class-specific enhancements.
            </p>

            <a 
                href="/classes"
                class="uppercase bg-red-500 text-gray-100 text-s font-extrabold py-3 px-6 rounded-2xl">
                Classes Page
            </a>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Skill Tree
            </h2>
            
            <p class="py-8 text-gray-500 text-s italic">
                The Passive Skill Tree is a vast web of over 1,500 nodes, allowing deep character customization and specialization.
            </p>

            <p class="text-gray-600 text-s pb-9">
                Every character has access to the Passive Skill Tree, a massive interconnected grid of stat and ability enhancements. Each class starts in a specific area of the tree, but players can progress in any direction, tailoring their build to suit their playstyle. A major innovation in Path of Exile 2 is Dual Specialization, which allows players to create different passive setups that activate based on the weapons or abilities being used. This feature enables dynamic playstyles, encouraging hybrid builds that can adapt to different combat situations.
            </p>

            <a 
                href="/skilltree"
                class="uppercase bg-red-500 text-gray-100 text-s font-extrabold py-3 px-6 rounded-2xl">
                Skill Tree Page
            </a>
        </div>

        <div>
            <img src="/images/skilltree1.png" width="700" alt="" class="max-height-300">
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="/images/skillgem.avif" width="700" alt="" class="max-height-300">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Skill Gems
            </h2>
            
            <p class="py-8 text-gray-500 text-s italic">
                Skills in Path of Exile 2 are itemized as Skill Gems, allowing players to fully customize their character’s abilities.
            </p>

            <p class="text-gray-600 text-s pb-9">
                Unlike traditional RPGs where characters learn skills directly, Path of Exile 2 uses Skill Gems, which must be socketed into equipment to grant abilities. Players start with Uncut Gems, which can be crafted into various skills, enabling immense flexibility. Each Skill Gem has up to five support sockets, where Support Gems can be added to modify its effects, such as increasing area damage, adding elemental effects, or reducing mana cost. This system encourages deep experimentation and allows for powerful and unique skill combinations.
            </p>

            <a 
                href="/skills"
                class="uppercase bg-red-500 text-gray-100 text-s font-extrabold py-3 px-6 rounded-2xl">
                Skill Gem Page
            </a>
        </div>

       
    </div>


    
@endsection