<section id="contact" class="scroll-mt-24">
    <div class="max-w-3xl">
        @if ($sent)
            <div class="rounded-xl bg-green-900/20 border border-green-700 p-6 text-green-300">
                Merci! Je bericht is goed aangekomen en wordt bekeken 👌
            </div>
        @else
            <form wire:submit.prevent="submit" class="space-y-6">
                <div>
                    <input
                        type="text"
                        wire:model="name"
                        placeholder="Naam"
                        class="w-full rounded-lg bg-neutral-900 border border-neutral-800 px-4 py-3 text-gray-100
                               focus:border-primary focus:ring-0"
                    >
                    @error('name') <p class="text-sm text-red-400 mt-1">Uw naam is verplicht</p> @enderror
                </div>

                <div>
                    <input
                        type="email"
                        wire:model="email"
                        placeholder="E-mail"
                        class="w-full rounded-lg bg-neutral-900 border border-neutral-800 px-4 py-3 text-gray-100
                               focus:border-primary focus:ring-0"
                    >
                    @error('email') <p class="text-sm text-red-400 mt-1">Het mailadres is niet correct</p> @enderror
                </div>

                <div>
                    <textarea
                        wire:model="message"
                        rows="5"
                        placeholder="Bericht"
                        class="w-full rounded-lg bg-neutral-900 border border-neutral-800 px-4 py-3 text-gray-100
                               focus:border-primary focus:ring-0"
                    ></textarea>
                    @error('message') <p class="text-sm text-red-400 mt-1">Het bericht moet minstens 10 karakters bevatten</p> @enderror
                </div>

                <div class="flex items-center gap-4">
                    <button
                        type="submit"
                        class="px-6 py-3 rounded-lg bg-primary text-black font-medium
                               hover:bg-primary/90 transition"
                    >
                        Verstuur bericht
                    </button>

                    <span class="text-sm text-neutral-400 hidden" wire:loading.class.remove="hidden">
                        Verzenden…
                    </span>
                </div>
            </form>
        @endif
    </div>
</section>
