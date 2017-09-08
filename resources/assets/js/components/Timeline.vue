<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading">Timeline</div>
                
                    <div class="panel-body">

                        <post-tweet :tweets="tweets"></post-tweet>

                        <div class="media" v-for="tweet in tweets">
                            <div class="media-left">
                                <a href="">
                                    <img src="http://lorempixel.com/60/60" alt="tweet.user.name">
                                </a>
                            </div>
                            <div class="media-body">
                                <strong>{{ tweet.user.name }}</strong>
                                <p>{{ tweet.body }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import PostTweet from './PostTweet'

    export default {
        data() {
            return {
                tweets: []
            }
        },
        component: [
            PostTweet
        ],
        mounted() {
            console.log('Component mounted.')
            axios.get('tweets').then(response => {
                console.log(response)
                this.tweets = response.data
            })
        }
    }
</script>
