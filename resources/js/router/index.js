import {createWebHistory, createRouter} from "vue-router";

import Home from  '../pages/Home';
import About from '../pages/About';
import Register from '../pages/Register';
import Login from '../pages/Login';
import Dashboard from '../pages/Dashboard';

import Notes from '../components/Notes';
import AddNote from '../components/AddNote';
import EditNote from '../components/EditNote';

export const routes = [
    {
        name: 'home',
        path: '/',
        component: Home
    },
    {
        name: 'about',
        path: '/about',
        component: About
    },
    {
        name: 'register',
        path: '/register',
        component: Register
    },
    {
        name: 'login',
        path: '/login',
        component: Login
    },
    {
        name: 'dashboard',
        path: '/dashboard',
        component: Dashboard
    },
    {
        name: 'notes',
        path: '/notes',
        component: Notes
    },
    {
        name: 'addnote',
        path: '/notes/add',
        component: AddNote
    },
    {
        name: 'editnote',
        path: '/notes/edit/:id',
        component: EditNote
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes: routes,
});

export default router;