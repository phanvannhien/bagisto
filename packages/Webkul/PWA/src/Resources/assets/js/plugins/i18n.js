import Vue     from 'vue';
import VueI18n from 'vue-i18n';
import vi      from '../lang/vi.json'
Vue.use(VueI18n);

const messages = {
    'vi': vi
};

export default new VueI18n({
    locale: window.config.currentLocale.code, // set locale
    fallbackLocale: 'vi', // set fallback locale
    messages, // set locale messages
});