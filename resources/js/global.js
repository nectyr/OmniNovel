import Vue from 'vue'
import Account from './components/user/Account.vue'
import Selector from './components/book/Selector.vue'

new Vue({
    el: '#account',
    components: {
        Account
    }
})

new Vue({
    el: '#book',
    components: {
        Selector
    }
})
