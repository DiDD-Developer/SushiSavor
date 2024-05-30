<script>
import { watch } from 'vue'
    export default{
        data(){
            return{
                dataResponse: {
                    name: null,
                    weight: null,
                    price: null,
                    image: 'test',
                    category_id: null
                },

                selectedDish: {},
                dishes: []
            }
            
        },
        methods: {
            async getCities() {
                
                let response = await fetch('http://iuznyuz-m1.wsr.ru/public/api/dishes', {
                    method: 'GET',
                    headers: {
                        'Content-type': 'application/json'
                    }
                })

                let json = await response.json()

                this.dishes = json.dishes
                },

                async Delete(){
                    let response = await fetch('http://iuznyuz-m1.wsr.ru/public/api/dishes/' + this.selectedDish.id, {
                        method: 'DELETE',
                        body: JSON.stringify(this.dataResponse),
                        headers: {
                            'Content-type': 'application/json'
                        }
                    })

                    if (response.status === 200) {
                        alert('Блюдо успешно удалено!');
                    }

                    console.log(response)

                    let json = response.json()
                    
                    console.log(json)
                },

                changeDish() {
                    this.dataResponse.name = this.selectedDish.name
                    this.dataResponse.weight = this.selectedDish.weight
                    this.dataResponse.price = this.selectedDish.price
                    this.dataResponse.category_id = this.selectedDish.category_id
                }
        },
        mounted() {
            this.getCities()
        }
    }
</script>

<template>
<!-- Форма авторизации -->
<div class="form_register">
    <form @submit.prevent="Delete" method="post">

        <h1>Удаление блюда</h1>
        <div class="Contents_form_register">
            <div class="input_and_label_form_register">
                <label for="Selected-dish">Выберите блюдо из списка</label>
                <select name="" id="Selected-dish" class="select-dish" v-model="selectedDish" @change="changeDish">
                <option v-for="dish in dishes" :value="dish">{{dish.name}}</option>
                </select>
            </div>

            <div class="button_submit">
                <button type="submit" class="button_submit_reg_auto"><p>Удалить</p></button>
            </div>
        </div>
    </form>
</div>
</template>

<style scoped>

.styled-table {
    border-collapse: collapse;
    margin: 0 auto;
    font-size: 1em;
    font-family: sans-serif;
    min-width: 400px;
    border: 2px solid red;
    text-align: center;
}

.styled-table th, .styled-table td {
    border: 2px solid red;
    padding: 12px 15px;
}

.styled-table thead tr {
    background-color: #f2f2f2;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:hover {
    background-color: #f1f1f1;
}

.table_with_categories{
    font-family: sans-serif;
    text-align: center;
}

.select-dish{
    width: 300px;
    height: 40px;
    background-color: #F4F4F4;
    border: 3px solid #ACACAC;
    border-radius: 10px;
    margin-top: 10px;

    font-size: 20px;
    font-weight: bold;
}
</style>