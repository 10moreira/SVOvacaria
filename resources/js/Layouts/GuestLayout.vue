<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
   
    <div 
        class="flex min-h-screen flex-col items-center bg-gray-100 pt-6 sm:justify-center sm:pt-0">     

            <img src="../../imagens/bg-vacaria.jpg" alt="img">
            
                                
                <div class="mt-0 bg-white px-6 py-4 sm:rounded-md fixed center-0 center-0 center-0">   

                   <div>        
                    <Link href="/">                            
                        
                    </Link>            
                  </div>
                                    
                     <slot/>     
                                                    
                </div>                        
            
            </img>  
    </div>

</template>
