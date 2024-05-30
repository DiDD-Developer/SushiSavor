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
                }
            }
        },
        methods: {
            async create() {
                
                let response = await fetch('http://iuznyuz-m1.wsr.ru/public/api/dishes', {
                    method: 'POST',
                    body: JSON.stringify(this.dataResponse),
                    headers: {
                        'Content-type': 'application/json'
                    }
                })

                if(response.status === 201){
                    this.dataResponse.name = null
                    this.dataResponse.weight = null
                    this.dataResponse.price = null
                    this.dataResponse.category_id = null

                    alert('Блюдо успешно создано!');
                }
                console.log(response)
            },
        }
    }
</script>

<template>
<!-- Форма авторизации -->
<div class="form_register">
    <form @submit.prevent="create" method="post">
        <h1>Добавьте блюдо</h1>
        <div class="Contents_form_register">
            <div class="input_and_label_form_register" id="input_and_label_form_register_email">
                <label for="Name_dish_register">Название блюда <span style="color: red;">*</span></label>
                <input type="text" id="Name_dish_register" required v-model="dataResponse.name">
            </div>
            <div class="input_and_label_form_register">
                <label for="weight_dish_register">Вес (в граммах) <span style="color: red;">*</span></label>
                <input type="text" id="weight_dish_register" required v-model.number="dataResponse.weight">
            </div>
            <div class="input_and_label_form_register">
                <label for="price_dish_register">Стоимость <span style="color: red;">*</span></label>
                <input type="number" step="0.01" id="price_dish_register" required v-model.number="dataResponse.price">
            </div>
            <div class="input_and_label_form_register">
                <label for="image_dish_register">Изображение (путь к нему) <span style="color: red;">*</span></label>
                <input type="file" id="image_dish_register">
            </div>
            <div class="input_and_label_form_register">
                <label for="id_category_register">id категории <span style="color: red;">*</span></label>
                <input type="text" id="id_category_register" required v-model="dataResponse.category_id">
            </div>


            <div class="button_submit">
                <button type="submit" class="button_submit_reg_auto"><p>Создать</p></button>
            </div>
        </div>
    </form>

    <div class="table_with_categories">
        <!-- Таблица категорий блюд -->
        <h2>Категории</h2>
    <table class="styled-table">
        <thead>
            <tr>
                <th>ID категории</th>
                <th>Название категории</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Обеденное меню</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Hot Box Wok</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Cool Box Wok</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Супы Wok</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Маки</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Ура Маки</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Футо Маки</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Гунканы</td>
            </tr>
            <tr>
                <td>9</td>
                <td>Нигири</td>
            </tr>
        </tbody>
    </table>
    <br>
    </div>
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

</style>