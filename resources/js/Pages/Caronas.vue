<script>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';


export default {
    props: {
        users: Array
    },    
    components: {
        AuthenticatedLayout,
        Head,
    },

}


</script>

<template>
    <Head title="Solicitações" />
    
    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800"
            >
               
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg"
                >
                    <div class="p-6 text-gray-900">
                        <li
                           v-for="(solicitarviatura, key) in SolicitarViatura"
                           :key="key"
                           >
                           
                        </li>
                        
                        Aqui criar tabela com lista das caronas já feitas!

                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
