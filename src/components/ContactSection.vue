<template>
    <OtherPageHeader />
    <section class="py-5">
        <div class="container py-5">
            <h1 class="heading-text">
                <span v-for="(char, index) in contactArray" :key="index" class="char">
                    {{ char }}
                </span>
            </h1>

            <div class="row gap-5 mt-5">
                <div class="col-12 col-md-7 contact-left-side">
                    <img src="../assets/Images/contact-1-img.jpg" alt="">
                    <div class="info-card p-4">
                        <div class="address">
                            <h5>
                                Address
                            </h5>
                            <p>
                                Plaza Región Murciana 10, 1A <br>
                                30.500 Molina de Segura <br>
                                Murcia - SPAIN
                            </p>
                        </div>

                        <div class="whatsapp">
                            <h5>
                                whatsapp
                            </h5>
                            <p>
                                +1232435857
                            </p>
                        </div>

                        <div class="email">
                            <h5>
                                email
                            </h5>
                            <p>
                                abcadskj@gmail.com
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md">
                    <h4>Get in touch</h4>
                    <p>
                        We look forward to hearing from you, about your needs, about the products that you are
                        interested in, the required labelling, delivery timing and any other information that can help
                        us to get the best offers for you.
                    </p>

                    <form @submit.prevent="handleSubmit">
                        <div class="mt-4">
                            <input type="text" id="name" placeholder="Your Name" v-model="formData.name">
                            <span v-if="errors.name">{{ errors.name }}</span>
                        </div>
                        <br>
                        <div>
                            <input type="number" id="phoneNumber" placeholder="Phone Number" v-model="formData.number">
                            <span v-if="errors.number">{{ errors.number }}</span>
                        </div>
                        <br>
                        <div>
                            <input type="email" id="email" placeholder="Your Email" v-model="formData.email">
                            <span v-if="errors.email">{{ errors.email }}</span>
                        </div>
                        <br>
                        <div>
                            <textarea id="message" placeholder="Your Message" v-model="formData.message"></textarea>
                            <span v-if="errors.message">{{ errors.message }}</span>
                        </div>
                        <br>
                        <button type="submit" class="px-5 py-1 rounded-1">
                            SEND
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</template>


<script setup>
import { gsap } from 'gsap';
import { computed, reactive } from 'vue';
import { onMounted } from 'vue';
import OtherPageHeader from './OtherPageHeader.vue'
import axios from 'axios';
import qs from 'qs';



// Reactive object for form data
const formData = reactive({
    name: '',
    number: '',
    email: '',
    message: ''
});

// Reactive object for validation errors
const errors = reactive({
    name: '',
    number: '',
    email: '',
});

// Validate form fields
const formValidations = () => {
    let isValid = true;

    // Clear previous errors
    errors.name = '';
    errors.number = '';
    errors.email = '';

    // Name validation
    if (!formData.name) {
        errors.name = 'Your name is required';
        isValid = false;
    }

    // Phone number validation
    if (!formData.number) {
        errors.number = 'Your phone number is required';
        isValid = false;
    } else if (!/^\d+$/.test(formData.number)) {
        errors.number = 'Phone number must be numeric.';
        isValid = false;
    }

    // Email validation
    if (!formData.email) {
        errors.email = 'Your email is required';
        isValid = false;
    } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(formData.email)) {
        errors.email = 'Email must be a valid email address.';
        isValid = false;
    }

    // Message validation
    if (!formData.message) {
        errors.message = 'Your message is required';
        isValid = false;
    }

    return isValid;
};

// Handle form submission
const handleSubmit = async () => {
    if (formValidations()) {
        var form = new FormData();
        form.append('name', formData.name);
        form.append('number', formData.number);
        form.append('email', formData.email);
        form.append('message', formData.message);
        try {
            const response = await axios.post('/contactss.php', qs.stringify(form)
                , { headers: { 'Content-Type': 'application/x-www-form-urlencoded' } });
            console.log('Form submitted successfully:', response.data);
        } catch (error) {
            console.error('Error submitting form:', error);
        }
    }
};


const contactArray = computed(() => 'CONTACT'.split(''))


onMounted(() => {
    gsap.to('.char', {
        y: 0,
        opacity: 1,
        duration: 1.4,
        stagger: .3,
    })
})
</script>


<style scoped>
.heading-text {
    text-align: center;
    overflow: hidden;
}

.heading-text span {
    font-size: clamp(50px, 12vw, 200px);
    color: var(--header-bg-main--);
    font-weight: 800;
    letter-spacing: 15px;
}

.info-card {
    background-color: #02a14fbe;
    color: #fff;
}

.contact-left-side {
    position: relative;
}

.contact-left-side img {
    width: 100%;
    object-fit: cover;
    /* height: 100%; */
}

.info-card {
    position: absolute;
    top: 0;
    right: 0;
    transform: translate(0%, 50%);
}

input,
textarea {
    border-bottom: 1px solid #8b878785 !important;
    border: none;
    /* margin: .5rem 0; */
    width: 100%;
    padding: .3rem;
}

input:focus,
textarea:focus {
    border: none;
    outline: none;
}

button {
    border: 2px solid var(--second-main-color--);
    background-color: transparent;
    transition: all ease .4s;
}

button:hover {
    background-color: var(--second-main-color--);
    color: #fff;
    border: 2px solid #00000091;
}

span {
    color: red;
}
</style>