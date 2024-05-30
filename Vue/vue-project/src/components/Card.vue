<script>
// Карточки "Спецпредложения"
    export default{
        props: ['parentData']
    }
</script>

<template>
    <div class="cards_New_Sushi">
                        <img src="../assets/images/New/icon_SALE.png" id="New_image" alt="">
                        <div class="food">
                            <img src="../assets/images/foods/New/Onigiri_Rolls.png" id="Onigiri_Rolls" alt="">
                        </div>
                        <div class="Name_food">
                            <h2>{{parentData.name_roll}}</h2>
                            <h3>{{parentData.weight}}</h3>
                        </div>
                        <div class="button_with_price">
                            <button type="submit" class="Add_in_Bug">
                                <p>В корзину</p>
                            </button>
                            <h3>{{parentData.price}}</h3>
                        </div>
                    </div>
</template>

<style scoped>

</style>
