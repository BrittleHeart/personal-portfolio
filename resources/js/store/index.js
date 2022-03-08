import { createLogger, createStore } from "vuex";
import { users } from './modules/users'
import { posts } from "./modules/posts";
import * as mutations from './mutations'
import * as actions from './actions'
import * as getters from './getters'

export const store = createStore({
    state: {
        requestUrl: 'http://personal-portfolio.test/api',
        fetchErrors: ''
    },
    mutations,
    actions,
    getters,
    modules: {
        users,
        posts,
    },
    plugins: NODE_ENV !== 'production' ? [createLogger()] : []
})

const { NODE_ENV } = process.env

