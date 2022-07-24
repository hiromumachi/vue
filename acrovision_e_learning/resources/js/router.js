import Vue from 'vue'
import VueRouter from 'vue-router'
import axios from 'axios'

import List from './components/admin/List.vue'
import Set from './components/admin/Set.vue'
import Add from './components/admin/Add.vue'
import Edit from './components/admin/Edit.vue'
import Top from './components/user/Top.vue'
import TopFromAdmin from './components/user/TopFromAdmin.vue'


Vue.use(VueRouter)

const routes = [
    {
        path: '/admin/list',
        name: 'list',
        component: List
    },
    {
        path: '/admin/set',
        name: 'set',
        component: Set
    },
    {
        path: '/admin/add',
        name: 'add',
        component: Add
    },
    {
        path: '/admin/edit',
        name: 'edit',
        component: Edit
    },
    {
        path: '/user/top',
        name: 'top',
        component: Top,
    },
    {
        //管理者からユーザーページへのパス
        path: '/user/topFromAdmin',
        name: 'topFromAdmin',
        component: TopFromAdmin,
        props: true,
    }

  ]

const router = new VueRouter({
    mode: 'history',
    routes
})

export default router
