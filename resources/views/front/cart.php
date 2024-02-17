<!-- Include header start section -->
<?php include 'inc/header.php'; ?>
<!-- Include header end section -->

<main class="main__content_wrapper">

    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section breadcrumb__bg">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content">
                        <h1 class="breadcrumb__content--title text-white mb-10">Shopping Cart</h1>
                        <ul class="breadcrumb__content--menu d-flex">
                            <li class="breadcrumb__content--menu__items"><a class="text-white" href="index.php">Home</a></li>
                            <li class="breadcrumb__content--menu__items"><span class="text-white">Shopping Cart</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->

    <!-- cart section start -->
    <section class="cart__section section--padding">
        <div class="container">
            <div class="cart__section--inner">
                <form action="#">
                    <h2 class="cart__title mb-40">Shopping Cart</h2>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="cart__table">
                                <table class="cart__table--inner">
                                    <thead class="cart__table--header">
                                        <tr class="cart__table--header__items">
                                            <th class="cart__table--header__list">Product</th>
                                            <th class="cart__table--header__list">Price</th>
                                            <th class="cart__table--header__list">Quantity</th>
                                            <th class="cart__table--header__list">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody class="cart__table--body">
                                        <tr class="cart__table--body__items">
                                            <td class="cart__table--body__list">
                                                <div class="cart__product d-flex align-items-center">
                                                    <button class="cart__remove--btn" aria-label="search button" type="button"><svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16px" height="16px">
                                                            <path d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z" />
                                                        </svg></button>
                                                    <div class="cart__thumbnail">
                                                        <a href="product-details.php"><img class="border-radius-5" src="assets/img/product/art1.jpg" alt="cart-product"></a>
                                                    </div>
                                                    <div class="cart__content">
                                                        <h4 class="cart__content--title"><a href="product-details.php">Art 1</a></h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="cart__table--body__list">
                                                <span class="cart__price">$150.00</span>
                                            </td>
                                            <td class="cart__table--body__list">
                                                <div class="quantity__box">
                                                    <button type="button" class="quantity__value quickview__value--quantity decrease" aria-label="quantity value" value="Decrease Value">-</button>
                                                    <label>
                                                        <input type="number" class="quantity__number quickview__value--number" value="1" />
                                                    </label>
                                                    <button type="button" class="quantity__value quickview__value--quantity increase" aria-label="quantity value" value="Increase Value">+</button>
                                                </div>
                                            </td>
                                            <td class="cart__table--body__list">
                                                <span class="cart__price end">£130.00</span>
                                            </td>
                                        </tr>
                                        <tr class="cart__table--body__items">
                                            <td class="cart__table--body__list">
                                                <div class="cart__product d-flex align-items-center">
                                                    <button class="cart__remove--btn" aria-label="search button" type="button"><svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16px" height="16px">
                                                            <path d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z" />
                                                        </svg></button>
                                                    <div class="cart__thumbnail">
                                                        <a href="product-details.php"><img class="border-radius-5" src="assets/img/product/art2.jpg" alt="cart-product"></a>
                                                    </div>
                                                    <div class="cart__content">
                                                        <h4 class="cart__content--title"><a href="product-details.php">Art 2</a></h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="cart__table--body__list">
                                                <span class="cart__price">$150.00</span>
                                            </td>
                                            <td class="cart__table--body__list">
                                                <div class="quantity__box">
                                                    <button type="button" class="quantity__value quickview__value--quantity decrease" aria-label="quantity value" value="Decrease Value">-</button>
                                                    <label>
                                                        <input type="number" class="quantity__number quickview__value--number" value="1" />
                                                    </label>
                                                    <button type="button" class="quantity__value quickview__value--quantity increase" aria-label="quantity value" value="Increase Value">+</button>
                                                </div>
                                            </td>
                                            <td class="cart__table--body__list">
                                                <span class="cart__price end">£130.00</span>
                                            </td>
                                        </tr>
                                        <tr class="cart__table--body__items">
                                            <td class="cart__table--body__list">
                                                <div class="cart__product d-flex align-items-center">
                                                    <button class="cart__remove--btn" aria-label="search button" type="button"><svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16px" height="16px">
                                                            <path d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z" />
                                                        </svg></button>
                                                    <div class="cart__thumbnail">
                                                        <a href="product-details.php"><img class="border-radius-5" src="assets/img/product/art3.jpg" alt="cart-product"></a>
                                                    </div>
                                                    <div class="cart__content">
                                                        <h4 class="cart__content--title"><a href="product-details.php">Art 3</a></h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="cart__table--body__list">
                                                <span class="cart__price">$150.00</span>
                                            </td>
                                            <td class="cart__table--body__list">
                                                <div class="quantity__box">
                                                    <button type="button" class="quantity__value quickview__value--quantity decrease" aria-label="quantity value" value="Decrease Value">-</button>
                                                    <label>
                                                        <input type="number" class="quantity__number quickview__value--number" value="1" />
                                                    </label>
                                                    <button type="button" class="quantity__value quickview__value--quantity increase" aria-label="quantity value" value="Increase Value">+</button>
                                                </div>
                                            </td>
                                            <td class="cart__table--body__list">
                                                <span class="cart__price end">£130.00</span>
                                            </td>
                                        </tr>
                                        <tr class="cart__table--body__items">
                                            <td class="cart__table--body__list">
                                                <div class="cart__product d-flex align-items-center">
                                                    <button class="cart__remove--btn" aria-label="search button" type="button"><svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16px" height="16px">
                                                            <path d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z" />
                                                        </svg></button>
                                                    <div class="cart__thumbnail">
                                                        <a href="product-details.php"><img class="border-radius-5" src="assets/img/product/art4.jpg" alt="cart-product"></a>
                                                    </div>
                                                    <div class="cart__content">
                                                        <h4 class="cart__content--title"><a href="product-details.php">Art 4</a></h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="cart__table--body__list">
                                                <span class="cart__price">$150.00</span>
                                            </td>
                                            <td class="cart__table--body__list">
                                                <div class="quantity__box">
                                                    <button type="button" class="quantity__value quickview__value--quantity decrease" aria-label="quantity value" value="Decrease Value">-</button>
                                                    <label>
                                                        <input type="number" class="quantity__number quickview__value--number" value="1" />
                                                    </label>
                                                    <button type="button" class="quantity__value quickview__value--quantity increase" aria-label="quantity value" value="Increase Value">+</button>
                                                </div>
                                            </td>
                                            <td class="cart__table--body__list">
                                                <span class="cart__price end">£130.00</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="continue__shopping d-flex justify-content-between">
                                    <a class="continue__shopping--link" href="shop.php">Continue shopping</a>
                                    <button class="continue__shopping--clear" type="submit">Clear Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="cart__summary border-radius-10">
                                <div class="coupon__code mb-30">
                                    <h3 class="coupon__code--title">Coupon</h3>
                                    <p class="coupon__code--desc">Enter your coupon code if you have one.</p>
                                    <div class="coupon__code--field d-flex">
                                        <label>
                                            <input class="coupon__code--field__input border-radius-5" placeholder="Coupon code" type="text">
                                        </label>
                                        <button class="coupon__code--field__btn primary__btn" type="submit">Apply Coupon</button>
                                    </div>
                                </div>
                                <div class="cart__note mb-20">
                                    <h3 class="cart__note--title">Note</h3>
                                    <p class="cart__note--desc">Add special instructions for your seller...</p>
                                    <textarea class="cart__note--textarea border-radius-5"></textarea>
                                </div>
                                <div class="cart__summary--total mb-20">
                                    <table class="cart__summary--total__table">
                                        <tbody>
                                            <tr class="cart__summary--total__list">
                                                <td class="cart__summary--total__title text-left">SUBTOTAL</td>
                                                <td class="cart__summary--amount text-right">$860.00</td>
                                            </tr>
                                            <tr class="cart__summary--total__list">
                                                <td class="cart__summary--total__title text-left">GRAND TOTAL</td>
                                                <td class="cart__summary--amount text-right">$860.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="cart__summary--footer">
                                    <p class="cart__summary--footer__desc">Shipping & taxes calculated at checkout</p>
                                    <ul class="d-flex justify-content-between">
                                        <li><button class="cart__summary--footer__btn primary__btn cart" type="submit">Update Cart</button></li>
                                        <li><a class="cart__summary--footer__btn primary__btn checkout" href="checkout.php">Check Out</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- cart section end -->
</main>

<!-- Include footer start section -->
<?php include 'inc/footer.php'; ?>
<!-- Include footer end section -->