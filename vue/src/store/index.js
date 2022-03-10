import {createStore} from "vuex";
import axiosClient from "../axios";

const store =  createStore({
    state: {
        user: {
            data: {},
            token: sessionStorage.getItem("TOKEN")
        }

    },
    getters: {},
    actions: {
      login({commit},user){
        return axiosClient.post('/login',user)
        .then(({data}) => {
          commit('setUser', data)
          commit('setToken', data.token)
          return data
        })
      },
      logout({commit}) {
        console.log(store.state.user.token)
        return axiosClient.post('/logout')
          .then(response => {
            commit('logout')
            console.log(store.state.user.token)
            return response;
          })
      },
    },
    mutations: {
      logout: (state) => {
        state.user.token = null;
        state.user.data = {};
        sessionStorage.removeItem("TOKEN");
      },

      setUser: (state, user) => {
        state.user.data = user;
      },
      setToken: (state, token) => {
        state.user.token = token;
        sessionStorage.setItem('TOKEN', token);
      },
    },
    modules: {}
})


export default store;
