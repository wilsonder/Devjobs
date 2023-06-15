<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <Head title="DevJobs" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Crear Vacante
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h1 class="text-2xl font-bold text-center my-10">Publicar Vacante</h1>
                        
                        <div class="md:flex md:justify-center p-5">
                            <form class="md:w-1/2 space-y-5" action="">
                                <div>
                                    <label for="titulo" class="block text-sm text-gray-500 font-bold uppercase mb-2">Nombre de la Vacante</label>
                                    <input id="titulo" name="titulo" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" type="text" placeholder="Titulo Vacante">
                                </div>
                                <div>
                                    <label for="salario" class="block text-sm text-gray-500 font-bold uppercase mb-2">Salario Mensual</label>
                                    <select name="salario" id="salario" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
                                        <option>-- Seleccione --</option>
                                        <option v-for="salario in salarios" :key="salario.id" :value="salario.id">
                                            {{ salario.salario }}
                                        </option>
                                    </select>
                                </div>
                                <div>
                                    <label for="categoria" class="block text-sm text-gray-500 font-bold uppercase mb-2">Categoría</label>
                                    <select name="categoria" id="categoria" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">

                                    </select>
                                </div>
                                <div>
                                    <label for="empresa" class="block text-sm text-gray-500 font-bold uppercase mb-2">Empresa</label>
                                    <input id="empresa" name="empresa" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" type="text" placeholder="Empresa: ej. Netflix, Uber, Shopify">
                                </div>
                                <div>
                                    <label for="ultimo_dia" class="block text-sm text-gray-500 font-bold uppercase mb-2">Último Día para postularse</label>
                                    <input id="ultimo_dia" name="ultimo_dia" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" type="date">
                                </div>
                                <div>
                                <textarea name="descripción" placeholder="Descipción general del puesto, experiencia"
                                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full h-72"></textarea>
                                </div>

                                <div>
                                    <label for="imagen" class="block text-sm text-gray-500 font-bold uppercase mb-2">Imagen</label>
                                    <input id="imagen" name="imagen" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" type="file"> 
                                </div>

                                <button class="inline-flex items-center px-4 py-2 bg-indigo-600 border
                                    border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700
                                    focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2
                                    transition ease-in-out duration-150">Crear Vacante
                                </button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>