// Lodash
import _ from 'lodash';
window._ = _;

//Bootstrap 5
import * as Popper from '@popperjs/core';
window.Popper = Popper;
import 'bootstrap';

// Axios
import axios from 'axios';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


