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
                        <h1 class="breadcrumb__content--title text-white mb-10">My Account</h1>
                        <ul class="breadcrumb__content--menu d-flex">
                            <li class="breadcrumb__content--menu__items"><a class="text-white" href="index.php">Home</a></li>
                            <li class="breadcrumb__content--menu__items"><span class="text-white">My Account</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->

    <!-- my account section start -->
    <section class="my__account--section section--padding">
        <div class="container">
            <p class="account__welcome--text">Hello, Admin welcome to your dashboard!</p>
            <div class="my__account--section__inner border-radius-10 d-flex">
                <div class="account__left--sidebar">
                    <h3 class="account__content--title mb-20">My Profile</h3>
                    <ul class="account__menu">
                        <li class="account__menu--list active"><a href="my-account.php">Dashboard</a></li>
                        <li class="account__menu--list"><a href="wishlist.php">Wishlist</a></li>
                        <li class="account__menu--list"><a href="login.php">Log Out</a></li>
                    </ul>
                </div>
                <div class="account__wrapper">
                    <div class="account__content">
                        <h3 class="account__content--title mb-20">Orders History</h3>
                        <div class="account__table--area">
                            <table class="account__table">
                                <thead class="account__table--header">
                                    <tr class="account__table--header__child">
                                        <th class="account__table--header__child--items">Order</th>
                                        <th class="account__table--header__child--items">Date</th>
                                        <th class="account__table--header__child--items">Payment Status</th>
                                        <th class="account__table--header__child--items">Fulfillment Status</th>
                                        <th class="account__table--header__child--items">Total</th>
                                    </tr>
                                </thead>
                                <tbody class="account__table--body mobile__none">
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">#2014</td>
                                        <td class="account__table--body__child--items">November 24, 2022</td>
                                        <td class="account__table--body__child--items">Paid</td>
                                        <td class="account__table--body__child--items">Unfulfilled</td>
                                        <td class="account__table--body__child--items">$40.00 USD</td>
                                    </tr>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">#2024</td>
                                        <td class="account__table--body__child--items">November 24, 2022</td>
                                        <td class="account__table--body__child--items">Paid</td>
                                        <td class="account__table--body__child--items">Fulfilled</td>
                                        <td class="account__table--body__child--items">$44.00 USD</td>
                                    </tr>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">#2164</td>
                                        <td class="account__table--body__child--items">November 24, 2022</td>
                                        <td class="account__table--body__child--items">Paid</td>
                                        <td class="account__table--body__child--items">Unfulfilled</td>
                                        <td class="account__table--body__child--items">$36.00 USD</td>
                                    </tr>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">#2345</td>
                                        <td class="account__table--body__child--items">November 24, 2022</td>
                                        <td class="account__table--body__child--items">Paid</td>
                                        <td class="account__table--body__child--items">Unfulfilled</td>
                                        <td class="account__table--body__child--items">$87.00 USD</td>
                                    </tr>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">#1244</td>
                                        <td class="account__table--body__child--items">November 24, 2022</td>
                                        <td class="account__table--body__child--items">Paid</td>
                                        <td class="account__table--body__child--items">Fulfilled</td>
                                        <td class="account__table--body__child--items">$66.00 USD</td>
                                    </tr>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">#3455</td>
                                        <td class="account__table--body__child--items">November 24, 2022</td>
                                        <td class="account__table--body__child--items">Paid</td>
                                        <td class="account__table--body__child--items">Fulfilled</td>
                                        <td class="account__table--body__child--items">$55.00 USD</td>
                                    </tr>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">#4566</td>
                                        <td class="account__table--body__child--items">November 24, 2022</td>
                                        <td class="account__table--body__child--items">Paid</td>
                                        <td class="account__table--body__child--items">Unfulfilled</td>
                                        <td class="account__table--body__child--items">$87.00 USD</td>
                                    </tr>
                                </tbody>
                                <tbody class="account__table--body mobile__block">
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">
                                            <strong>Order</strong>
                                            <span>#2014</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Date</strong>
                                            <span>November 24, 2022</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Payment Status</strong>
                                            <span>Paid</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Fulfillment Status</strong>
                                            <span>Unfulfilled</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Total</strong>
                                            <span>$40.00 USD</span>
                                        </td>
                                    </tr>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">
                                            <strong>Order</strong>
                                            <span>#2014</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Date</strong>
                                            <span>November 24, 2022</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Payment Status</strong>
                                            <span>Paid</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Fulfillment Status</strong>
                                            <span>Unfulfilled</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Total</strong>
                                            <span>$40.00 USD</span>
                                        </td>
                                    </tr>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">
                                            <strong>Order</strong>
                                            <span>#2014</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Date</strong>
                                            <span>November 24, 2022</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Payment Status</strong>
                                            <span>Paid</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Fulfillment Status</strong>
                                            <span>Unfulfilled</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Total</strong>
                                            <span>$40.00 USD</span>
                                        </td>
                                    </tr>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">
                                            <strong>Order</strong>
                                            <span>#2014</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Date</strong>
                                            <span>November 24, 2022</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Payment Status</strong>
                                            <span>Paid</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Fulfillment Status</strong>
                                            <span>Unfulfilled</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Total</strong>
                                            <span>$40.00 USD</span>
                                        </td>
                                    </tr>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">
                                            <strong>Order</strong>
                                            <span>#2014</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Date</strong>
                                            <span>November 24, 2022</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Payment Status</strong>
                                            <span>Paid</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Fulfillment Status</strong>
                                            <span>Unfulfilled</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Total</strong>
                                            <span>$40.00 USD</span>
                                        </td>
                                    </tr>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">
                                            <strong>Order</strong>
                                            <span>#2014</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Date</strong>
                                            <span>November 24, 2022</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Payment Status</strong>
                                            <span>Paid</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Fulfillment Status</strong>
                                            <span>Unfulfilled</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Total</strong>
                                            <span>$40.00 USD</span>
                                        </td>
                                    </tr>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">
                                            <strong>Order</strong>
                                            <span>#2014</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Date</strong>
                                            <span>November 24, 2022</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Payment Status</strong>
                                            <span>Paid</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Fulfillment Status</strong>
                                            <span>Unfulfilled</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>Total</strong>
                                            <span>$40.00 USD</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- my account section end -->
</main>

<!-- Include footer start section -->
<?php include 'inc/footer.php'; ?>
<!-- Include footer end section -->