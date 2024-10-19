<template>
    <div class="modal fade show d-block" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" aria-label="Close" @click="$emit('closeModal')"></button>
                    <div class="row">
                        <div class="col-12 col-md-6 modal-content-l ">
                            <img :src="product.image" alt="">
                        </div>
                        <div class="col-12 col-md-6 modal-content-r">
                            <h4 class="border-bottom">
                                {{ product.priceRange }}
                            </h4>
                            <small>
                                {{ product.availability }}
                            </small>
                            <h1 class="border-bottom py-4">
                                {{ product.title }}
                                <span>
                                    ({{ product.subtitle }})
                                </span>
                            </h1>
                            <p class="border-bottom">
                                {{ product.description }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { defineProps } from 'vue';

const props = defineProps({
    product: {
        type: Object,
        required: true
    }
});
</script>

<style scoped>
.modal.fade.show.d-block {
    display: block;
    opacity: 1;
}
</style>
