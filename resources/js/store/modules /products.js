const state = () => ({
    products: []
});

const getters = {

};

const mutations = {
    getProducts: (state, products) => {
        state.products = products;
    }
};

const actions = {
    getProducts: ({ commit }) => {



    }
};

export default {
    namespace: true,
    state,
    getters,
    actions,
    mutations
};