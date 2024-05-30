<script>

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

<div class="contacts">
   <div class="all_text_info_contacts">
       <div class="link_to_back">
           <router-link to="/" id="link_to_back_a">Главная/</router-link>
           <h1>Контакты</h1>
       </div>
       <div class="text_info_contacts">
           <div class="info_about_contacts">
               <h2>Телефон доставки:</h2>
               <a href="tel:88005553535">8 (800) 555-35-35</a>
           </div>
           <div class="info_about_contacts">
               <h2>Служба контроля качества:</h2>
               <a href="tel:88001111111">8 (800) 111-11-11</a>
           </div>
           <div class="info_about_contacts">
               <h2>Режим работы:</h2>
               <p>С 11 до 21 без выходных</p>
           </div>
           <div class="info_about_contacts">
               <h2>Адрес:</h2>
               <p>454020, г. Челябинск, ул. Энтузиастов 19</p>
           </div>
           <div class="info_about_contacts">
               <h2>Для писем:</h2>
               <a href="mailto:SushiSavor@inbox.ru">SushiSavor@inbox.ru</a>
           </div>
       </div>
   </div>

   <div class="map_in_contacts" style="width: 60%;">
   <iframe src="https://yandex.ru/map-widget/v1/?lang=ru_RU&amp;scroll=false&amp;source=constructor-api&amp;um=constructor%3Aebf4f766e889e40db798453e24c7b8b983116683b5e2486326baf68f18588fdb" frameborder="0" allowfullscreen="true" width="100%" height="400px" style="display: block;"></iframe>
   </div>
</div>

<div class="requisites">
   <h1>Наши реквизиты</h1>
   <h2>ИП “SUSHISAVOR”</h2>
   <div class="info_requisites">
       <p>Юридический адрес:</p>
       <p id="address_requisites">454020, г. Челябинск, ул. Энтузиастов 19</p>
   </div>
   <div class="info_requisites">
       <p>Фактический адрес:</p>
       <p id="i_p_requisites">454020, г. Челябинск, ул. Энтузиастов 19</p>
   </div>
   <div class="info_requisites">
       <p>ИНН:</p>
       <p id="i_p_requisites_1">0000000000</p>
   </div>
   <div class="info_requisites">
       <p>КПП:</p>
       <p id="i_p_requisites_2">000000000</p>
   </div>
   <div class="info_requisites">
       <p>ОГРН:</p>
       <p id="i_p_requisites_3">0000000000000</p>
   </div>
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