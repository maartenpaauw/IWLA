<template>
    <div class="row mt-5">
        <app-medal :user="user" :clicks="clicks" :unlocked-at="5" color="#824A02"></app-medal>
        <app-medal :user="user" :clicks="clicks" :unlocked-at="10" color="#A7A7AD"></app-medal>
        <app-medal :user="user" :clicks="clicks" :unlocked-at="15" color="#D6AF36"></app-medal>
        <app-medal :user="user" :clicks="clicks" :unlocked-at="20" color="#E5E4E2"></app-medal>
        <app-medal :user="user" :clicks="clicks" :unlocked-at="25" color="#4286F4"></app-medal>
        <app-medal :user="user" :clicks="clicks" :unlocked-at="30" color="#33CC33"></app-medal>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                clicks: 0,
            }
        },
        props: {
            user: {
                required: true,
            }
        },
        methods: {
            getClicks() {
                axios.get(`/api/users/${this.user.slug}/clicks`).then((res) => {
                    this.clicks = res.data.clicks;
                });
            }
        },
        mounted() {
            this.getClicks();

            setInterval(() => {
                this.getClicks();
            }, 2000);
        }
    }
</script>
