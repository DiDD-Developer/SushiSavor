<script>
import { watch } from 'vue'
    export default{
        data(){
            return{
                formData: {
                    email: null,
                    password: null
                }
            }
        },
        methods: {
            login() {
                console.log(this.formData)
            }
        }
    }
</script>

<template>
<div>
    <!-- Шапка главной странцицы -->
    <div class="header">
        <router-link to="/"><img src="../assets/images/header/logo.png" alt=""></router-link>

        <ul class="header_ul">
            <a href="#"><li>Акции</li></a>
            <a href="#"><li>Доставка</li></a>
            <a href="#"><li>Новости</li></a>
            <a href="#"><li>Оплата</li></a>
            <router-link to="/contacts"><li>Контакты</li></router-link>
            <a href="#"><li>Еще</li></a>
        </ul>

        <input type="search" id="header_search" placeholder="Поиск">

        <div class="reg-autor">
            <router-link to="/register"><img src="../assets/images/header/Авторизация.png" alt=""></router-link>
            <router-link to="/shopping_cart"><img src="../assets/images/header/Корзина.png" alt=""></router-link>
        </div>
    </div>

<!-- Форма авторизации -->
<div class="form_register">
    <form @submit.prevent="login" action="#" method="post">
        <h1>Авторизация</h1>
        <div class="Contents_form_register">
            <h3>Ваши данные</h3>
            <div class="input_and_label_form_register" id="input_and_label_form_register_email">
                <label for="E-mail_register">E-mail <span style="color: red;">*</span></label>
                <input type="email" id="E-mail_register" required v-model="formData.email">
            </div>
            <div class="input_and_label_form_register">
                <label for="password_register">Пароль <span style="color: red;">*</span></label>
                <input type="password" id="password_register" required v-model="formData.password">
            </div>

            <div class="Forgot_Password">
                <a href="#">Забыли пароль?</a>
            </div>

            <div class="button_submit">
                <button type="submit" class="button_submit_reg_auto"><p>Войти</p></button>
            </div>
        </div>
    </form>
</div>

<!-- Футер (подвал) -->
<div class="footer">
    <div class="Content_footer">
           <div class="ryads">
               <div class="ryad_1">
                   <a href="#">Акции</a>
                   <a href="#">Категории</a>
               </div>
               <div class="ryad_1" style="margin-left: 50px;">
                   <a href="#">Новости</a>
                   <a href="#">Отзывы</a>
               </div>
           </div>
               <div class="content_footer">
               <div class="content_contact_data">
                   <div class="ryad_1_content_contact_data">
                       <h1>Телефон:</h1>
                   <div class="footer_tels">
                       <a href="tel:89120000000"><h2>8 (912) 000-00-00</h2></a>
                       <a href="tel:89121001111"><h2>8 (912) 100-11-11</h2></a>
                   </div>
                   </div>
               </div>

                   <div class="ryad_2_content_contact_data">
                   <h1>Режим работы:</h1>
                   <h2>ПН-СБ с 9:00 до 18:00</h2>
                   </div>

                   <div class="ryad_2_content_contact_data">
                       <h1>Адрес:</h1>
                       <h2 style="width: 318px;">Россия, г. Челябинск,
                           ул. Энтузиастов д.19</h2>
                   </div>
               </div>
           
           <div class="email_and_soc_network">
               <div class="email">
                   <p>Подпишитесь на нашу рассылку выгодных предложений и получите купон на скидку 10%</p>
                   <input type="email" placeholder="Ваш email..." id="footer_email">
               </div>

               <div class="soc_network">
                   <h1>Мы в соц. сетях:</h1>
                   <div class="icon_soc_network">
                       <a href="#"><img src="../assets/images/soc_network/иконка vk.png" alt=""></a>
                       <a href="#"><img src="../assets/images/soc_network/иконка одноклассники.png" alt=""></a>
                   </div>
               </div>
           </div>
    </div>   
   </div>
</div>
</template>

<style scoped>

</style>