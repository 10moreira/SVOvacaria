<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import { ref } from 'vue';



const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};

</script>


<template>
    <GuestLayout>
        <Head title="Register" />

        <form @submit.prevent="submit">
            <div>
                <InputLabel for="name" value="Nome" />

                <TextInput
                    id="name"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.name"
                    required
                    autofocus
                    autocomplete="name"
                />

                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div>
                <InputLabel for="DataNascimento" value="Data Nascimento" />

                <TextInput
                    id="name"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.name"
                    required
                    autofocus
                    autocomplete="name"
                />

                <InputError class="mt-2" :message="form.errors.name" />
            </div>


            <div>
                <InputLabel for="siape" value="Siape" />

                <TextInput
                    id="name"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.name"
                    required
                    autofocus
                    autocomplete="name"
                />

                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div class="mt-4">
                <InputLabel for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>
            
                        <!-- Settings Dropdown -->
                    <div class="hidden sm:ms-6 sm:flex sm:items-center">    
                                                           
                         <Dropdown align="right" width="48">
                                <template #trigger>
                                  
                                    <InputLabel for="setor" value="Setores:"/>

                                        <select class="relative ms-3" id="exampleFormControlSelect">
                                        <option value="" selected>Selecionar</option>   

                                            <option>TI</option>
                                            <option>Biblioteca</option>
                                            <option>Gabinete</option>
                                            <option>DAP</option>
                                            <option>Dir. Ensino</option>
                                            <option>Infra</option>
                                            <option>Lab. Cien.</option>
                                            <option>Registros</option>
                                            <option>Agropecuário</option>
                                            <option>Assistência Estu.</option>

                                        </select>                                                                                                                                                              
                                                                                                                                                                                                                                                                               
                                </template>                                                                                                            
                         </Dropdown>
                         
                         <Dropdown align="right" width="48">
                            <template #trigger>
                                                                    
                             <InputLabel for="setor" value="Funções:"/>   
                                  
                                    <select class="relative ms-3" id="exampleFormControlSelect">
                                     <option value="" selected>Selecionar</option>                                         
                                            <option>P. EBTT</option>
                                            <option>TA</option>
                                            <option>TAE</option>
                                            <option>Estagiário</option>
                                            <option>Tercerizado</option>
                                                                                                                          
                                    </select>                                                                                                                                                              
                                                                                                                                                                                                                                                                                                                 
                             </template>                                                                                                            
                         </Dropdown>
                         
                         <Dropdown align="right" width="48">
                            <template #trigger>
                                                                                                       
                                <InputLabel for="setor" value="Carga horária:"/>                                                                        
                                  <select class="relative ms-3" id="exampleFormControlSelect">
                                     <option value="" selected>Selecionar</option>                                                                          
                                          <option>20</option>
                                          <option>25</option>      
                                          <option>30</option>
                                          <option>40</option>
                                          <option>DE</option>
                                                                                                                                                                                                                                                                                   
                                    </select>                                                                                                                                                              
                                                                                                                                                                                                                                                                                                                                                    
                            </template>                                                                                                            
                        </Dropdown>
                        
                        
                        <Dropdown align="right" width="48">
                            <template #trigger>
                                                                                                       
                                <InputLabel for="setor" value="Lotação:"/>                                                                        
                                  <select class="relative ms-3" id="exampleFormControlSelect">
                                    <option value="" selected>Selecionar</option>                                                                          
                                    <option value="Bento Goncalves">Bento Goncalves</option>
                                    <option value="Canoas">Canoas</option>
                                    <option value="Caxias do Sul">Caxias do Sul</option>
                                    <option value="Erechim">Erechim</option>
                                    <option value="Feliz">Feliz</option>
                                    <option value="Farroupilha">Farroupilha</option>
                                    <option value="Ibiruba">Ibiruba</option>
                                    <option value="Osorio">Osorio</option>
                                    <option value="Porto Alegre">Porto Alegre</option>
                                    <option value="Rio Grande">Rio Grande</option>
                                    <option value="Restinga">Restinga</option>
                                    <option value="Sertao">Sertao</option>
                                    <option value="Reitoria">Reitoria</option>
                                    <option value="Vacaria">Vacaria</option>
                                                                                                                                                                                                                                                                                                                   
                                </select>                                                                                                                                                              
                                                                                                                                                                                                                                                                                                                                                    
                            </template>                                                                                                            
                        </Dropdown>
                                                                     
                    </div>                                                                                                                                                                                         

            <div class="mt-4">
                <InputLabel for="celular" value="Celular"/>

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>


            <div class="mt-4">
                <InputLabel for="password" value="Senha"/>

                <TextInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password"
                    required
                    autocomplete="new-password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="mt-4">
                <InputLabel
                    for="password_confirmation"
                    value="Repita a senha"
                />

                <TextInput
                    id="password_confirmation"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password_confirmation"
                    required
                    autocomplete="new-password"
                />

                <InputError
                    class="mt-2"
                    :message="form.errors.password_confirmation"
                />
            </div>


            <div class="mt-4 block">
                <label class="flex items-center">
                    <Checkbox name="remember" v-model:checked="form.remember" />
                    <span class="ms-2 text-sm text-gray-600"
                        >Trocar senha no primeiro acesso? </span
                    >
                </label>
            </div>

            <div class="mt-4 flex items-center justify-end">
                <Link
                    :href="route('login')"
                    class="rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                >
                    Já possui cadastro?
                </Link>

                <PrimaryButton
                    class="ms-4"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                >
                    Registrar
                </PrimaryButton>
            
            </div>        
        
        </form>
    </GuestLayout>
</template>
