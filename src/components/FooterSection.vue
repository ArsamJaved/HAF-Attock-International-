<script setup>
</script>


<template>
    <section class="footer-section">
        <div class="overlay"></div>
        <div class="container f-content">
            <div class="row gy-5">
                <div class="col-12 col-md-4 col-lg-5 mt-0">
                    <img src="../assets/Images/logo.png" width="150" alt="">

                    <p  >
                        Welcome to Attock International ! We are a family-owned <br class="d-none d-md-block"> business that has been serving
                        the community for over 20 years. Our goal<br class="d-none d-md-block"> is to provide high-quality, fresh, and delicious dry
                        fruits and <br class="d-none d-md-block"> spies to our customers at affordable prices.
                    </p>
                </div>

                <div class="col-12 col-md-4 col-lg f-links d-flex flex-column">
                    <h5>
                        QUICK LINKS
                    </h5>

                    <RouterLink class="f-link py-2" to="/">
                        Home Page
                    </RouterLink>

                    <RouterLink class="f-link py-2" to="about">
                        About us
                    </RouterLink>

                    <RouterLink class="f-link py-2" to="contact">
                        Contact us
                    </RouterLink>

                    <RouterLink class="f-link py-2" to="allProducts">
                        Products
                    </RouterLink>
                </div>

                <!-- <div class="col-12 col-md-4 col-lg">
                    <h5>
                        LOCATION
                    </h5>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31761.81417189591!2d73.12338481542578!3d33.556284497761226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfed001f041191%3A0x509d1aca430fada4!2sUnity%20Global%20Attorneys!5e0!3m2!1sen!2s!4v1716959857321!5m2!1sen!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div> -->

                <div class="col-12 col-md-4 col-lg-4">
                    <h5>
                        CONTACT US
                    </h5>
                    <span>
                        +971 56 465 7950
                    </span>
                </div>
            </div>
        </div>
    </section>
</template>



<style scoped>

.footer-section {
    background-image: url('../assets/Images/main-slider-1.png');
    background-position: bottom;
    background-attachment: fixed;
    position: relative;
    color: #fff;
    padding: 5rem 0;
}

.f-link {
    color: #fff;
    text-decoration: none;
    font-size: 14px;
}

p {
    font-size: 13px;
    font-weight: 400
}

span {
    font-size: 14px;
}

.overlay {
    background-color: #000000ce;
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
}

.f-content {
    position: relative;
    z-index: 99
}
</style>