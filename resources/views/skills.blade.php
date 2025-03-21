@extends('layouts.app')

@section('content')
    <div class="bg-gray-800 py-15">
        <div class="w-4/5 m-auto text-center">
            <h1 class="text-5xl font-bold text-white">Skill Gems</h1>
            <p class="text-gray-300 text-lg mt-4">
                Explore 10 powerful skill gems in Path of Exile 2.
            </p>
        </div>
    </div>

    @php
        $gems = [
            ['name' => 'Boneshatter', 'image' => 'boneshatter.png', 'description' => 'A powerful melee strike that causes trauma and deals increasing damage.'],
            ['name' => 'Earthquake', 'image' => 'earthquake.png', 'description' => 'A massive slam that creates an aftershock after a short delay.'],
            ['name' => 'Rolling Slam', 'image' => 'rollingslam.png', 'description' => 'A leaping slam that moves forward, dealing area damage.'],
            ['name' => 'Infernal Cry', 'image' => 'infernalcry.png', 'description' => 'A warcry that causes nearby enemies to explode on death.'],
            ['name' => 'Shockwave Totem', 'image' => 'shockwavetotem.png', 'description' => 'Places a totem that repeatedly releases shockwaves, dealing physical damage.'],
            ['name' => 'Herald of Ash', 'image' => 'heraldofash.png', 'description' => 'A buff that causes overkill fire damage to spread to nearby enemies.'],
            ['name' => 'Molten Blast', 'image' => 'moltenblast1.png', 'description' => 'A fiery projectile attack that explodes on impact.'],
            ['name' => 'Volcanic Fissure', 'image' => 'volcanicfissure.png', 'description' => 'A slam attack that cracks the ground, sending out lava eruptions.'],
            ['name' => 'Lightning Arrow', 'image' => 'lightningarrow.png', 'description' => 'Fires an arrow that releases a burst of lightning, chaining between enemies.'],
            ['name' => 'Toxic Growth', 'image' => 'toxicgrowth.png', 'description' => 'Fires a projectile that spawns poisonous fungal growths on impact.'],
        ];
    @endphp

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-10 w-4/5 mx-auto py-15 border-b border-gray-200">
        @foreach($gems as $gem)
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-600">{{ $gem['name'] }}</h2>
                <p class="py-8 text-gray-500 text-s italic">{{ $gem['description'] }}</p>
                <img src="/images/{{ $gem['image'] }}"  alt="{{ $gem['name'] }}" class="max-height-500">
            </div>
        @endforeach
    </div>
@endsection

