import Vue from 'vue'
import Vuex from 'vuex'
import { abilityPlugin, ability as appAbility } from './ability'

Vue.use(Vuex)

export const ability = appAbility

export const store = new Vuex.Store({
    state: {
        rules: []
    },
    mutations: {
        createSession(state, session) {
            state.rules = session.rules
        },
        destroySession(state) {
            state.rules = []
        },
    },
});