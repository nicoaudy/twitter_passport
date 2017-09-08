<template>
    <form action="#" @submit.prevent="post">
        <div class="form-group">
            <textarea v-model="body" cols="30" rows="2" class="form-control"></textarea>
            <button class="btn btn-default" type="submit">Post</button>
        </div>
    </form>
</template>

<script>
    export default {
        data() {
            return {
                body: null
            }
        },
        props: [
            'tweets'
        ],
        methods: {
            post() {
                axios.post('/tweets', {
                    body: this.body
                }).then(response => {
                    this.tweets.unshift(response.data)
                    this.body = null
                })
            }
        }
    }
</script>
