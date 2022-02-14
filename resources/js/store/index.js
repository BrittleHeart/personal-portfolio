import { createLogger, createStore } from "vuex";
import { users } from './modules/users'
import * as mutations from './mutations'
import * as actions from './actions'
import * as getters from './getters'

export const store = createStore({
    state: {
        fetchErrors: [
            {
                error: '',
                message: ''
            }
        ]
    },
    mutations,
    actions,
    getters,
    modules: {
        users,
    },
    plugins: NODE_ENV !== 'production' ? [createLogger()] : []
})

const { NODE_ENV } = process.env

