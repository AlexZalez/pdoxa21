<script setup>
    import MyLayout from '@/Layouts/MyLayout.vue';
    import { Head, router, Link } from '@inertiajs/vue3';
    import { selectObj } from '@/utilidades';
    import DropdownX from '@/Components/DropdownX.vue';
    import formSubject from '@/Pages/Subject/formSubject.vue';
    

    const props = defineProps({
        departaments: {
            type: Object,
            default: null
        },
        pensums: {
            type: Object,
            default: null
        },
        subjects: {
            type: Object,
            default: null
        },
    });

    function eliminar(id) {
        router.delete(route('subject.destroy', id));
    }
</script>

<template>
    <Head title="Proyectos"/>
        <Suspense>
            <MyLayout>
                <template #header>
                        <div class="">
                            Materias
                        </div>
                </template>
                <div v-if="$page.props.flash.message" class="flex">
                    <div class="border-4 p-0 border-red-300 bg-red-300 w-full p-2 rounded-l-lg">
                        <div class="w-full pl-2 bg-white rounded-lg py-1">
                            {{ $page.props.flash.message }}
                        </div>
                    </div>
                    <div @click="$page.props.flash.message = null" class="bg-red-300 h-full rounded-r-lg pt-2 pr-2 pl-1 font-extrabold cursor-pointer">X</div>
                </div>
                <div class="w-full h-full rounded-lg shadow-xs">
                    <DropdownX
                        width="full"
                        contentClasses=" bg-slate-200 p-2"
                    >
                        <template #trigger>
                            <div class="w-full bg-slate-200 p-2">
                                Agregar Nueva Materia
                                <span class="font-bold">+</span>
                            </div>
                        </template>
                        <template #content>
                            <formSubject :pensums="pensums" :departaments="departaments"/>
                        </template>
                    </DropdownX>
                    <div class="w-full overflow-x-auto" style="height: 79.3%;">
                        <table class=" whitespace-no-wrap ">
                            <thead class="sticky top-0">
                                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                    <th class="px-4 py-3">Codigo</th>
                                    <th class="px-4 py-3">Nombre</th>
                                    <th class="px-4 py-3">AVR</th>
                                    <th class="px-4 py-3">U.C.</th>
                                    <th class="px-4 py-3">Horas</th>                                    
                                    <th class="px-4 py-3">Pensum</th>                                    
                                    <th class="px-4 py-3">Nivel</th>                                    
                                    <th class="px-4 py-3">Departamento</th>                                
                                    <th class="px-4 py-3">Acciones</th>                                    
                                </tr>
                            </thead>

                            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                <tr v-for="subject in subjects" :key="subject.id" class="text-gray-700 dark:text-gray-400">
                                    
                                    <td class="px-4 py-3">
                                        <p class="font-semibold text-xs">{{ subject.code }}</p>
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="text-sm">
                                            <p class="font-semibold">{{subject.name}}</p>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3">
                                        <p class="font-semibold text-xs">{{ subject.avr }}</p>
                                    </td>
                                    <td class="px-4 py-3">
                                        <p class="font-semibold">{{ subject.u_c }}</p>
                                    </td>
                                    <td class="px-4 py-3">
                                        <p class="font-semibold">{{ subject.h_s }}</p>
                                    </td>
                                    <td class="px-4 py-3">
                                        <p class="font-semibold">{{selectObj(subject.pensum_id, pensums)}}</p>
                                    </td>
                                    <td class="px-4 py-3">
                                        <p class="font-semibold">{{ subject.level }}</p>
                                    </td>
                                    <td class="px-4 py-3">
                                        <p class="">{{selectObj(subject.departament_id, departaments)}}</p>
                                    </td>  
                                    
                                    <td class="px-4 py-3">
                                        <div class="flex items-center space-x-1 text-sm">
                                            <Link :href="route('meetingSubject', subject.id)" class="text-white bg-green-500 font-semibold rounded-xl px-2 py-1 text-xs">Encuentros</Link>
                                            
                                            <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Edit">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                                </svg>
                                            </button>
                                            <button @click="eliminar(subject.id)" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Delete">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>                    
                            </tbody>
                        </table>
                        <div class="w-full bg-red-400 hidden">FIN</div>
                    </div>                
                </div>    
    </MyLayout>
  </Suspense>
    
    
</template>