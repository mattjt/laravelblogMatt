@extends('layouts.app')

@section('content')
    <div class="bg-white py-15 bg-gray-800">
        <div class="w-4/5 m-auto text-center ">
            <h1 class="text-5xl font-bold text-white">Skill Tree</h1>
            <p class="text-gray-300 text-lg mt-4">
                Explore the extensive skill tree of Path of Exile 2.
            </p>
        </div>
    </div>
    
    <div class="w-4/5 m-auto sm:grid grid-cols-2 gap-10 py-10 ">
        <div class="relative image-container mt-4">
            <div class="absolute top-0 left-0 z-10">
                <button class="bg-red-700 text-white px-4 py-2 rounded-lg hover:bg-white hover:text-black border-2 border-red-700 transition duration-400" onclick="zoomIn()">Zoom In</button>
                <button class="bg-red-700 text-white px-4 py-2 rounded-lg hover:bg-white hover:text-black border-2 border-red-700 transition duration-400" onclick="zoomOut()">Zoom Out</button>
                <button class="bg-red-700 text-white px-4 py-2 rounded-lg hover:bg-white hover:text-black border-2 border-red-700 transition duration-400" onclick="resetImage()">Reset</button>
            </div>
            <img id="skillTreeImage" src="/images/skill-tree.png" alt="Skill Tree Image" class="rounded-lg shadow-lg">
        </div>
        <div class="flex flex-col justify-center">
            <h2 class="text-3xl font-extrabold text-gray-800">Path of Exile 2 Skill Tree</h2>
            <p class="text-gray-800 text-lg py-4">
                <h3>Overview</h3>
                <p>The Passive Skill Tree in Path of Exile 2 is a massive web of over 1,500 passive nodes, allowing for deep character customization. Unlike traditional RPGs where skill trees are limited to class-based progression, Path of Exile 2 offers a single, unified tree that all classes share, with different starting points based on their core attributes (Strength, Dexterity, Intelligence). This system ensures that players have unparalleled freedom in shaping their character’s build, from pure archetypes to hybrid playstyles.</p>

                <h3>Skill Points and Progression</h3>
                <p>Players earn Passive Skill Points by leveling up and completing certain quests. These points can be invested in nodes that grant:</p>
                <ul>
                    <li>Stat boosts (Strength, Dexterity, Intelligence)</li>
                    <li>Increased damage with specific weapons or spells</li>
                    <li>Enhanced resistances, life, energy shield, or mana regeneration</li>
                    <li>Specialized mechanics like critical strikes, attack speed, or ailment effects</li>
                </ul>
                <p>A key feature of the Skill Tree is its ability to encourage both broad generalization (picking multiple minor bonuses) and focused specialization (investing heavily in one type of node for significant benefits).</p>

                <h3>Major Passive Nodes and Keystone Passives</h3>
                <p>The Skill Tree contains three types of passive nodes:</p>
                <ul>
                    <li>Small Nodes – Grant minor stat boosts or incremental bonuses.</li>
                    <li>Notable Nodes – Provide significant power boosts, such as major damage multipliers or unique mechanics.</li>
                    <li>Keystone Nodes – These are game-changing passives that drastically alter how a character functions. Keystones often come with powerful bonuses but also trade-offs. For example:</li>
                </ul>
                <ul>
                    <li>Chaos Inoculation – Grants immunity to Chaos damage but reduces life to 1, forcing reliance on Energy Shield.</li>
                    <li>Elemental Overload – Increases spell damage significantly but disables critical strike bonuses.</li>
                </ul>

                <h3>Dual Specialization (Weapon-Swapping Passive Skill Trees)</h3>
                <p>One of Path of Exile 2’s major innovations is Dual Specialization, allowing players to create two separate passive setups. This means that depending on the equipped weapon, one of two skill tree specializations will be active at any given time. For example, a player could:</p>
                <ul>
                    <li>Use a two-handed weapon tree for powerful melee attacks.</li>
                    <li>Switch to a spell-focused tree when wielding a staff or wand.</li>
                </ul>
                <p>This feature enables dynamic and hybrid playstyles, giving players more strategic control over their builds.</p>

                <h3>Masteries and Class-Specific Areas</h3>
                <p>Throughout the Skill Tree, players will find Mastery Nodes, which act as specialized areas that provide additional customization. Some Masteries are available to all classes, while others are found closer to a class’s starting position. These Masteries allow players to:</p>
                <ul>
                    <li>Gain unique bonuses related to their preferred playstyle.</li>
                    <li>Modify the way certain mechanics work (e.g., reducing cooldowns, increasing area of effect).</li>
                    <li>Further specialize in damage types such as fire, cold, lightning, physical, or chaos.</li>
                </ul>

                <h3>Ascendancy Classes (Advanced Specialization)</h3>
                <p>At a certain point in the game, players can choose an Ascendancy Class, which provides a</p>
            </p>
        </div>
    </div>

@endsection
