<template>
    <div class="row mt-5">
        <div class="col-8 offset-2">
            <button
                class="btn btn-block"
                :class="{
                    'btn-success': canClick,
                    'btn-danger': ! canClick,
                }"
                :disabled="! canClick"
                @click="click()"
            >
                {{ canClick ? 'Klikken maar' : clickableAt.from(moment) }}
            </button>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                moment: moment().locale('nl_NL'),
                clicks: {},
            }
        },
        props: {
            user: {
                required: true,
                type: Object,
            }
        },
        computed: {
            twoHoursAgo () {
                const now = this.moment.clone();
                return now.subtract(2, 'hours');
            },
            clickableAt () {
                const last = this.lastClick.clone();
                return last.add(2, 'hours');
            },
            lastClick () {
                if (this.clicks.length === 0) {
                    return moment().subtract(3, 'hours').locale('nl_NL');
                }

                return moment(_.last(this.clicks).clicked_at).locale('nl_NL');
            },
            canClick () {
                return this.twoHoursAgo >= this.lastClick;
            },
        },
        methods: {
            click () {
                axios.post(`/api/users/${this.user.slug}/clicked`).then((res) => {
                    this.clicks = res.data;
                });
            },
        },
        created() {
            this.clicks = this.user.clicks;

            setInterval(() => {
                this.moment = moment().locale('nl_NL');
            }, 1000);
        }
    }
</script>
