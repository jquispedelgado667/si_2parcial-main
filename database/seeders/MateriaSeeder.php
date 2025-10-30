<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MateriaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('materias')->delete();

        $timestamp = now();

        $materias = [
            // Semestre 1
            [
                'nombre' => 'Programación I',
                'codigo' => 'PRG-101',
                'contenido' => 'Fundamentos de programación estructurada',
                'semestre' => 1,
                'horas_teoricas' => 3,
                'horas_practicas' => 3,
                'creditos' => 5,
                'activo' => true,
            ],
            [
                'nombre' => 'Matemática Discreta I',
                'codigo' => 'MAT-110',
                'contenido' => 'Lógica proposicional, conjuntos y combinatoria básica',
                'semestre' => 1,
                'horas_teoricas' => 4,
                'horas_practicas' => 2,
                'creditos' => 6,
                'activo' => true,
            ],
            // Semestre 2
            [
                'nombre' => 'Programación II',
                'codigo' => 'PRG-201',
                'contenido' => 'Paradigma orientado a objetos y patrones básicos',
                'semestre' => 2,
                'horas_teoricas' => 3,
                'horas_practicas' => 3,
                'creditos' => 5,
                'activo' => true,
            ],
            [
                'nombre' => 'Cálculo Integral',
                'codigo' => 'MAT-220',
                'contenido' => 'Integrales definidas, series y aplicaciones en ingeniería',
                'semestre' => 2,
                'horas_teoricas' => 4,
                'horas_practicas' => 2,
                'creditos' => 6,
                'activo' => true,
            ],
            // Semestre 3
            [
                'nombre' => 'Estructuras de Datos',
                'codigo' => 'INF-301',
                'contenido' => 'Listas, árboles, grafos y algoritmos de recorrido',
                'semestre' => 3,
                'horas_teoricas' => 3,
                'horas_practicas' => 3,
                'creditos' => 5,
                'activo' => true,
            ],
            [
                'nombre' => 'Base de Datos I',
                'codigo' => 'BD-310',
                'contenido' => 'Modelo relacional, SQL y normalización',
                'semestre' => 3,
                'horas_teoricas' => 4,
                'horas_practicas' => 2,
                'creditos' => 6,
                'activo' => true,
            ],
            // Semestre 4
            [
                'nombre' => 'Arquitectura de Computadoras',
                'codigo' => 'INF-401',
                'contenido' => 'Organización de computadores y ensamblador básico',
                'semestre' => 4,
                'horas_teoricas' => 4,
                'horas_practicas' => 2,
                'creditos' => 6,
                'activo' => true,
            ],
            [
                'nombre' => 'Probabilidad y Estadística',
                'codigo' => 'MAT-420',
                'contenido' => 'Variables aleatorias, inferencia y modelos descriptivos',
                'semestre' => 4,
                'horas_teoricas' => 3,
                'horas_practicas' => 3,
                'creditos' => 5,
                'activo' => true,
            ],
            // Semestre 5
            [
                'nombre' => 'Sistemas de Información I',
                'codigo' => 'SI-501',
                'contenido' => 'Ciclo de vida de los sistemas y análisis de requerimientos',
                'semestre' => 5,
                'horas_teoricas' => 4,
                'horas_practicas' => 2,
                'creditos' => 6,
                'activo' => true,
            ],
            [
                'nombre' => 'Sistemas Operativos',
                'codigo' => 'INF-510',
                'contenido' => 'Procesos, memoria, sistemas de archivos y concurrencia',
                'semestre' => 5,
                'horas_teoricas' => 3,
                'horas_practicas' => 3,
                'creditos' => 5,
                'activo' => true,
            ],
            // Semestre 6
            [
                'nombre' => 'Ingeniería de Software I',
                'codigo' => 'SI-601',
                'contenido' => 'Modelado UML, patrones y gestión de calidad',
                'semestre' => 6,
                'horas_teoricas' => 3,
                'horas_practicas' => 3,
                'creditos' => 5,
                'activo' => true,
            ],
            [
                'nombre' => 'Redes de Computadoras I',
                'codigo' => 'RED-610',
                'contenido' => 'Modelo TCP/IP, direccionamiento y servicios de red',
                'semestre' => 6,
                'horas_teoricas' => 4,
                'horas_practicas' => 2,
                'creditos' => 6,
                'activo' => true,
            ],
            // Semestre 7
            [
                'nombre' => 'Ingeniería de Software II',
                'codigo' => 'SI-701',
                'contenido' => 'Procesos ágiles, pruebas automatizadas y despliegue continuo',
                'semestre' => 7,
                'horas_teoricas' => 3,
                'horas_practicas' => 3,
                'creditos' => 5,
                'activo' => true,
            ],
            [
                'nombre' => 'Seguridad Informática',
                'codigo' => 'SEG-710',
                'contenido' => 'Criptografía aplicada, gestión de riesgos y controles',
                'semestre' => 7,
                'horas_teoricas' => 3,
                'horas_practicas' => 2,
                'creditos' => 4,
                'activo' => true,
            ],
            // Semestre 8
            [
                'nombre' => 'Sistemas Distribuidos',
                'codigo' => 'INF-801',
                'contenido' => 'Comunicación entre procesos, tolerancia a fallos y microservicios',
                'semestre' => 8,
                'horas_teoricas' => 3,
                'horas_practicas' => 3,
                'creditos' => 5,
                'activo' => true,
            ],
            [
                'nombre' => 'Minería de Datos',
                'codigo' => 'DAT-820',
                'contenido' => 'Modelos de aprendizaje supervisado y no supervisado',
                'semestre' => 8,
                'horas_teoricas' => 4,
                'horas_practicas' => 2,
                'creditos' => 6,
                'activo' => true,
            ],
            // Semestre 9
            [
                'nombre' => 'Auditoría de Sistemas',
                'codigo' => 'SI-901',
                'contenido' => 'Normativas, control interno y auditoría de TI',
                'semestre' => 9,
                'horas_teoricas' => 3,
                'horas_practicas' => 2,
                'creditos' => 4,
                'activo' => true,
            ],
            [
                'nombre' => 'Proyecto Final Integrador',
                'codigo' => 'PRY-990',
                'contenido' => 'Diseño, construcción y defensa de un sistema completo',
                'semestre' => 9,
                'horas_teoricas' => 2,
                'horas_practicas' => 4,
                'creditos' => 5,
                'activo' => true,
            ],
        ];

        $materias = array_map(function ($materia) use ($timestamp) {
            return array_merge($materia, [
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ]);
        }, $materias);

        DB::table('materias')->insert($materias);
    }
}