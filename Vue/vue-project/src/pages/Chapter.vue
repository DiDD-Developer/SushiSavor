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

    <!-- Блок с категориями -->
    <div class="our_categories">
        <div class="head_our_categories">
            <h1>Наши категории</h1>
            <a href="#"><p>Посмотреть все</p></a>
        </div>

        <div class="categories">
            <a href="#"><div class="category">
                <img src="../assets/images/our_categories/Обеденное меню 1.png" alt="">
                <h6>Обеденное меню</h6>
            </div></a>
    
            <a href="#"><div class="category">
                <img src="../assets/images/our_categories/Обеденное меню 2.png" alt="">
                <h6>Hot Box Wok</h6>
            </div></a>
    
            <a href="#"><div class="category">
                <img src="../assets/images/our_categories/Обеденное меню 3.png" alt="">
                <h6>Cool Box WOK</h6>
            </div></a>
    
            <a href="#"><div class="category">
                <img src="../assets/images/our_categories/Обеденное меню 4.png" alt="">
                <h6>Супы WOK</h6>
            </div></a>
    
            <a href="#"><div class="category">
                <img src="../assets/images/our_categories/Обеденное меню 5.png" alt="">
                <h6>Маки</h6>
            </div></a>
    
            <a href="#"><div class="category">
                <img src="../assets/images/our_categories/Обеденное меню 6.png" alt="">
                <h6>Ура Маки</h6>
            </div></a>
    
            <a href="#"><div class="category">
                <img src="../assets/images/our_categories/Обеденное меню 7.png" alt="">
                <h6>Футо Маки</h6>
            </div></a>
    
            <a href="#"><div class="category">
                <img src="../assets/images/our_categories/Обеденное меню 8.png" alt="">
                <h6>Гунканы</h6>
            </div></a>
    
            <a href="#"><div class="category">
                <img src="../assets/images/our_categories/Обеденное меню 9.png" alt="">
                <h6>Нигири</h6>
            </div></a>
        </div>
    </div>

    <!-- Раздел Новинки -->
    <div class="New_Sushi">
        <div class="head_our_categories">
            <h1>Новинки</h1>
            <img src="../assets/images/chapter/Filter_chapter.png" alt="">
        </div>

        <div class="Cards_New_Sushi">
            <div class="cards_New_Sushi">
                <img src="../assets/images/New/icon_NEW.png" id="New_image" alt="">
                <div class="food">
                    <img src="../assets/images/foods/New/Philadelphia_Rolls.png" id="Philadelphia_Rolls" alt="">
                </div>
                <div class="Name_food">
                    <h2>Филадельфия</h2>
                    <h3>47 г.</h3>
                </div>
                <div class="button_with_price">
                    <button type="submit" class="Add_in_Bug">
                        <p>В корзину</p>
                    </button>
                    <h3>420 ₽</h3>
                </div>
            </div>
            <div class="cards_New_Sushi">
                <img src="../assets/images/New/icon_NEW.png" id="New_image" alt="">
                <div class="food">
                    <img src="../assets/images/foods/New/Philadelphia_Rolls.png" id="Philadelphia_Rolls" alt="">
                </div>
                <div class="Name_food">
                    <h2>Филадельфия</h2>
                    <h3>47 г.</h3>
                </div>
                <div class="button_with_price">
                    <button type="submit" class="Add_in_Bug">
                        <p>В корзину</p>
                    </button>
                    <h3>420 ₽</h3>
                </div>
            </div>

            <div class="cards_New_Sushi">
                <img src="../assets/images/New/icon_NEW.png" id="New_image" alt="">
                <div class="food">
                    <img src="../assets/images/foods/New/Philadelphia_Rolls.png" id="Philadelphia_Rolls" alt="">
                </div>
                <div class="Name_food">
                    <h2>Филадельфия</h2>
                    <h3>47 г.</h3>
                </div>
                <div class="button_with_price">
                    <button type="submit" class="Add_in_Bug">
                        <p>В корзину</p>
                    </button>
                    <h3>420 ₽</h3>
                </div>
            </div>

            <div class="cards_New_Sushi">
                <img src="../assets/images/New/icon_NEW.png" id="New_image" alt="">
                <div class="food">
                    <img src="../assets/images/foods/New/Philadelphia_Rolls.png" id="Philadelphia_Rolls" alt="">
                </div>
                <div class="Name_food">
                    <h2>Филадельфия</h2>
                    <h3>47 г.</h3>
                </div>
                <div class="button_with_price">
                    <button type="submit" class="Add_in_Bug">
                        <p>В корзину</p>
                    </button>
                    <h3>420 ₽</h3>
                </div>
            </div>
        </div>

        <div class="Cards_New_Sushi">
            <div class="cards_New_Sushi">
                <img src="../assets/images/New/icon_NEW.png" id="New_image" alt="">
                <div class="food">
                    <img src="../assets/images/foods/New/Philadelphia_Rolls.png" id="Philadelphia_Rolls" alt="">
                </div>
                <div class="Name_food">
                    <h2>Филадельфия</h2>
                    <h3>47 г.</h3>
                </div>
                <div class="button_with_price">
                    <button type="submit" class="Add_in_Bug">
                        <p>В корзину</p>
                    </button>
                    <h3>420 ₽</h3>
                </div>
            </div>
            <div class="cards_New_Sushi">
                <img src="../assets/images/New/icon_NEW.png" id="New_image" alt="">
                <div class="food">
                    <img src="../assets/images/foods/New/Philadelphia_Rolls.png" id="Philadelphia_Rolls" alt="">
                </div>
                <div class="Name_food">
                    <h2>Филадельфия</h2>
                    <h3>47 г.</h3>
                </div>
                <div class="button_with_price">
                    <button type="submit" class="Add_in_Bug">
                        <p>В корзину</p>
                    </button>
                    <h3>420 ₽</h3>
                </div>
            </div>

            <div class="cards_New_Sushi">
                <img src="../assets/images/New/icon_NEW.png" id="New_image" alt="">
                <div class="food">
                    <img src="../assets/images/foods/New/Philadelphia_Rolls.png" id="Philadelphia_Rolls" alt="">
                </div>
                <div class="Name_food">
                    <h2>Филадельфия</h2>
                    <h3>47 г.</h3>
                </div>
                <div class="button_with_price">
                    <button type="submit" class="Add_in_Bug">
                        <p>В корзину</p>
                    </button>
                    <h3>420 ₽</h3>
                </div>
            </div>

            <div class="cards_New_Sushi">
                <img src="../assets/images/New/icon_NEW.png" id="New_image" alt="">
                <div class="food">
                    <img src="../assets/images/foods/New/Philadelphia_Rolls.png" id="Philadelphia_Rolls" alt="">
                </div>
                <div class="Name_food">
                    <h2>Филадельфия</h2>
                    <h3>47 г.</h3>
                </div>
                <div class="button_with_price">
                    <button type="submit" class="Add_in_Bug">
                        <p>В корзину</p>
                    </button>
                    <h3>420 ₽</h3>
                </div>
            </div>
        </div>

        <div class="Cards_New_Sushi">
            <div class="cards_New_Sushi">
                <img src="../assets/images/New/icon_NEW.png" id="New_image" alt="">
                <div class="food">
                    <img src="../assets/images/foods/New/Philadelphia_Rolls.png" id="Philadelphia_Rolls" alt="">
                </div>
                <div class="Name_food">
                    <h2>Филадельфия</h2>
                    <h3>47 г.</h3>
                </div>
                <div class="button_with_price">
                    <button type="submit" class="Add_in_Bug">
                        <p>В корзину</p>
                    </button>
                    <h3>420 ₽</h3>
                </div>
            </div>
            <div class="cards_New_Sushi">
                <img src="../assets/images/New/icon_NEW.png" id="New_image" alt="">
                <div class="food">
                    <img src="../assets/images/foods/New/Philadelphia_Rolls.png" id="Philadelphia_Rolls" alt="">
                </div>
                <div class="Name_food">
                    <h2>Филадельфия</h2>
                    <h3>47 г.</h3>
                </div>
                <div class="button_with_price">
                    <button type="submit" class="Add_in_Bug">
                        <p>В корзину</p>
                    </button>
                    <h3>420 ₽</h3>
                </div>
            </div>

            <div class="cards_New_Sushi">
                <img src="../assets/images/New/icon_NEW.png" id="New_image" alt="">
                <div class="food">
                    <img src="../assets/images/foods/New/Philadelphia_Rolls.png" id="Philadelphia_Rolls" alt="">
                </div>
                <div class="Name_food">
                    <h2>Филадельфия</h2>
                    <h3>47 г.</h3>
                </div>
                <div class="button_with_price">
                    <button type="submit" class="Add_in_Bug">
                        <p>В корзину</p>
                    </button>
                    <h3>420 ₽</h3>
                </div>
            </div>

            <div class="cards_New_Sushi">
                <img src="../assets/images/New/icon_NEW.png" id="New_image" alt="">
                <div class="food">
                    <img src="../assets/images/foods/New/Philadelphia_Rolls.png" id="Philadelphia_Rolls" alt="">
                </div>
                <div class="Name_food">
                    <h2>Филадельфия</h2>
                    <h3>47 г.</h3>
                </div>
                <div class="button_with_price">
                    <button type="submit" class="Add_in_Bug">
                        <p>В корзину</p>
                    </button>
                    <h3>420 ₽</h3>
                </div>
            </div>
        </div>

        <div class="Cards_New_Sushi">
            <div class="cards_New_Sushi">
                <img src="../assets/images/New/icon_NEW.png" id="New_image" alt="">
                <div class="food">
                    <img src="../assets/images/foods/New/Philadelphia_Rolls.png" id="Philadelphia_Rolls" alt="">
                </div>
                <div class="Name_food">
                    <h2>Филадельфия</h2>
                    <h3>47 г.</h3>
                </div>
                <div class="button_with_price">
                    <button type="submit" class="Add_in_Bug">
                        <p>В корзину</p>
                    </button>
                    <h3>420 ₽</h3>
                </div>
            </div>
            <div class="cards_New_Sushi">
                <img src="../assets/images/New/icon_NEW.png" id="New_image" alt="">
                <div class="food">
                    <img src="../assets/images/foods/New/Philadelphia_Rolls.png" id="Philadelphia_Rolls" alt="">
                </div>
                <div class="Name_food">
                    <h2>Филадельфия</h2>
                    <h3>47 г.</h3>
                </div>
                <div class="button_with_price">
                    <button type="submit" class="Add_in_Bug">
                        <p>В корзину</p>
                    </button>
                    <h3>420 ₽</h3>
                </div>
            </div>

            <div class="cards_New_Sushi">
                <img src="../assets/images/New/icon_NEW.png" id="New_image" alt="">
                <div class="food">
                    <img src="../assets/images/foods/New/Philadelphia_Rolls.png" id="Philadelphia_Rolls" alt="">
                </div>
                <div class="Name_food">
                    <h2>Филадельфия</h2>
                    <h3>47 г.</h3>
                </div>
                <div class="button_with_price">
                    <button type="submit" class="Add_in_Bug">
                        <p>В корзину</p>
                    </button>
                    <h3>420 ₽</h3>
                </div>
            </div>

            <div class="cards_New_Sushi">
                <img src="../assets/images/New/icon_NEW.png" id="New_image" alt="">
                <div class="food">
                    <img src="../assets/images/foods/New/Philadelphia_Rolls.png" id="Philadelphia_Rolls" alt="">
                </div>
                <div class="Name_food">
                    <h2>Филадельфия</h2>
                    <h3>47 г.</h3>
                </div>
                <div class="button_with_price">
                    <button type="submit" class="Add_in_Bug">
                        <p>В корзину</p>
                    </button>
                    <h3>420 ₽</h3>
                </div>
            </div>
        </div>

        <div class="Cards_New_Sushi">
            <div class="cards_New_Sushi">
                <img src="../assets/images/New/icon_NEW.png" id="New_image" alt="">
                <div class="food">
                    <img src="../assets/images/foods/New/Philadelphia_Rolls.png" id="Philadelphia_Rolls" alt="">
                </div>
                <div class="Name_food">
                    <h2>Филадельфия</h2>
                    <h3>47 г.</h3>
                </div>
                <div class="button_with_price">
                    <button type="submit" class="Add_in_Bug">
                        <p>В корзину</p>
                    </button>
                    <h3>420 ₽</h3>
                </div>
            </div>
            <div class="cards_New_Sushi">
                <img src="../assets/images/New/icon_NEW.png" id="New_image" alt="">
                <div class="food">
                    <img src="../assets/images/foods/New/Philadelphia_Rolls.png" id="Philadelphia_Rolls" alt="">
                </div>
                <div class="Name_food">
                    <h2>Филадельфия</h2>
                    <h3>47 г.</h3>
                </div>
                <div class="button_with_price">
                    <button type="submit" class="Add_in_Bug">
                        <p>В корзину</p>
                    </button>
                    <h3>420 ₽</h3>
                </div>
            </div>

            <div class="cards_New_Sushi">
                <img src="../assets/images/New/icon_NEW.png" id="New_image" alt="">
                <div class="food">
                    <img src="../assets/images/foods/New/Philadelphia_Rolls.png" id="Philadelphia_Rolls" alt="">
                </div>
                <div class="Name_food">
                    <h2>Филадельфия</h2>
                    <h3>47 г.</h3>
                </div>
                <div class="button_with_price">
                    <button type="submit" class="Add_in_Bug">
                        <p>В корзину</p>
                    </button>
                    <h3>420 ₽</h3>
                </div>
            </div>

            <div class="cards_New_Sushi">
                <img src="../assets/images/New/icon_NEW.png" id="New_image" alt="">
                <div class="food">
                    <img src="../assets/images/foods/New/Philadelphia_Rolls.png" id="Philadelphia_Rolls" alt="">
                </div>
                <div class="Name_food">
                    <h2>Филадельфия</h2>
                    <h3>47 г.</h3>
                </div>
                <div class="button_with_price">
                    <button type="submit" class="Add_in_Bug">
                        <p>В корзину</p>
                    </button>
                    <h3>420 ₽</h3>
                </div>
            </div>
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