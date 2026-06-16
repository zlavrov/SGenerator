import axios from "axios";

const api = axios.create();

api.defaults.baseURL = '/api/v1';

api.interceptors.request.use(
    config => {
        config.headers.Accept = 'application/json'
        // config.headers['Accept-Language'] = localStorage.getItem('lang');
        config.headers['Accept-Language'] = 'uk_UA';
        return config;
    },
    error => {}
)

api.interceptors.response.use({}, error => {});

export default api;
