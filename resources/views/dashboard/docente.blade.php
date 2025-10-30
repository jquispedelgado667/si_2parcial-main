<x-app-layout>
    <x-slot name="header">
        <div class="surface-panel p-6">
            <div class="flex flex-wrap items-center justify-between gap-6">
                <div>
                    <p class="badge-pill">Espacio docente</p>
                    <h2 class="mt-3 text-3xl font-bold text-white">
                        Panel de Control - Docente
                    </h2>
                    <p class="mt-2 max-w-xl text-sm text-aurora-200/80">
                        Planea clases, visualiza aulas asignadas y revisa tu bitácora personal en esta nueva versión cromática.
                    </p>
                </div>
                <div class="flex items-center gap-2 rounded-full border border-brand-400/40 bg-brand-500/20 px-4 py-2 text-xs font-semibold uppercase tracking-wide text-brand-100">
                    <span class="h-2 w-2 animate-ping rounded-full bg-brand-200"></span>
                    <span>Sesión activa</span>
                </div>
            </div>
        </div>
    </x-slot>

    <section class="space-y-8">
        <div class="relative overflow-hidden rounded-3xl border border-brand-500/25 bg-gradient-to-br from-brand-600/50 via-slate-900/60 to-aurora-500/40 p-10 shadow-glow">
            <div class="absolute -left-20 top-1/2 h-48 w-48 -translate-y-1/2 rounded-full bg-brand-400/20 blur-3xl"></div>
            <div class="absolute -top-10 right-0 h-40 w-40 rounded-full bg-aurora-400/20 blur-3xl"></div>

            <div class="relative z-10 flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
                <div>
                    <div class="flex items-center gap-4">
                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-white/15 text-2xl text-white">
                            🧑‍🏫
                        </div>
                        <div>
                            <h3 class="text-4xl font-extrabold text-white">
                                ¡Hola, {{ $user->nombre }} {{ $user->apellido }}!
                            </h3>
                            <p class="mt-1 text-sm text-brand-50/80">Panel docente con look aurora actualizado</p>
                        </div>
                    </div>
                    <div class="mt-6 flex flex-wrap gap-3 text-xs font-semibold uppercase tracking-wide text-brand-50/70">
                        <span class="rounded-full bg-slate-950/40 px-4 py-2">Planificación dinámica</span>
                        <span class="rounded-full bg-slate-950/40 px-4 py-2">Bitácora renovada</span>
                        <span class="rounded-full bg-slate-950/40 px-4 py-2">Accesos inteligentes</span>
                    </div>
                </div>
                <div class="rounded-3xl border border-white/20 bg-white/10 px-6 py-5 text-right text-white">
                    <p class="text-sm uppercase tracking-widest text-brand-50/70">Hoy es</p>
                    <p class="mt-1 text-2xl font-bold">{{ now()->locale('es')->isoFormat('dddd, D [de] MMMM') }}</p>
                    <p class="text-sm text-brand-50/60">{{ now()->locale('es')->isoFormat('YYYY') }}</p>
                </div>
            </div>
        </div>

        <div class="grid gap-6 lg:grid-cols-2">
            <article class="surface-card p-8">
                <div class="flex items-start gap-4">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-500/30 text-xl">🗺️</div>
                    <div>
                        <h4 class="text-2xl font-semibold text-white">Mis Horarios</h4>
                        <p class="mt-1 text-sm text-aurora-200/80">Soon</p>
                    </div>
                </div>
                <ul class="mt-6 space-y-3 text-sm text-aurora-100/80">
                    <li>• Visualiza bloques con contraste cálido/frío para detectar huecos inmediatos.</li>
                    <li>• Recibe avisos flotantes cuando cambie un aula asignada.</li>
                    <li>• Exporta vistas en modo nocturno para compartir con tus grupos.</li>
                </ul>
            </article>

            <article class="surface-card p-8">
                <div class="flex items-start gap-4">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-500/30 text-xl">✅</div>
                    <div>
                        <h4 class="text-2xl font-semibold text-white">Registro de Asistencia</h4>
                        <p class="mt-1 text-sm text-aurora-200/80">Soon</p>
                    </div>
                </div>
                <ul class="mt-6 space-y-3 text-sm text-aurora-100/80">
                    <li>• Marca asistencia con una UI minimalista y vibrante.</li>
                    <li>• Revisa patrones semanales resaltados en degradados aurora.</li>
                    <li>• Obtén reportes con gráficos rediseñados para la nueva paleta.</li>
                </ul>
            </article>
        </div>

        <aside class="surface-panel p-7">
            <div class="flex flex-col gap-4 sm:flex-row sm:items-start sm:justify-between">
                <div class="flex items-center gap-3 text-brand-100">
                    <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-brand-500/40 text-xl">🚀</span>
                    <div>
                        <h5 class="text-lg font-semibold text-white">Módulos en evolución</h5>
                        <p class="text-sm text-aurora-200/80">Estamos afinando detalles para sumar paneles colaborativos y analítica avanzada. La vibra aurora seguirá expandiéndose.</p>
                    </div>
                </div>
                <a href="#" class="btn-ghost">Ver hoja de ruta</a>
            </div>
        </aside>
    </section>
</x-app-layout>