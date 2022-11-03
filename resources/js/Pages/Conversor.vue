<template>
        <AppLayout title="Dashboard">


    <div class="my-8 mx-8 mt-10">
        <h1 class="text-4xl mb-10">Conversor de divisas</h1>

        <div class="md:grid md:grid-cols-3 md:gap-6">

            <div class="mt-5 md:col-span-2 md:mt-0">
                <form method="POST">
                    <div class="shadow sm:overflow-hidden sm:rounded-md">
                        <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-4 sm:col-span-2">
                                    <label for="cantidad"
                                        class="block text-sm font-medium text-gray-700">Cantidad</label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input type="number" v-model="cantidad" name="cantidad" id="cantidad"
                                            class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="" />
                                    </div>
                                </div>
                                <div class="col-span-4 sm:col-span-2">
                                    <label for="country" class="block text-sm font-medium text-gray-700">Moneda
                                        principal</label>
                                    <select id="moneda" v-model="moneda" name="moneda" autocomplete="moneda"
                                        class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                        <option selected value="">Seleccionar moneda</option>
                                        <option value="COP">COP</option>
                                        <option value="EUR">EUR</option>
                                        <option value="USD">USD</option>
                                    </select>
                                </div>
                                <div class="col-span-4 sm:col-span-2">
                                    <label for="to" class="block text-sm font-medium text-gray-700">Convertir</label>
                                    <select id="to" v-model="to" name="to" autocomplete="to"
                                        class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                        <option selected value="">Convertir a</option>
                                        <option value="COP">COP</option>
                                        <option value="EUR">EUR</option>
                                        <option value="USD">USD</option>
                                    </select>
                                </div>

                                <!--<div class="col-span-4 sm:col-span-2">
                                    <label for="fecha" class="block text-sm font-medium text-gray-700">Fecha</label>
                                    <span
                                        class="inline-flex items-center rounded-l-md border border-r-0 border-gray-300 bg-gray-50 px-3 text-sm text-gray-500">Formato
                                        requerido YYYY-MM-DD</span>
                                    <div class="mt-1 flex rounded-md shadow-sm">

                                        <input type="text" v-model="fecha" name="fecha" id="fecha"
                                            class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            placeholder="YYYY-MM-DD" />
                                    </div>
                                </div>-->
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                            <button type="submit" @click="convertir" class="inline-flex justify-center rounded-md border border-transparent 
                                bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none 
                                focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Convertir</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Resultado</h3>
                    <p class="mt-1 text-sm text-gray-600">La conversion es: {{ resultado }}</p>
                </div>
            </div>
        </div>
    </div>
</AppLayout>
</template>
<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
</script>

<script>
import { ref } from 'vue';
import axios from 'axios'

export default {

    data() {
        return {
            cantidad: '',
            moneda: '',
            to: '',
           // fecha: '',
            resultado: 0
        }
    },
    methods: {
        convertir(e) {
            e.preventDefault();
            var myHeaders = new Headers();
            myHeaders.append("apikey", "RkKjELuIEAK5AHmMakVVUFSRQrGK8lTb");

            var requestOptions = {
                method: 'GET',
                redirect: 'follow',
                headers: myHeaders
            };

            fetch("https://api.apilayer.com/exchangerates_data/convert?to=" + this.to + "&from=" + this.moneda + "&amount=" + this.cantidad, requestOptions)
                .then(response => response.text())
                .then(response =>{
                    var json = JSON.parse(response);
                    console.log(json.result);
                    this.resultado = json.result;
                })
                .then(result => console.log(result))
                .catch(error => console.log('error', error));

        }
    }
}
</script>