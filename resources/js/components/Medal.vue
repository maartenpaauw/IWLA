<template>
    <div class="col-4 text-center">
        <h1
            v-if="unlocked"
            class="fas fa-medal"
            :style="style"
        ></h1>
        <h1
            v-if="! unlocked"
            class="fas fa-question text-muted"
        ></h1>
        <p class="text-muted">
            {{ clicks }} / {{ unlockedAt }}
        </p>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                style: {
                    'color': this.color,
                }
            }
        },
        props: {
            user: {
                required: true,
                type: Object,
            },
            color: {
                required: true,
                type: String,
            },
            unlockedAt: {
                required: true,
                type: Number,
            },
            clicks: {
                required: true,
                type: Number,
            }
        },
        computed: {
            unlocked () {
                return this.clicks >= this.unlockedAt;
            }
        }
    }
</script>
