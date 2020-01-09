import classes from '../css/main.scss';
import layout from '../css/layout.scss';
import typography from '../css/typography.scss';

import menu from './modules/menu';
import buttons from './modules/buttons';

import Siema from 'siema';

menu();
buttons();

new Siema();