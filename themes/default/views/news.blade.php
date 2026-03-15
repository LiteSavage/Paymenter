<x-app-layout>
    <div>
        <div class="flex flex-col gap-6">
            
            <div class="w-full bg-background-secondary p-14 rounded-md border-b border-neutral">
                <div class="container text-center">
                    <article class="prose dark:prose-invert max-w-full">
                        <h1 class="text-6xl font-[1000] uppercase tracking-tighter text-white mb-2">
                            Tuff <span class="text-primary-500">News</span>
                        </h1>
                        <p class="text-xl italic text-base-content/70">
                            Latest updates, patch notes, and announcements.
                        </p>
                    </article>
                </div>
            </div>

            <div class="container mt-4 flex flex-col gap-5">
                <h2 class="text-xl font-semibold">Latest Posts</h2>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5 mb-10">
                    
                    <div class="flex flex-col bg-background-secondary hover:bg-background-secondary/80 border border-neutral p-6 rounded-lg">
                        <div class="text-sm text-primary-500 font-bold mb-2">March 15, 2026</div>
                        <h3 class="text-2xl font-black uppercase tracking-tight mb-2">Tuff Node is Officially Live!</h3>
                        <article class="prose dark:prose-invert text-sm text-base-content/70 mb-4">
                            Welcome to the future of heavy-duty Minecraft hosting. We've officially launched our storefront and are ready to deploy your high-performance servers.
                        </article>
                        <a href="#" class="mt-auto text-primary-500 hover:text-primary-400 font-semibold flex items-center gap-1">
                            Read More <x-ri-arrow-right-fill class="size-4" />
                        </a>
                    </div>

                    <div class="flex flex-col bg-background-secondary hover:bg-background-secondary/80 border border-neutral p-6 rounded-lg">
                        <div class="text-sm text-primary-500 font-bold mb-2">March 12, 2026</div>
                        <h3 class="text-2xl font-black uppercase tracking-tight mb-2">New Pterodactyl Integration</h3>
                        <article class="prose dark:prose-invert text-sm text-base-content/70 mb-4">
                            We've upgraded our backend infrastructure. All new server deployments are now instantly provisioned using our custom Pterodactyl panel setup for zero wait times.
                        </article>
                        <a href="#" class="mt-auto text-primary-500 hover:text-primary-400 font-semibold flex items-center gap-1">
                            Read More <x-ri-arrow-right-fill class="size-4" />
                        </a>
                    </div>

                    <div class="flex flex-col bg-background-secondary hover:bg-background-secondary/80 border border-neutral p-6 rounded-lg">
                        <div class="text-sm text-primary-500 font-bold mb-2">March 09, 2026</div>
                        <h3 class="text-2xl font-black uppercase tracking-tight mb-2">Case Study: Arcane Realms</h3>
                        <article class="prose dark:prose-invert text-sm text-base-content/70 mb-4">
                            See how one of our partner servers, Arcane Realms, effortlessly handled reaching 100 concurrent players online using our dedicated Ryzen hardware and custom Skript optimizations.
                        </article>
                        <a href="#" class="mt-auto text-primary-500 hover:text-primary-400 font-semibold flex items-center gap-1">
                            Read More <x-ri-arrow-right-fill class="size-4" />
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>