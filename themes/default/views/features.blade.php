@extends('layouts.app')

@section('content')
<div class="py-24 bg-background-secondary min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-16">
            <h1 class="text-6xl font-[1000] uppercase tracking-tighter text-white mb-4">
                Tuff <span class="text-primary-500">Features</span>
            </h1>
            <p class="text-xl text-base-content/70 italic">Hardware that doesn't flinch. Network that doesn't lag.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-background-primary p-8 rounded-2xl border border-neutral hover:border-primary-500 transition duration-300">
                <div class="text-primary-500 mb-4 text-4xl">🔥</div>
                <h3 class="text-2xl font-black uppercase tracking-tight text-white mb-2">Ryzen Power</h3>
                <p class="text-base-content/60 text-sm">We only use high-clock speed Ryzen 7 and 9 processors. Your Minecraft server stays at 20 TPS, even with heavy modpacks.</p>
            </div>

            <div class="bg-background-primary p-8 rounded-2xl border border-neutral hover:border-primary-500 transition duration-300">
                <div class="text-primary-500 mb-4 text-4xl">🛡️</div>
                <h3 class="text-2xl font-black uppercase tracking-tight text-white mb-2">Tuff Guard</h3>
                <p class="text-base-content/60 text-sm">Multi-terabit DDoS protection comes standard. If they try to boot you, our "Tuff Guard" handles the hit.</p>
            </div>

            <div class="bg-background-primary p-8 rounded-2xl border border-neutral hover:border-primary-500 transition duration-300">
                <div class="text-primary-500 mb-4 text-4xl">⚡</div>
                <h3 class="text-2xl font-black uppercase tracking-tight text-white mb-2">NVMe Storage</h3>
                <p class="text-base-content/60 text-sm">Say goodbye to "Can't keep up" messages. Our ultra-fast NVMe SSDs load chunks and plugins instantly.</p>
            </div>
        </div>

    </div>
</div>
@endsection