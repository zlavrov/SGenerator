// import { registerReactControllerComponents } from '@symfony/ux-react';
// import './bootstrap.js';
// any CSS you import will output into a single css file (app.css in this case)
// import './styles/app.css';
// registerReactControllerComponents(require.context('./react/controllers', true, /\.(j|t)sx?$/));
import React from 'react';
import ReactDOM from 'react-dom/client';
import Main from './Main.jsx';

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(<Main />);
