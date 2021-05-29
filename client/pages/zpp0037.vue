<template>
    <card title="zpp0037">
        This is zpp0037 page !!!
        <ul>
            <li v-for="zpp0037 of zpp0037s">{{ zpp0037.factory_name }}</li>
        </ul>
    </card>
</template>

<script>
import axios from 'axios'

export default {
    data() {
        return {
            zpp0037s: [],
        }
    },
    middleware: 'auth',
    name: "zpp0037",
    async asyncData({route, params}) {
        try {
            const { data } = await axios.get('/zpp0037/list');
            let zpp0037s = data.responseData
            return { zpp0037s };
        } catch (e) {
            console.log(e)
            return
        }
    }
}
</script>
