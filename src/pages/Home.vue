<script>
import Card from '@/components/Card.vue'
    export default{
        props: [''],
        components: {Card},
        data(){
            return{
                special_offers: [
                    {
                        name_roll: "Ролл Онигири",
                        weight: "30 г.",
                        price: "120 ₽"
                    },
                    {
                        name_roll: "Ролл Онигири",
                        weight: "30 г.",
                        price: "120 ₽"
                    },
                    {
                        name_roll: "Ролл Онигири",
                        weight: "30 г.",
                        price: "120 ₽"
                    },
                    {
                        name_roll: "Ролл Онигири",
                        weight: "30 г.",
                        price: "120 ₽"
                    },
                ]
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

    <!-- Рекламный баннер -->
    <div class="reklama">
        <a href="#"><img src="../assets/images/reklama/reklama_thursday.png" alt=""></a>
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
    
            <router-link to="/category_page"><div class="category">
                <img src="../assets/images/our_categories/Обеденное меню 4.png" alt="">
                <h6>Супы WOK</h6>
            </div></router-link>
    
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
            <router-link to="/chapter">Перейти в раздел</router-link>
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


            <!-- Раздел Спецпредложения -->
            <div class="New_Sushi">
                <div class="head_our_categories">
                    <h1>Спецпредложения</h1>
                    <a href="#">Перейти в раздел</a>
                </div>
        
                <div class="Cards_New_Sushi">

                    <Card v-for="offer in special_offers" :parentData="offer"></Card>
                    <div class="cards_New_Sushi">
                        <img src="../assets/images/New/icon_SALE.png" id="New_image" alt="">
                        <div class="food">
                            <img src="../assets/images/foods/New/Onigiri_Rolls.png" id="Onigiri_Rolls" alt="">
                        </div>
                        <div class="Name_food">
                            <h2>Ролл Онигири</h2>
                            <h3>30 г.</h3>
                        </div>
                        <div class="button_with_price">
                            <button type="submit" class="Add_in_Bug">
                                <p>В корзину</p>
                            </button>
                            <h3>120 ₽</h3>
                        </div>
                    </div>
                    <div class="cards_New_Sushi">
                        <img src="../assets/images/New/icon_SALE.png" id="New_image" alt="">
                        <div class="food">
                            <img src="../assets/images/foods/New/Onigiri_Rolls.png" id="Onigiri_Rolls" alt="">
                        </div>
                        <div class="Name_food">
                            <h2>Ролл Онигири</h2>
                            <h3>30 г.</h3>
                        </div>
                        <div class="button_with_price">
                            <button type="submit" class="Add_in_Bug">
                                <p>В корзину</p>
                            </button>
                            <h3>120 ₽</h3>
                        </div>
                    </div>
        
                    <div class="cards_New_Sushi">
                        <img src="../assets/images/New/icon_SALE.png" id="New_image" alt="">
                        <div class="food">
                            <img src="../assets/images/foods/New/Onigiri_Rolls.png" id="Onigiri_Rolls" alt="">
                        </div>
                        <div class="Name_food">
                            <h2>Ролл Онигири</h2>
                            <h3>30 г.</h3>
                        </div>
                        <div class="button_with_price">
                            <button type="submit" class="Add_in_Bug">
                                <p>В корзину</p>
                            </button>
                            <h3>120 ₽</h3>
                        </div>
                    </div>
        
                    <div class="cards_New_Sushi">
                        <img src="../assets/images/New/icon_SALE.png" id="New_image" alt="">
                        <div class="food">
                            <img src="../assets/images/foods/New/Onigiri_Rolls.png" id="Onigiri_Rolls" alt="">
                        </div>
                        <div class="Name_food">
                            <h2>Ролл Онигири</h2>
                            <h3>30 г.</h3>
                        </div>
                        <div class="button_with_price">
                            <button type="submit" class="Add_in_Bug" id="Onigiri_button">
                                <p>В корзину</p>
                            </button>
                            <h3>120 ₽</h3>
                        </div>
                    </div>
                </div>
        </div>

        <!-- Раздел с инфографикой -->
        <div class="Back_infographics">
            <div class="back_infographics">
                <div class="infographic_property">
                    <div class="content_infographic">
                        <img src="../assets/images/infographics/infographic_price.png" alt="">
                        <h3>Разумные цены и приятные бонусы</h3>
                    </div>
                </div>
    
                <div class="infographic_property">
                    <div class="content_infographic">
                        <img src="../assets/images/infographics/infographic_products.png" alt="">
                        <h3>Качественные и свежие продукты</h3>
                    </div>
                </div>
    
                <div class="infographic_property">
                    <div class="content_infographic">
                        <img src="../assets/images/infographics/infographic_delivery.png" alt="">
                        <h3 style="max-width: 200px; margin-left: 50px;">Очень быстрая доставка</h3>
                    </div>
                </div>
    
                <div class="infographic_property">
                    <div class="content_infographic">
                        <img src="../assets/images/infographics/infographic_smile.png" alt="">
                        <h3>Большие порции</h3>
                    </div>
                </div>
            </div>
        </div>

        <!-- Раздел с новостями -->
        <div class="New_Sushi">
            <div class="head_our_categories">
                <h1>Новости</h1>
                <a href="#">Перейти в раздел</a>
            </div>
            <div class="content_News">
                <div class="card_News">
                    <div class="content_card_News">
                        <h1>В чем отличие роллов от суши?</h1>
                        <h3>Японская кухня разнообразна, но чаще встречается такие блюд а как...</h3>
                        <h3 id="card_News_h3">12.02.2024</h3>
                    </div>
                    <div class="btn_news">
                        <button type="submit">
                            <img src="../assets/images/News/btn_News.png" alt="">
                        </button>
                    </div>
                </div>
    
                <div class="card_News">
                    <div class="content_card_News">
                        <h1>В чем отличие роллов от суши?</h1>
                        <h3>Японская кухня разнообразна, но чаще встречается такие блюд а как...</h3>
                        <h3 id="card_News_h3">12.02.2024</h3>
                    </div>
                    <div class="btn_news">
                        <button type="submit">
                            <img src="../assets/images/News/btn_News.png" alt="">
                        </button>
                    </div>
                </div>
    
                <div class="card_News">
                    <div class="content_card_News">
                        <h1>В чем отличие роллов от суши?</h1>
                        <h3>Японская кухня разнообразна, но чаще встречается такие блюд а как...</h3>
                        <h3 id="card_News_h3">12.02.2024</h3>
                    </div>
                    <div class="btn_news">
                        <button type="submit">
                            <img src="../assets/images/News/btn_News.png" alt="">
                        </button>
                    </div>
                </div>
            </div>

            <!-- Раздел с отзывами -->
        <div class="New_Sushi">
            <div class="head_our_categories">
                <h1>Отзывы</h1>
                <a href="#">Все отзывы</a>
            </div>

            <div class="Card_Reviews">
                <div class="card_reviews">
                    <div class="image_user">
                        <img src="../assets/images/reviews/user's_avatar.png" alt="">
                    </div>
                    <div class="review_user">
                        <p>Васаби для сильных духом. Не знаю, откуда
                            они его берут, но очень ядреный. Это не в
                            недочеты, наоборот даже. Хорошая
                            компания. Мне понравилось.</p>
                        <h3>Дмитрий М.</h3>
                    </div>
                </div>
    
                <div class="card_reviews">
                    <div class="image_user">
                        <img src="../assets/images/reviews/user's_avatar.png" alt="">
                    </div>
                    <div class="review_user">
                        <p>Васаби для сильных духом. Не знаю, откуда
                            они его берут, но очень ядреный. Это не в
                            недочеты, наоборот даже. Хорошая
                            компания. Мне понравилось.</p>
                        <h3>Дмитрий М.</h3>
                    </div>
                </div>
    
                <div class="card_reviews">
                    <div class="image_user">
                        <img src="../assets/images/reviews/user's_avatar.png" alt="">
                    </div>
                    <div class="review_user">
                        <p>Васаби для сильных духом. Не знаю, откуда
                            они его берут, но очень ядреный. Это не в
                            недочеты, наоборот даже. Хорошая
                            компания. Мне понравилось.</p>
                        <h3>Дмитрий М.</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Раздел с поставщиками -->
    <div class="New_Sushi">
        <div class="head_our_categories">
            <h1>Поставщики</h1>
        </div>

        <div class="content_supplies">
            <a href="https://www.kalinka74.ru"><img src="../assets/images/Suppliers/Калинка.png" alt=""></a>
            <a href="https://zferma.ru"><img src="../assets/images/Suppliers/Здоровая ферма.png" alt=""></a>
            <a href="https://voblamania.ru"><img src="../assets/images/Suppliers/Вобламания.png" alt=""></a>
            <a href="https://af-ariant.ru"><img src="../assets/images/Suppliers/Ариант.png" alt=""></a>
            <a href="http://kolos-chel.ru"><img src="../assets/images/Suppliers/Колос.png" alt=""></a>
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