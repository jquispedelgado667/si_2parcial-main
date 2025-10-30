<x-app-layout>
    <x-slot name="header">
        <div class="surface-panel p-6">
            <div class="flex flex-wrap items-center justify-between gap-6">
                <div>
                    <p class="badge-pill">Panel principal</p>
                    <h2 class="mt-3 text-3xl font-bold text-white">
                        {{ __('Bienvenido de nuevo') }}
                    </h2>
                    <p class="mt-2 max-w-xl text-sm text-aurora-200/80">
                        Gestiona aulas, horarios y usuarios desde esta nueva experiencia visual. Todo lo que necesitas está a un clic.
                    </p>
                </div>
                <div class="flex items-center gap-3 rounded-2xl border border-aurora-400/30 bg-aurora-500/10 px-5 py-3 text-sm font-semibold text-aurora-100">
                    <span class="text-lg">⚡</span>
                    <span>{{ now()->locale('es')->isoFormat('dddd, D [de] MMMM') }}</span>
                </div>
            </div>
        </div>
    </x-slot>

    <section class="grid gap-6 md:grid-cols-3">
        <article class="surface-card p-6">
            <header class="flex items-center gap-3">
                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand-500/30 text-xl">
                    📚
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-white">Aulas</h3>
                    <p class="text-xs uppercase tracking-wide text-aurora-200/80">Organiza espacios físicos</p>
                </div>
            </header>
            <p class="mt-5 text-sm leading-6 text-aurora-200/80">
                Crea espacios personalizados con filtros renovados y asigna recursos sin complicaciones.
            </p>
        </article>

        <article class="surface-card p-6">
            <header class="flex items-center gap-3">
                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand-500/30 text-xl">
                    🗓️
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-white">Horarios</h3>
                    <p class="text-xs uppercase tracking-wide text-aurora-200/80">Sincroniza tus clases</p>
                </div>
            </header>
            <p class="mt-5 text-sm leading-6 text-aurora-200/80">
                Visualiza la programación con un nuevo esquema cromático que facilita detectar huecos y colisiones.
            </p>
        </article>

        <article class="surface-card p-6">
            <header class="flex items-center gap-3">
                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand-500/30 text-xl">
                    👥
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-white">Usuarios</h3>
                    <p class="text-xs uppercase tracking-wide text-aurora-200/80">Roles y accesos</p>
                </div>
            </header>
            <p class="mt-5 text-sm leading-6 text-aurora-200/80">
                Administra perfiles con badges de estado, importación masiva y bitácoras en tiempo real.
            </p>
        </article>
    </section>
</x-app-layout>
